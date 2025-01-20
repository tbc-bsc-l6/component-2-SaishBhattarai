<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/football.jpg" type="">
      <title>Football</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <!-- header section -->
      @include('home.header')
      <!-- header section -->
      <style type="text/css">
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;  
        }
        table,th.td{
            border: solid black 1px;
        }
        .th_deg{
            font-size: 30px;
            padding: 5px;
        }
        
    </style>
   </head>
   <body>
      <div class="hero_area">
         <div class="center">
            <table><tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
                </tr>
                @foreach($cart as $cart)
                <tr>
                <th>{{$cart->product_title}}</th>
                <th>{{$cart->quantity}}</th>
                <th>{{$cart->price}}</th>
                <th><img src="/product/{{$cart->image}}"></th>
                </tr>
                @endforeach
             </table>
         </div>
         </div>
         
         <!-- footer -->
         @include('home.footer')
         <!-- footer -->

      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>