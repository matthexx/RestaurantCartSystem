<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;

class ProductsController extends Controller
{
    public function getMenu(){
        $productsBreakfast = Product::select('imagePath', 'title', 'description', 'price', 'id')
        ->where('productCategory','=', 'breakfast')
        ->take(8)
        ->get();

        $productsLaunch = Product::select('imagePath', 'title', 'description', 'price')
        ->where('productCategory','=', 'launch')
        ->take(8)
        ->get();

        $productsDinner = Product::select('imagePath', 'title', 'description', 'price')
        ->where('productCategory','=', 'dinner')
        ->take(8)
        ->get();

        $productsDrink = Product::select('imagePath', 'title', 'description', 'price')
        ->where('productCategory','=', 'drinks')
        ->take(8)
        ->get();

        $productsCombo = Product::select('imagePath', 'title', 'description', 'price')
        ->where('productCategory','=', 'combo')
        ->take(8)
        ->get();

        $productsPasta = Product::select('imagePath', 'title', 'description', 'price')
        ->where('productCategory','=', 'pasta')
        ->take(8)
        ->get();
        return view('shop.menu', ['productsBf' => $productsBreakfast, 'productsLu' => $productsLaunch, 'productsDn' => $productsDinner, 
        'productsDr' => $productsDrink,  'productsCo' => $productsCombo,  'productsPa' => $productsPasta]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.menu');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('product.cart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
      
        return redirect()->route('product.cart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('/shop/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('/shop/cart', ['products' => $cart->items, 'totalPrice' =>$cart->totalPrice]);
    }
}
