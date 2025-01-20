<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $product=product::paginate(6);
        return view("home.userpage",compact('product'));
    }
    public function redirect(){
        
            $usertype=Auth::user()->usertype;
            if($usertype=='1'){
                return view("admin.home");
                
            }
            else {
                $product=product::paginate(6);
                return view("home.userpage",compact('product'));
            }
    }
    public function product_details($id){
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);

            // Check if the address is missing and set a default value
            $address = $user->address ?? 'Address not provided';

            $cart = new Cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $address;  // Use the fallback value if address is null
            $cart->user_id = $user->id;
            $cart->product_title = $product->title;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } else {
            return redirect('login')->with('error', 'You need to log in to add products to the cart.');
        }
    }
    public function show_cart(){
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.showcart',compact('cart'));
        } 
        else {
            return redirect('login')->with('error', 'You need to log in to add products to the cart.');
        }  
    }
    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function cash_order()
{
    $user = Auth::user();
    $userid = $user->id;

    // Fetch user's cart data
    $data = cart::where('user_id', '=', $userid)->get();

    foreach ($data as $dataItem) {
        // Create a new order instance
        $order = new order();

        // Assign data to the order object
        $order->name = $dataItem->name;
        $order->email = $dataItem->email;
        $order->phone = $dataItem->phone;
        $order->address = $dataItem->address ?? 'Address not provided'; // Handle null address
        $order->user_id = $dataItem->user_id;
        $order->product_title = $dataItem->product_title;
        $order->price = $dataItem->price;
        $order->quantity = $dataItem->quantity;
        // $order->image = $dataItem->image; 
        $order->product_id = $dataItem->product_id;
        $order->payment_status = 'cash on delivery';
        $order->delivery_status = 'processing';

        // Save the order
        $order->save();

        // Remove the item from the cart
        $cart = cart::find($dataItem->id);
        if ($cart) {
            $cart->delete();
        }
    }

    // Redirect back with success message
    return redirect()->back()->with('success', 'Product ordered successfully!');
    }
    

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Adjust the column names based on your database schema
        $results = Product::where('title', 'LIKE', "%$query%") // Replace `name` with the correct column name
                        ->orWhere('desciption', 'LIKE', "%$query%")    // Replace `description` with the correct column name
                        ->get();

        return view('home.search_results', compact('results', 'query'));
    }

}


