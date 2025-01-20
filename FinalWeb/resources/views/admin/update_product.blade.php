<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;   
        }
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- sidebar -->
       @include('admin.sidebar')
      <!-- sidebar -->
      <!-- navbar -->
      @include('admin.navbar')
      <!-- navbar -->  
        <div class="main-panel">
           <div class="content-wrapper">
            <div class="div_center">
                <h1 class="font_size">Add Product</h1>
                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div>
                 <label>Product Title</label>
                 <input class="text_color" type="text" name="title" placeholder="Write a Title" require="" value="{{$product->title}}">
                 </div>
                 <div>
                 <label>Product description</label>
                 <input class="text_color" type="text" name="description" placeholder="Write a description" require="" value="{{$product->desciption}}">
                 </div>
                 <div>
                 <label>Product Price</label>
                 <input class="text_color" type="number" name="price" placeholder="Write a Price" require="" value="{{$product->price}}">
                 </div>
                 <div>
                 <label>Product Quantity</label>
                 <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Quantity" require="" value="{{$product->quantity}}">
                 </div>
                 <div>
                 <label>Product Catagory</label>
                 <select class="text_color" name="catagory" require="" >
                 <option value="{{$product->catagory}}" selected="">
                  {{$product->catagory}}
                 </option>
                 @foreach($catagory as $catagory)
                    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                 @endforeach
                 </select>
                 </div>
                 <div>
                 <label>Current Product Image</label>
                 <img  style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
                 </div>
                 <div>
                 <label>Change Product Image</label>
                 <input type="file" name="image" require="" value="{{$product->image}}">
                 </div>
                 <div>
                
                 <input type="submit" value="Update Product" class="btn btn-primary">
                 </div>
                </form>
            </div>
           </div>
        </div>
     </div>
     <!-- script -->
     @include('admin.script')
     <!-- script -->
  </body>
</html>