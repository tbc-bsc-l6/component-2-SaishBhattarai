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
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
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
                <h2 class="h2_font">Add Catagory</h2>
                <from>
                    <input class="input_color" type="text" name="name" placeholder="Write catagory name">
                    <input type="submit" class="btn btn-primay" name="submit" value="Add Catagory">
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