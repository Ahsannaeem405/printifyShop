<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\orderDetail;
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
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
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
        foreach ($data as $data) {
            $total = $total + ($data->price * $data->qty);
        }


        return view('checkout', compact('total'));

    }

    public function cart_save(Request $request)
    {


        $id = \Session::get('user_id_shop');
        $data = cart::where('client_id', $id)->get();


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
        Session::put('your_name',  $request->f_name);
        Session::put('your_email',  $request->email);
        Session::put('client_id',  $id);
        Session::put('your_total',  $total);
        if ($request->payment == 'stripe') {

            $shop_data=$this->shop;

            return view('stripe', compact('total','shop_data'));

        } else {

            if ($total) {
                try {
                    $response = $this->gateway->purchase(array(
                        'amount' => $total,
                        'currency' => env('PAYPAL_CURRENCY'),
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
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database

                $tras=new transaction();
                $tras->client_id=Session::get('client_id');
                $tras->total=Session::get('your_total');
                $tras->email=Session::get('your_email');
                $tras->name=Session::get('your_name');
                $tras->shop_id=$this->shop->id;
                $tras->save();

                $order=Session::get('order_id');

                if($order)
                {
                    $od=order::find($order);
                    $od->payment='paid';
                    $od->update();
                }
                return redirect('cart')->with('success', 'Your Order has  Placed successfully!');


            } else {
                $order=Session::get('order_id');

                if($order)
                {
                    order::find($order)->delete();
                }

                return redirect('cart')->with('error', 'Something wents wrong!');
            }
        } else {
            $order=Session::get('order_id');

            if($order)
            {
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
        if($request->total<=0)
        {
            return redirect('cart')->with('error', 'Something wents wrong!');

        }
        $total=$request->total;
        Stripe\Stripe::setApiKey($request->stripe_sec);
      $charge=  Stripe\Charge::create ([
            "amount" => 100 * $total,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment"
        ]);


      if($charge->status=='succeeded')
      {

          $tras=new transaction();
          $tras->client_id=Session::get('client_id');
          $tras->total=Session::get('your_total');
          $tras->email=Session::get('your_email');
          $tras->name=Session::get('your_name');
          $tras->shop_id=$this->shop->id;
          $tras->save();


          $order=Session::get('order_id');

          if($order)
          {
              $od=order::find($order);
              $od->payment='paid';
              $od->update();
          }
          return redirect('cart')->with('success', 'Your Order has Placed successfully!');
      }
      else{

          $order=Session::get('order_id');

          if($order)
          {
              order::find($order)->delete();
          }

          return redirect('cart')->with('error', 'Something wents wrong!');


      }




        return back();
    }
}
