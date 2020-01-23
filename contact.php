<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>

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
.footer{background:black; padding: 20px 0;}
.footer p{color: white; margin: 10px 0}
.footer{color: white}
.footer ul{list-style: none; margin: 0;padding: 0}
.footer ul li a{color: white; font-size: 15px}
/*.footer{margin-top:2px}*/
.wtitle{
	padding: 200px 20px;
}
.cont{margin-bottom: 40px;
}
body p{font-size: 20px}
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


<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <br><small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>








<div class="container">
	<div class="row">
		<p>We do appreciate your feedback
We will be glad to hear from you if:
- You have found a mistake in our phone specifications.
- You have info about a phone which we don't have in our database.
- You have found a broken link.
- You have a suggestion for improving GSMArena.com or you want to request a feature.
Before sending us an email, please keep in mind:
- We do not sell mobile phones.
- We do not know the price of any mobile phone in your country.
- We don't answer any "unlocking" related questions.
- We don't answer any "Which mobile should I buy?" questions.

Please be sure to check out Video Site Tour for any feature-related questions.

Please use the Tip us form for any news story suggestions.
If you have a question for us please use our dedicated Question form for posting it.
</p>
 
<br>



<p>
support@gsmarena.com
</p>
 

 <br>
<p>Advertising on GSMArena.com
Do you have an online mobile store? Are you interested in advertising on our site? GSMArena.com is accessed by millions of unique visitors daily, and is guaranteed to help boost your sales. 
Click here to read more
</p>
	</div>
	
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>


<br><br><br>




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