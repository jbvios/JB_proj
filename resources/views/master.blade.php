<!DOCTYPE html>
<html lang="en">

<head>
<meta charset = "utf-8">
<meta http-equiv="X-UA-Compatible" content = "IE=edge" >
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <script scr="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstarp/3.3.5/css/bootstrap.min.css"> -->

<title> Sample</title>
</head>

<body>
	<nav class = "navbar navbar-inverse">
		<div class ="container-fluid">

			<div class ="navbar-header">
			<a class="navbar-brand"	href="{{url('/home')}}"> Home </a>

		</div>
		<div>
			<ul class="nav navbar-nav">
				<li><a href="{{url('/view')}}"> View All </a></li>
				<li><a href="{{url('/new')}}"> Add New </a></li>
				<li><a href="{{url('/edit')}}"> Edit/Delete </a></li>
			</ul>
		</div>

		</div>


	</nav> 

	<div class = "container">

		@yield('content')

	</div>




	
</body>
</html>