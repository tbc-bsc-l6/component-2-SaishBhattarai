<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="Admin/ssets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="Admin/assets/images/favicon.png" />
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
                <td><a class="btn btn-success" href="">Edit</td>
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