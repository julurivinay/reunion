<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kotak - Reunion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        .vl {
  border-left: 6px solid green;
  height: 640px;
}
        </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	</div>	
	<div class="col-md-6 vl">
	<form method="POST" action="/basic-info">
	@csrf
	<h2>Please Submit Your Contact Info</h2>
		<div class="form-group">
			<label for="exampleInputEmail1">Full Name <span class="red">*</span></label>
			<input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
			placeholder="Full Name">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Email</label>
			<input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Phone <span class="red">*</span></label>
			<input type="text" name="phone" required class="form-control" id="exampleInputPassword1" placeholder="Phone Number to Reach You">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">How many memebers are attending</label>
			<input name="members" value="1" type="number" class="form-control" id="exampleInputPassword1" placeholder="includes family memebers">
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">
			Do you need help in accomidation?
			</label>
			<textarea name="accomidation" class="form-control"
			id="exampleFormControlTextarea1" rows="3"
			placeholder="Please provide few details about accomidation like no of day...!"
			></textarea>
		</div>
		<button type="submit" class="btn btn-primary ">Submit</button>
		<a href="/">Home</a>
			</form>
		</div>

	</div>
	
			</div>
			</div>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

