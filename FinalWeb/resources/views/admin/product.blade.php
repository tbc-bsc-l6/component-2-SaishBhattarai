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
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div>
                 <label>Product Title</label>
                 <input class="text_color" type="text" name="title" placeholder="Write a Title" require="">
                 </div>
                 <div>
                 <label>Product description</label>
                 <input class="text_color" type="text" name="description" placeholder="Write a description" require="">
                 </div>
                 <div>
                 <label>Product Price</label>
                 <input class="text_color" type="number" name="Price" placeholder="Write a Price" require="">
                 </div>
                 <div>
                 <label>Discount Price</label>
                 <input class="text_color" type="number" name="dis_price" placeholder="Write a Discount">
                 </div>
                 <div>
                 <label>Product Quantity</label>
                 <input class="text_color" type="number" min="0" name="Quantity" placeholder="Write a Quantity" require="">
                 </div>
                 <div>
                 <label>Product Catagory</label>
                 <select class="text_color" name="catagory">
                    @foreach($catagory as $catagory)
                    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                    @endforeach
                 </select>
                 </div>
                 <div>
                 <label>Product Image</label>
                 <input type="file" name="image" require="">
                 </div>
                 <div>
                
                 <input type="submit" value="Add Product" class="btn btn-primary">
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