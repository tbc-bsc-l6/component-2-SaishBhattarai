<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font_size{
            text-align: center;
            font-size:40px;
            padding-top: 20px;
        }
        .img_size{
            width: 150px;
            height:150px;
        }
        .th_color{
            background: darkblue;
        }
        .th_deg{
            padding: 30px;
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
        <h2 class="font_size">All Product</h2>
        <table class="center">
            <tr class="th_color">
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Catagory</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Product Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Edit</th>
            </tr>
            @foreach($product as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->desciption}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->catagory}}</td>
                <td>{{$product->price}}</td>
                <td><img class="img_size" src="/product/{{$product->image}}"></td>
                <td><a class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</td>
                <td><a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</td>
            </tr>
            @endforeach
        </table>
      </div>
      </div>   
    </div>
     <!-- script -->
     @include('admin.script')
     <!-- script -->
  </body>
</html>