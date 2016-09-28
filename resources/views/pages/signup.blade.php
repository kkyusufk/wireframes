<!DOCTYPE html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Sign Up</title>
             <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



            <meta name="description" content="Source code generated using layoutit.com">
            <meta name="author" content="LayoutIt!">

            <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
            

  </head>

  <body  style="font-family: 'Raleway', sans-serif; ">
   @include('pages.partials.header')
   <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso"">
 <div class="container-fluid"  >
  <div class="row">
   <div class=" col-xs-8">
    <form method="post" style="padding-left: 400px; font-family: 'Raleway', sans-serif;">
    <fieldset>
    <legend style="font-family: 'Raleway', sans-serif;">New Account</legend>
     <div class="form-group ">
      <label class="control-label " for="name">
       First Name
      </label>
      <div class="input-group">
       <input class="form-control" id="name" name="name" type="text" />
       <div class="input-group-addon">
        <i class="fa fa-black-tie">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name1">
       Last Name
      </label>
      <div class="input-group">
       <input class="form-control" id="name1" name="name1" type="text"/>
       <div class="input-group-addon">
        <i class="fa fa-black-tie">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       Gender
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="Male"/>
         Male
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="radio" type="radio" value="Female"/>
         Female
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="date">
       Date
      </label>
      <div class="input-group">
       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
       <div class="input-group-addon">
        <i class="fa fa-calendar">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="number">
       Number
      </label>
      <div class="input-group">
       <input class="form-control" id="number" name="number" type="text"/>
       <div class="input-group-addon">
        <i class="fa fa-phone">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <input class="form-control" id="email" name="email" type="text"/>
       <div class="input-group-addon">
        <i class="fa fa-at">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name2">
       Password
      </label>
      <div class="input-group">
       <input class="form-control" id="name2" name="name2" type="password"/>
       <div class="input-group-addon">
        <i class="fa fa-lock">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name3">
       Re-enter Password
      </label>
      <div class="input-group">
       <input class="form-control" id="name3" name="name3" type="password"/>
       <div class="input-group-addon">
        <i class="fa fa-lock">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="textarea">
       Permanent Address
      </label>
      <textarea class="form-control" cols="40" id="textarea" name="textarea" rows="10"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
     </fieldset>
    </form>
   </div>
  </div>
 </div>
</div>
  </body>
  </html>  