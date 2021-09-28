<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
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
        $product=product::find($id);



        $respose2 = \Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzN2Q0YmQzMDM1ZmUxMWU5YTgwM2FiN2VlYjNjY2M5NyIsImp0aSI6ImRmNDkwMjQ0ZDc2NDAwZDI2ZWM5YjJiNWViZWNkNDlkMDkyODU1ZmE0MTk5MjU0MmFjMzRjNmZmODFmNzc0NzAwZTJmYzc4ZDJhNDdjYWNhIiwiaWF0IjoxNjMwOTExNjA1LCJuYmYiOjE2MzA5MTE2MDUsImV4cCI6MTY2MjQ0NzYwNSwic3ViIjoiODEzNjk0OCIsInNjb3BlcyI6WyJzaG9wcy5tYW5hZ2UiLCJzaG9wcy5yZWFkIiwiY2F0YWxvZy5yZWFkIiwib3JkZXJzLnJlYWQiLCJvcmRlcnMud3JpdGUiLCJwcm9kdWN0cy5yZWFkIiwicHJvZHVjdHMud3JpdGUiLCJ3ZWJob29rcy5yZWFkIiwid2ViaG9va3Mud3JpdGUiLCJ1cGxvYWRzLnJlYWQiLCJ1cGxvYWRzLndyaXRlIiwicHJpbnRfcHJvdmlkZXJzLnJlYWQiXX0.AMkSlnuiwGrOZXl-EKzeFw9lsCtb9Mlpay60uYp53ZEUfcIrgtHfoQm8C08J7B_fxe57bBeApDIeQuNapw4')
            ->get('https://api.printify.com/v1/shops/2870129/products/' . $product->product_id . '.json');
        $data2 = json_decode($respose2->body());


        return view('productDetail',compact('product','data2'));
    }
    public function buy(Request $request)
    {


        if(session()->has('user_id_shop'))
        {

        $id=   \Session::get(('user_id_shop'));
        $cart =new cart();
        $cart->client_id=$id;
        $cart->product_main_id=$request->product_main_id;
        $cart->product_id=$request->product_id;
        $cart->shop_id=$this->shop->id;
        $cart->qty=$request->qty;
        $cart->color=$request->color;
        $cart->variation_id=$request->variation_id;
        $cart->price=$request->price;
        $cart->size=$request->size;
        $cart->save();
return redirect('cart')->with('success','Product added to cart successfully!');

        }
        else{
           $string = Str::random(40);
            \Session::put('user_id_shop',$string);

            $cart =new cart();
            $cart->client_id=$string;
            $cart->product_main_id=$request->product_main_id;
            $cart->product_id=$request->product_id;
            $cart->shop_id=$this->shop->id;
            $cart->qty=$request->qty;
            $cart->color=$request->color;
            $cart->price=$request->price;
            $cart->size=$request->size;
            $cart->save();
            return redirect('cart')->with('success','Product added to cart successfully!');

        }



    }
}
