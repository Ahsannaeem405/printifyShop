<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\productDetail;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Omnipay\Omnipay;

class CartController extends Controller
{
    private $shop;
    public $gateway;

    public function __construct()
    {

        $this->shop = User::where('email', 'rehmanahmad101@gmail.com')->first();
        // dd($this->shop);
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID','AXOAJpdbLgnDcBe9fcd2CoGEQ43xyp9op4BvKvFSzvG-OM9IHnkBqjHuF0_otU7OtK8TfaodLcqQZtO6'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET','EHJd_9sp3ok8PkczinIoMQ260ohIeZLq6aVa9YLl0fOwtMKJMc3vPLhaxEogCJIqoutj-R53xzBMqUgr'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live

    }

    public function cart()
    {


        if (session()->has('user_id_shop')) {
            $id = \Session::get('user_id_shop');

            $cart = cart::where('client_id', $id)->get();

        } else {
            $id = 0;

            $cart = cart::where('client_id', $id)->get();
        }
        return view('cart', compact('cart'));

    }

    public function cart_del($id)
    {
        cart::find($id)->delete($id);
        return redirect('cart')->with('success', 'Item deleted successfully!');

    }

    public function cart_update(Request $request)
    {
        for ($i = 0; $i < count($request->cart); $i++) {
            $cart = cart::find($request->cart[$i]);
            $cart->qty = $request->quantity[$i];
            $cart->update();
        }
        return redirect('cart')->with('success', 'Cart Updated successfully!');

    }

    public function checkout()
    {
        $id = \Session::get('user_id_shop');
        $data = cart::where('client_id', $id)->get();
        $total = 0;
         $data = cart::where('client_id', $id)->get();
       // dd($data[0]->productDetail);



        // 1320
        foreach ($data as $data) {
            $total = $total + ($data->price * $data->qty);

            $id=$data->product->product_id;
             $respose2 =\Http::withToken(env('STORE_TOKEN','CshXYfMUt98u1PcRFJuKphZ8ZgFMfv8cxEk8U2cJ'))->get ('https://api.printful.com/store/products/'.$id);
            $data2 = json_decode($respose2->body());
            $vari_oid=$data2->result->sync_variants[0]->variant_id;
            $update_var_id = cart::find($data->id);
            $update_var_id->variation_id=$vari_oid;
            $update_var_id->update();


        }


        return view('checkout', compact('total'));

    }

    public function cart_save(Request $request)
    {
//$pro=261931936;
        // $respose2 =\Http::withToken(env('STORE_TOKEN','CshXYfMUt98u1PcRFJuKphZ8ZgFMfv8cxEk8U2cJ'))->get ('https://api.printful.com/orders');
        //  $data2 = json_decode($respose2->body());
        // dd($data2);
// $respose2 =\Http::withToken(env('STORE_TOKEN','CshXYfMUt98u1PcRFJuKphZ8ZgFMfv8cxEk8U2cJ'))->get ('https://api.printful.com/store/products/'.$pro);
//          $data2 = json_decode($respose2->body());
//          dd($data2->result->sync_variants[0]->variant_id);
        // 1320

        https://api.printful.com/orders
        $id = \Session::get('user_id_shop');
        $data = cart::where('client_id', $id)->get();
       // dd($data[0]->productDetail);


        $recipient = array(
            "name" => $request->f_name,
            "country_code" => 'PK',
            "address1" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
            "city" => $request->city,
            "state_name"=>$request->country,
            "zip" => $request->zip
        );

        foreach ($data as $cart)
        {
            $cover_img=$cart->productDetail2[0]->orderfrontimg;
            $user_id=1;
            $image = file_get_contents($cover_img);
            file_put_contents(public_path("order/order".$user_id.".png"), $image);
            $cover_img_get="order/order".$user_id.".png";
            //dd($cover_img_get);
            $getpath = env('Get_Path1');
            $url=$getpath.$cover_img_get;


            $files[]= array(
                "url"=>$url,
            );

            $item[] = array(
                "variant_id"=> $cart->variation_id,
                "quantity"=> $cart->qty,
                'files' => $files

            );
        }



        $final = array(

            'Recipient' => $recipient,

            
            'item' => $item,
        );

        //dd(json_encode($final));

       
         $respose2 =\Http::withToken(env('STORE_TOKEN','CshXYfMUt98u1PcRFJuKphZ8ZgFMfv8cxEk8U2cJ'))->asJson()
            ->post('https://api.printful.com/orders' , [
                'recipient' => $recipient,
                'items' => $item
            ]
        );
         $data2 = json_decode($respose2->body());    

        
           
        


        $order = new order();
        $order->customer_id = $id;
        $order->shop_id = $this->shop->id;
        $order->first_name = $request->f_name;
        $order->last_name = $request->l_name;
        $order->country = $request->country;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->info = $request->info;
        $order->zip = $request->zid;
        $order->status=$data2->result->status;
        $order->main_order_id=$data2->result->id;
        $order->save();
        Session::put('order_id', $order->id);


        $total = 0;
        foreach ($data as $data) {
            $total = $total + ($data->price * $data->qty);
            $orderDetail = new orderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $data->product_id;
            $orderDetail->product_main_id = $data->product_main_id;
            $orderDetail->qty = $data->qty;
            $orderDetail->price = $data->price;
            $orderDetail->size = $data->size;
            $orderDetail->color = $data->color;

            $orderDetail->save();

            $data->delete();
        }
        Session::put('your_name', $request->f_name);
        Session::put('your_email', $request->email);
        Session::put('client_id', $id);
        Session::put('your_total', $total);
        if ($request->payment == 'stripe') {

            $shop_data = $this->shop;

            return view('stripe', compact('total', 'shop_data'));

        } else {

            if ($total) {
                try {
                    $response = $this->gateway->purchase(array(
                        'amount' => $total,
                        'currency' => env('PAYPAL_CURRENCY','EUR'),
                        'returnUrl' => url('paymentsuccess'),
                        'cancelUrl' => url('paymenterror'),
                    ))->send();

                    if ($response->isRedirect()) {
                        $response->redirect(); // this will automatically forward the customer
                    } else {
                        // not successful
                        return $response->getMessage();
                    }
                } catch (Exception $e) {
                    return $e->getMessage();
                }
            }
        }


    }

    public function payment_success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr_body = $response->getData();
                $tras = new transaction();
                $tras->client_id = Session::get('client_id');
                $tras->total = Session::get('your_total');
                $tras->email = Session::get('your_email');
                $tras->name = Session::get('your_name');
                $tras->shop_id = $this->shop->id;
                $tras->save();

                $order = Session::get('order_id');

                if ($order) {
                    $od = order::find($order);
                    $od->payment = 'paid';
                    $od->update();
                }
                return redirect('cart')->with('success', 'Your Order has  Placed successfully!');


            } else {
                $order = Session::get('order_id');

                if ($order) {
                    order::find($order)->delete();
                }

                return redirect('cart')->with('error', 'Something wents wrong!');
            }
        } else {
            $order = Session::get('order_id');

            if ($order) {
                order::find($order)->delete();
            }

            return redirect('cart')->with('error', 'Something wents wrong!');
        }
    }

    public function payment_error()
    {
        return 'User is canceled the payment.';
    }

    public function stripePost(Request $request)
    {
        if ($request->total <= 0) {
            return redirect('cart')->with('error', 'Something wents wrong!');

        }
        $total = $request->total;
        Stripe\Stripe::setApiKey($request->stripe_sec);
        $charge = Stripe\Charge::create([
            "amount" => 100 * $total,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment"
        ]);


        if ($charge->status == 'succeeded') {

            $tras = new transaction();
            $tras->client_id = Session::get('client_id');
            $tras->total = Session::get('your_total');
            $tras->email = Session::get('your_email');
            $tras->name = Session::get('your_name');
            $tras->shop_id = $this->shop->id;
            $tras->save();


            $order = Session::get('order_id');

            if ($order) {
                $od = order::find($order);
                $od->payment = 'paid';
                $od->update();
            }
            return redirect('cart')->with('success', 'Your Order has Placed successfully!');
        } else {

            $order = Session::get('order_id');

            if ($order) {
                order::find($order)->delete();
            }

            return redirect('cart')->with('error', 'Something wents wrong!');


        }


        return back();
    }
}
