<!DOCTYPE html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Checkout</title>
            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="jquery-3.1.0.min.js"></script>


            <meta name="description" content="Source code generated using layoutit.com">
            <meta name="author" content="LayoutIt!">

            <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript">
            window.onload = function() {
            document.getElementById("log").onclick=function () {
            location.href = "signin"; }
            document.getElementById("sig").onclick=function () {
            location.href = "signup";}
            document.getElementById("buy").onclick=function () {
            location.href = "confirmation";}
          }
            
            </script>
           <!--<script type="text/javascript">
            window.onload = function() {
            document.getElementById("sig").onclick=function () {
            location.href = "signup";
            }
            }-->
            
            

  </head>

  <body style="font-family: 'Raleway', sans-serif;">
   @include('pages.partials.header')

      <div class="register">
      <h2 style="padding:10px"> You must Login or Sign Up to buy the product</h2>
      <button type="button" id="log" class="btn btn-danger btn-lg" style="margin:40px">Login</button>
      <button type="button" id="sig" class="btn btn-danger btn-lg" style="margin:40px">Sign Up</button>
      </div>
      <div class="checkout">
      <h2 style="padding:10px"> Checkout</h2>
      <table class="table table-bordered ">
      <tr class="success">
          <td>Product Name</td>
          <td>Availability</td>
          <td>Quantity</td>
          <td>Price</td>
          <td>Payment Options</td>
          <td>Actions</td>
      </tr>
       <tr>
          <td>Iphone 6S</td>
          <td>In Stock</td>
          <td> 1 </td>
          <td> Rs 45,000</td>
          <td> Cash On Delivery</td>
          <td> Remove</td>
      </tr>

      </table>
      <h2 style="padding:10px">Shipping Address</h2> <input type="text" name="address" id="ship" style="width: 300px">
      <button type="button" class="btn btn-danger btn-lg" id="buy" style="margin-left:400px">Buy Now</button>
      </div>