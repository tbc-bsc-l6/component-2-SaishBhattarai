<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory(){
        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request){
        $data=new catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Added Catagory');
    }
    public function delete_catagory($id){
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function view_product(){
        $catagory=catagory::all();
        return view('admin.product',compact('catagory'));
    }
    public function add_product(Request $request){
        $product=new product;
        $product->title=$request->title;
        $product->desciption=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->catagory=$request->catagory;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back();
    }
    public function show_product(){
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }
    public function delete_product($id){
        $product=product::find($id);
        $product->delete();
        return redirect()->back();
    }
    public function update_product($id){
        $product=product::find($id);
        $catagory=catagory::all();
        return view('admin.update_product',compact('product','catagory'));
    }
    public function update_product_confirm(Request $request,$id){
        $product=product::find($id);
        $product->title=$request->title;
        $product->desciption=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->catagory=$request->catagory;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back();
    }
}
