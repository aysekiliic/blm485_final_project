<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  

    <title>Christmas</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" href="#" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">


    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    
    <div id="preloader">
		<div class="loader">
			<div class="box"></div>
			<div class="box"></div>
		</div>
    </div>
	
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="welcome.php"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="welcome.php">Home</a></li>
                        <li><a class="nav-link" href="#b-deals">Gifts</a></li>
						<li><a class="nav-link" href="#information">Address</a></li>
                        <li><a class="nav-link" href="logout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" style="background-image:url(images/slider-01.jpg);"></div>
					<div class="pogoSlider-slide" style="background-image:url(images/slider-02.jpg);"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="b-deals" class="services-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gifts</h2>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/coffee.webp"/>
						<figcaption>
							<h2>Coffee Package 50$</h2>
						</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/sweater.jpg" />
						<figcaption>
							<h2>Christmas Sweater 15$</h2>
						</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/food.jpg" />
						<figcaption>
							<h2>Food Package 50$</h2>
						</figcaption>
					</figure>
				</div>
				<div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/tree.png" />
						<figcaption>
							<h2>Christmas Tree 65$</h2>
						</figcaption>
					</figure>
				</div>
                <div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/camera.jpg"/>
						<figcaption>
							<h2>Analog Camera 50$</h2>
						</figcaption>
					</figure>
				</div>
                <div class="col-lg-4 col-sm-4">
					<figure class="effect-service">
						<img src="images/special.jfif" />
						<figcaption>
							<h2>Special Package</h2>
						</figcaption>
					</figure>
				</div>
				
			</div>
			
		</div>
	</div>

	<div id="information" class="information-box" style="background: #f7f7f7;">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="title-box">
						<h2>Information for your gift</h2>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-lg-7 col-sm-7 col-xs-12">
				  <div class="contact-block">
					<form id="informationForm" action="submit.php" method="POST">

					  <div class="row">
						<div class="col-md-6">
							<div class="form-group" >
								<input type="text" class="form-control" id="name" name="name" placeholder="Who is the person?" required data-error="Please enter the name" style="background-color: rgba(255, 0, 0, 0.3);">
								<div class="help-block with-errors"></div>
							</div>   	                            
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input type="email" placeholder="Your Email (IBAN will be sent.)" id="email" class="form-control" name="email" required data-error="Please enter your email" style="background-color: rgba(255, 0, 0, 0.3);">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="number" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number" style="background-color: rgba(255, 0, 0, 0.3);">
								<div class="help-block with-errors"></div>
							</div> 
						</div>

                        <div class="col-md-12">
                            <div class="form-group"> 
                                <select name="gift" id="gift" type="text" class="form-control" rows="8" data-error="Choose your option" required style="background-color: rgba(255, 0, 0, 0.3);">
                                    <option value="" selected>Choose a gift</option>
                                    <option value="coffee">Coffee Package</option>
                                    <option value="sweater">Christmas Sweater</option>
                                    <option value="food">Food Package</option>
                                    <option value="tree">Christmas Tree</option>
                                    <option value="analog">Analog Camera</option>
                                    <option value="special">Special Package</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

						<div class="col-md-12">
                            <div class="form-group"> 
								<textarea class="form-control" id="message" name="message" placeholder="Your Message (If you want to send a special package, you must include the contents of the package in this field. The price will be determined according to the content of the gift.)" rows="8" data-error="Write your message" required style="background-color: rgba(255, 0, 0, 0.3);"></textarea>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group"> 
								<textarea class="form-control" id="address" name="address" placeholder="Address" rows="2" data-error="Write address" required style="background-color: rgba(255, 0, 0, 0.3);"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							
							<div class="submit-button text-center" >
								<button class="btn btn-common" id="submit" type="submit" >Send Your Gift!</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</form>

	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">Gifts for Christmas</a> Design By : <a href="https://www.linkedin.com/in/aysekilic1/">Ayşe Kılıç</a></p>
				</div>
			</div>
		</div>
	</footer>
	
	<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
    
</body>
</html>