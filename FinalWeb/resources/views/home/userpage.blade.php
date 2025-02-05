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
   </head>
   <body>
      <div class="hero_area">

         
         <!-- slider section -->
         @include('home.slider')
        <!-- slider section -->
      </div>
         <!-- why section -->
         @include('home.why')
         <!-- why section -->
         <!-- arrival section -->
         @include('home.arrival')
         <!-- arrival section -->
         <!-- product section -->
         @include('home.product') 
         <!-- product section -->
         
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