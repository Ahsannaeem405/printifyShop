<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use App\Models\User;
use App\Models\clientPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class clientController extends Controller
{

    private $shop;

    public function __construct()
    {
        $this->shop = User::where('email', 'rehmanahmad101@gmail.com')->first();

    }

    public function index()
    {

        $shop = $this->shop;


        $product = product::where('user_id', $this->shop->id)->where('status', 'publish')->limit(4)->get();


        return view('index', compact('shop', 'product'));
    }

    public function products()
    {



        $item[] = array(
            "id" => 73196,
            "price" => 433,
            'is_enabled' => true,


        );
        $item[] = array(
            "id" => 73197,
            "price" => 433,
            'is_enabled' => true,


        );




        $item[] = array(
            "id" => 73199,
            "price" => 433,
            'is_enabled' => true,


        );

        $item[] = array(
            "id" => 73200,
            "price" => 433,
            'is_enabled' => true,


        );
        $item[] = array(
            "id" => 73201,
            "price" => 433,
            'is_enabled' => true,


        );

        $item[] = array(
            "id" => 73203,
            "price" => 433,
            'is_enabled' => true,


        );
        $item[] = array(
            "id" => 73204,
            "price" => 433,
            'is_enabled' => true,


        );

        $item[] = array(
            "id" => 73207,
            "price" => 433,
            'is_enabled' => true,


        );
        $item[] = array(
            "id" => 73208,
            "price" => 433,
            'is_enabled' => true,


        );
        $item[] = array(
            "id" => 73209,
            "price" => 433,
            'is_enabled' => true,


        );

        $item[] = array(
            "id" => 73211,
            "price" => 433,
            'is_enabled' => true,


        );




        $image[] = array(
            'id' => '615418498a1e3b00067b2e07',
            "x" => 100,
            "y" => 0.5,
            "scale" => 1,
            "angle" => 0
        );

        $placeholder[] = array(
            'position' => 'front',
            'images' => $image,
        );

        $print[] = array(
            "variant_ids" => [73196,73197,73199,73200,73201,73203,73204,73207,73208,73209,73211],
            "placeholders" => $placeholder,


        );

        $final=array(
            'title' => 'rehman',
            'description' => 'rehman',
            'blueprint_id' => 706,
            'print_provider_id' => 61,
            'variants' => $item,
            'print_areas' => $print,
        );

       // dd(json_encode($final));

        $order = \Http::withToken(env('STORE_TOKEN'))
            ->asJson()
            ->put('https://api.printify.com/v1/shops/' . env('SHOP_ID') . '/products/61554a5a2b8731359d1107f3.json',


$final


            );


        //dd($order->body());


        $shop = $this->shop;


        $product = product::where('user_id', $this->shop->id)->where('status', 'publish')->get();


        return view('products', compact('product'));

    }

    public function about()
    {
        $shop = $this->shop;

        return view('about', compact('shop'));
    }

    public function productDetail($id)
    {
        $product = product::find($id);
        $price=clientPrice::where('shop_id',$this->shop->id)->where('product_id',$product->product_id)->value('updated');
         
 
        // $respose2 = \Http::withToken(env('STORE_TOKEN','CshXYfMUt98u1PcRFJuKphZ8ZgFMfv8cxEk8U2cJ'))
        //     ->get('https://api.printify.com/v1/shops/' . env('SHOP_ID') . '/products/' . $product->product_id . '.json');
        // $data2 = json_decode($respose2->body());


        return view('productDetail', compact('product','price'));
    }

    public function buy(Request $request)
    {


        if (session()->has('user_id_shop')) {

            $id = \Session::get(('user_id_shop'));
            $cart = new cart();
            $cart->client_id = $id;
            $cart->product_main_id = $request->product_main_id;
            $cart->product_id = $request->product_id;
            $cart->shop_id = $this->shop->id;
            $cart->qty = $request->qty;
            $cart->color = $request->color;
            $cart->variation_id = $request->variation_id;
            $cart->price = $request->price;
            $cart->size = $request->size;
            $cart->save();
            return redirect('cart')->with('success', 'Product added to cart successfully!');

        } else {
            $string = Str::random(40);
            \Session::put('user_id_shop', $string);

            $cart = new cart();
            $cart->client_id = $string;
            $cart->product_main_id = $request->product_main_id;
            $cart->product_id = $request->product_id;
            $cart->shop_id = $this->shop->id;
            $cart->qty = $request->qty;
            $cart->color = $request->color;
            $cart->price = $request->price;
            $cart->size = $request->size;
            $cart->save();
            return redirect('cart')->with('success', 'Product added to cart successfully!');

        }


    }
}
