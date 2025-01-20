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
        .total_deg{
            font-size: 30px;
            padding: 50px;
            text-align: center;
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
                <?php $totalprice=0; ?>
                @foreach($cart as $cart)
                <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}}</td>
                <td><img src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" href="{{ url('remove_cart/'.$cart->id) }}">Remove</a></td>
                </tr>

                <?php $totalprice=$totalprice + $cart->price ; ?>
                @endforeach
             </table>
         </div>
         <h1 class="total_deg">Total Price : {{$totalprice}}</h1>
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