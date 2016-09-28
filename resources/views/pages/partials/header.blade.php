
	 <link href="{{URL::asset('css/index.css')}}" rel="stylesheet">
    <div class="container-fluid cont">
	<div class="row">
		<div class="col-md-12" style="background-color:#CFD8DC;">
			<h1 class="text-left" style="font-family: 'Raleway', sans-serif; text-align: center;">
				<img src="{{asset('img/e.png')}}"" height="80px";>E-Kart - The Online Shop
			</h1>
		</div>
		
	</div>
	<!--navbar--> 
	<div class="col-md-12 nav">
		<ul class="nav nav-pills nav-justified" >
		  <li @if($pagetype == "home")
							class="active"
							@else
							class=""
							@endif ><a href="home" >home</a></li>
		  <li @if($pagetype == "details")
							class="active"
							@else
							class=""
							@endif ><a href="details"></span>Mobiles</a></li>
		  <li><a href="#"></span>Tablets</a></li>
		  <li><a href="#"></span>Laptops</a></li>
		  <li><a href="#"></span>Motherboards</a></li>
		  <li><a href="#"></span>Processors</a></li>
		  <li><a href="#"></span>Offers</a></li>
		  <li><a href="#"></span>Sale</a></li>
		  <li @if($pagetype == "signup")
							class="active"
							
							@endif


		  style="padding-left:200px"><a href="signup" ></span>Sign up</a></li>
		  <li @if($pagetype == "signin")
							class="active"
							
							@endif><a href="signin" >Login</a></li>
		  
		  </ul>

	</div>
</div><br><br>
