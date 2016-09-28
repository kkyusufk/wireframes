<!DOCTYPE html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Sign in</title>
            <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


            <meta name="description" content="Source code generated using layoutit.com">
            <meta name="author" content="LayoutIt!">

           <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            
  </head>

  <body style="font-family: 'Raleway', sans-serif;">
   @include('pages.partials.header')
       <form class="form-horizontal" style="padding-left: 500px; padding-top: 50px">
    <fieldset style="width: 400px">
    <legend> Login </legend> 
        <div class="form-group" style="padding-top: 50px">
            <label for="inputEmail" class="control-label col-xs-2">Email</label>
            <div class="col-xs-6">
                <input type="email" class="form-control"  placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-8">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-8">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

        </div>
        <a href="signup" style="padding-left: -100px"><strong>No account?</strong></a>
        <a href="forgotpassword" style="padding-left: 100px"><strong>Forgot password</strong></a>
    </fieldset>
</form><br><br><br><br><br><br><br><br><br>
      
      </body>
      </html>