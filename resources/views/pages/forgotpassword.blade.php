<!DOCTYPE html>
<html lang="en">
  <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Forgot password</title>
            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="jquery-3.1.0.min.js"></script>

            <meta name="description" content="Source code generated using layoutit.com">
            <meta name="author" content="LayoutIt!">

            <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
           
           

  </head>

  <body style="background-color: white; font-family: 'Raleway', sans-serif; ">
   @include('pages.partials.header')
   <form class="form-horizontal" style="padding-left: 500px; padding-top: 50px; height: 100%;">
      <fieldset style="width: 400px;">
      <legend>Enter Email</legend>
      <div class="col-md-8" >
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control"  placeholder="Email">
    </div>
   
    
    <button type="submit" class="btn btn-default" id="new"><strong><a href="newpassword">Reset password link</a></strong></button>
    </div>
    </fieldset>
    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </body>
      </html>