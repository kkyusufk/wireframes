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
             </head>

  <body style="font-family: 'Raleway', sans-serif; background-color: white;">

   @include('pages.partials.header')
   <div style="height: 100%;">

   <h1 style="font-family: 'Raleway', sans-serif;"> Order Confirmed</h1>
   <br>
   <h2 style="font-family: 'Raleway', sans-serif;"> Your order for the following products have been placed</h2>
   <br>
   <h2 style="font-family: 'Raleway', sans-serif;"> Except delivery in 7-8 days</h2>
   <table class="table table-bordered ">
      <tr class="success">
          <td>Sr No</td>
          <td>Product Name</td>
          <td>Categories</td>
          <td>Price</td>
          <td>Payment Options</td>
          <td>Status</td>
      </tr>
       <tr>
          <td>1</td>
          <td>Iphone 6S</td>
          <td> Mobile </td>
          <td> Rs 45,000</td>
          <td> Cash On Delivery</td>
          <td> Pending</td>
      </tr>

      </table>
      <br><br><br><br><br><br><br><br><br>
   </div>
   </body>
   </html>