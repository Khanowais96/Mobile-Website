<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style type="text/css">
		.head{
	background:  black;
	padding: 10px 0;
}
.socialicon{margin-right: 10px}
.contact{color: white}
.mymenu{margin-top: 25px}
.li{color: white}
.slider{margin-bottom: 30px; margin-top: 30px}
.footer{background:#333333; padding: 20px 0;}
.footer p{color: white; margin: 10px 0}
.footer{color: white}
.footer ul{list-style: none; margin: 0;padding: 0}
.footer ul li a{color: white; font-size: 15px}
/*.footer{margin-top:2px}*/
.plx{
	background: url(images/55.png);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}
.wtitle{
	padding: 200px 20px;
}
.cont{margin-bottom: 40px;
}
	</style>



</head>
<body>
<div class="container-fluid head" >
	<div class="container" >
		<div class="row">
			<div class="col-sm-6 ">
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook" class="socialicon"><i class="fa fa-facebook" style="font-size: 25px; color: white"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="socialicon"><i class="fa fa-twitter" style="font-size: 25px; color: white" ></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="socialicon"><i class="fa fa-youtube-play" style="font-size: 25px; color: white"></i></a>
				<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus" class="socialicon"><i class="fa fa-google-plus" style="font-size: 25px; color: white"></i></a>
			</div>
			<div class="col-sm-6  text-right contact">
				<span class="fa fa-question-circle "></span><a href="#" style=" color: white;  text-decoration: none;"> Got Question?</a>
				<span class="fa fa-hands-helping"></span> <a href="#" style=" color: white;  text-decoration: none;">Need Support?</a>
			</div>
		</div>
	</div>
</div>







<div class="container" >
	<div class="row">
		

		<div class="col-sm-5 "><img src="images/logo2.jpg" class="img-responsive" >
		</div>

		<div class="col-sm-7 mymenu " >
			<nav class="navbar navbar-expand-sm bg-primary navbar-priimary">
			<ul  class="navbar-nav ">
				<li class="nav-item " ><a class="nav-link li" href="index.php">Home</a></li>
				<li class="nav-item "><a class="nav-link li" href="about.php">About Us</a></li>
				<li class="nav-item "><a class="nav-link li" href="coverage.php">Coverage</a></li>
				<li class="nav-item "><a class="nav-link li" href="product.php">Products</a></li>
				<li class="nav-item "><a class="nav-link li" href="contact.php">Contact Us</a></li>
			</ul>
			</nav>
		</div>
	</div>
</div>

<div class="container slider">
	
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10"><img class="img-responsive" src="images/huwai.jpg" width="100%"  > </div> 
		<div class="col-sm-1"></div>
	</div>
</div>


<div class="d-flex p-3 bg-secondary text-white" style="margin-bottom: 10px">Huawei Mobile Phones</div>


<!-- Products -->

<div class="conatiner" style="margin-bottom: 10px">
	<div class="row">
		<?php 
		include "db.php";

$query="SELECT * FROM products";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	

	$pname=$row[1];
	$pprice=$row[2];
	$pimg=$row[3];

echo "<div class='col-sm-3'>
				<div class='card' style='margin-top:10px'>
		<img class='card-img-top' src=$pimg alt='Card image'>
		<div class='card-body'>
		 <h4 class='card-title'>$pname</h4>
		 <h5 class='card-title'>Price:Rs.$pprice</h5>
			
			<p class='card-text'>

			</p>
			<a href='#' class='btn btn-primary'>Detail</a>
			<a href='#' class='btn btn-primary'>Add To Cart</a>
			</div>
		</div>
		</div>
";
}

		?>
	</div>
</div>

<div class="d-flex p-3 bg-secondary text-white" style="margin-bottom: 10px">Samsung Mobile Phones</div>


<div class="container-fluid" style="margin-bottom: 10px">
	<div class="row">
		<?php 
		include "db.php";

$query="SELECT * FROM samsung";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	

	$pname=$row[1];
	$pprice=$row[2];
	$pimg=$row[3];

echo "<div class='col-sm-3'>
				<div class='card' style='margin-top:10px'>
		<img class='card-img-top' src=$pimg alt='Card image'>
		<div class='card-body'>
		 <h4 class='card-title'>$pname</h4>
		 <h5 class='card-title'>Price:Rs.$pprice</h5>
			
			<p class='card-text'>

			</p>
			<a href='#' class='btn btn-primary'>Detail</a>
			<a href='#' class='btn btn-primary'>Add To Cart</a>
			</div>
		</div>
		</div>
";
}

		?>


		 
	</div>
</div>


<!-- parallax effect -->
<section class="plx">
	<div class="conatiner">
		<div class="wtitle text-center">
			<h2></h2>
		</div>
		
	</div>
</section>
	

<!-- end of Parallax -->



<div class="container-fluid footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4"><img src="images/logo2.jpg" class="img-responsive">
				

				</div>
				<div class="col-sm-4">
					<p>Lorem ipsum dolor sit amet, consectetur 
				adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna 
				aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco. 
 
	</p>
	<p><a href="#" class="btn btn-warning">Read more</a></p>
				</div>
			<div class="col-sm-4">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">&raquo; Home</a></li>
						<li><a href="#">&raquo; About Us</a></li>
						<li><a href="#">&raquo; Services</a></li>
						<li><a href="#">&raquo; Products</a></li>
						<li><a href="#">&raquo; Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>

<script type="text/javascript">
	$('.parallax-window').parallax({imageSrc: 'images/55.png'});
</script>