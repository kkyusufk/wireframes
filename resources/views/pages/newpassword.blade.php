<!DOCTYPE html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Forgot password</title>
            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


            <meta name="description" content="Source code generated using layoutit.com">
            <meta name="author" content="LayoutIt!">

            <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            

  </head>

  <body style="font-family: 'Raleway', sans-serif; background-color: white">
   @include('pages.partials.header')

     <form class="form-horizontal" style="padding-left: 500px; padding-top: 50px" >
     <fieldset style="width: 400px;">
     <legend>Reset Password</legend>
    <div class="form-group">
        <label for="inputEmail">New password</label>
        <input type="password" class="form-control"  placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="inputPassword">Re-enter Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Re-enter Password">
    </div>
   
    <button type="submit" class="btn btn-primary"><strong>Reset Password</strong></button>
    </fieldset>
</form><br><br><br><br><br><br><br><br><br><br><br>
      </body>
      </html>