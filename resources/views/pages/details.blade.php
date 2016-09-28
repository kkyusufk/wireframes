<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;

  }
  </style>
</head>
<body style="font-family: 'Raleway', sans-serif; width: 100% ">
@include('pages.partials.header')

<div class="container" style="width: 1000px; height:500px">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >

      <div class="item active">
        <img src="{{asset('img/if.png')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>

      <!-- <div class="item">
        <img src="{{asset('img/iphone.jpg')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
 -->    
      <div class="item">
        <img src="{{asset('img/Is.jpg')}}"  alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="{{asset('img/Ib.jpg')}}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div style="padding-left:190px; width: 800px">
<h1 style="margin-top: 40px"> Phone Specifications</h1>
<hr>
<span class="glyphicon glyphicon-phone" ></span><h2 style="float: right">Iphone 6S Gold 16GB</h2><br><br>
<span class="glyphicon glyphicon-camera" ></span><h2 style="float: right">12-MP camera</h2><br><br>
<span class="glyphicon glyphicon-cloud" ></span><h2 style="float: right"> Icloud supported</h2><br><br>
<span class="glyphicon glyphicon-lock" ></span><h2 style="float: right"> Touch ID</h2>
</div><br>
<div style="padding-left: 190px; width: 800px"> 
<h1 >Buying Options</h1>
<hr>
<h2> Price : </h2> <h3 style="color:red;">Rs 45,000</h3>
<h2 >Availability :</h2> <h3 style="color:red;">In Stock</h3>
<h2 > Payment Options</h2>
<input type="radio" name="cod"><strong>Cash On Delivery</strong><br><br>
<button class="btn btn-lg btn-danger"><a style="text-decoration: none; color:black" href="checkout"> <strong>Checkout</strong></a></button>
</div>

</body>
</html>