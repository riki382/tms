<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="assets/css/bootstrap.css">
  	<link rel="stylesheet" href="assets/css/TravelNepal.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid container1">
		<div class="row tt1_row1">
			<div class="col-lg-offset-4 col-lg-4 tt1_row1_c2">
				<h1>TRAVEL NEPAL</h1>
				<h4>Experience Nepal</h4>
			</div><!-- <div class="col-lg-offset-4 col-lg-4"> -->
		</div><!-- <div class=="row tt1_row1"> -->
	</div><!-- <div class="container-fluid container1"> -->
	<div class="container-fluid container2">
		<div class="row tt1_row2">
			<div class="navbar navbar-inverse navbar-static-top">
				<ul class="nav navbar-nav cust_nav">
					<li><a href="#">HOME</a></li>
					
					<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">TOURS
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
					        <div>
					          <li><a href="#">GLIMPSE OF NEPAL</a></li>
					          <li class="divider"></li>
					          <li><a href="#">KATHMANDU VALLEY TOUR</a></li>
					          <li class="divider"></li>
					          <li><a href="#">KATHMANDU-NAGARKOT TOUR</a></li>
					          <li class="divider"></li>
					          <li><a href="#">KATHMANDU-MANAKAMANA TOUR</a></li>
					          <li class="divider"></li>
					          <li><a href="#">POKHARA TOUR</a></li>
					          <li class="divider"></li>
					          <li><a href="#">LHASA OVERLAND TOUR</a></li>
					        </div>
				        </ul>
				    </li>

				    <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CLIMBING
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
					        <div>
					          <li><a href="#">MERA PEAK CLIMBING</a></li>
					          <li class="divider"></li>
					          <li><a href="#">ISLAND PEAK CLIMBING</a></li>
					          <li class="divider"></li>
					          <li><a href="#">LOBUCHE PEAK CLIMBING</a></li>
					          <li class="divider"></li>
					          <li><a href="#">CHULU WEST CLIMBING</a></li>
					          <li class="divider"></li>
					          <li><a href="#">SINGU CHULI-FLUTED PEAK CLIMBING</a></li>
					          <li class="divider"></li>
					          <li><a href="#">PALDOR PEAK CLIMBING</a></li>
					        </div>
				        </ul>
				    </li>

					<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">TREKKING
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
					        <div>
					          <li><a href="#">EVEREST REGION</a></li>
					          <li class="divider"></li>
					          <li><a href="#">ANNAPURNA REGION</a></li>
					          <li class="divider"></li>
					          <li><a href="#">LANGTANG HELAMBU REGION</a></li>
					          <li class="divider"></li>
					          <li><a href="#">KANCHENJUNGA REGION</a></li>
					          <li class="divider"></li>
					          <li><a href="#">MANASLU REGION</a></li>
					          <li class="divider"></li>
					          <li><a href="#">DOLPO REGION</a></li>
					        </div>
				        </ul>
				    </li>
					          	
					<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
					        <div>
					          <li><a href="#">THE SHOP</a></li>
					          <li class="divider"></li>
					          <li><a href="#">CART</a></li>
					          <li class="divider"></li>
					          <li><a href="#">MY ACCOUNT</a></li>
					          <li class="divider"></li>
					          <li><a href="#">CHECKOUT</a></li>
					        </div>
				        </ul>
				    </li>

				    <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
					        <div>
					          <li><a href="#">COMPANY INFO</a></li>
					          <li class="divider"></li>
					          <li><a href="#">WHY US</a></li>
					          <li class="divider"></li>
					          <li><a href="#">TESTIMONIALS</a></li>
					          <li class="divider"></li>
					          <li><a href="#">OUR TEAM</a></li>
					          <li class="divider"></li>
					          <li><a href="#">TERMS & CONDITIONS</a></li>
					          <li class="divider"></li>
					          <li><a href="#">PRIVACY POLICY</a></li>
					        </div>
				        </ul>
				    </li>

				    <li><a href="#">CONTACT</a></li>
				</ul><!-- <ul class="nav navbar-nav cust_nav"> --> 
				<div class="SocialSites pull-right">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>
					<button id="search_btn"><i class="fa fa-search" aria-hidden="true" onclick="search_icon()"></i></button>
					<input type="text" name="search" placeholder="search" id="search" style="display: none; background-color: #000000; border: #000000">
				</div><!-- <div class="SocialSites pull-top-right"> -->
			</div><!-- <div class="navbar navbar-default navbar-static-top"> -->
		</div><!-- <div class="row tt1_row2"> -->
	</div><!-- <div class="container-fluid container2"> -->
	<div class="container-fluid">
	<div class="row enquiry_modal">
	<button type="button" id="fixed" class="btn btn-info btn-lg enquiry_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Enquiry</button>
	<div class="modal fade" id="myModal" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content cust_content ">
	      <form>
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Enquiry Form</h4>
	        </div>
	        <div class="modal-body">
	          <input type="text" placeholder="Email"><br><br>
	          <input type="text" placeholder="Full Name"><br><br>
	          <textarea type="text" placeholder="Enter your questions"></textarea>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-info">Submit</button>
	        </div>
	      </form>
	    </div>
	  </div>  
	</div>
	</div>
	</div>
	<div class="container">
		<div class="row tt1_row3">
			<div class="col-lg-4 col-md-4 col-sm-4 guttersp_row3" >
				<div class="row tt1_r3c1">
					<div class="img_border">
						<div class="img_intro">
							<button type="button" class="btn bt">TOURS</button>
						</div><!-- <div class="img_intro"> -->
					</div><!-- <div class="img_border"> -->
				</div>
				<div class="intro_bg">
				</div>
			</div><!-- <div class="col-lg-4"> -->
			<div class="col-lg-4 col-md-4 col-sm-4 guttersp_row3">
				<div class="row tt1_r3c2">
					<div class="img_border">
						<div class="img_intro">
							<button type="button" class="btn bt">CLIMBING</button>
						</div><!-- <div class="img_intro"> -->
					</div><!-- <div class="img_border"> -->
				</div>
				<div class="intro_bg">
				</div>
			</div><!-- <div class="col-lg-4"> -->
			<div class="col-lg-4 col-md-4 col-sm-4 guttersp_row3">
				<div class="row tt1_r3c3">
				<div class="img_border">
						<div class="img_intro">
							<button type="button" class="btn bt">TREKKING</button>
						</div><!-- <div class="img_intro"> -->
					</div><!-- <div class="img_border"> -->
				</div>
				<div class="intro_bg">
				</div>	
				
			</div><!-- <div class="col-lg-4"> -->
		</div><!-- <div class="row tt1_row3"> -->
		<div class="row tt1_row4">
			<h2 class="block_heading">MOST POPULAR</h2>
		</div><!-- <div class="row tt1_row4"> -->
		<div class="row tt1_row5">
			<div class="col-lg-3 col-md-3 col-sm-3 guttersp_row5">
				<div class="row tt1_r5c1r1">
					<img src="uploads/images/swayambhu-stupa.jpg">
				</div>
				<div class="row tt1_r5c1r2">
					<a><h5>KATHMANDU</h5></a>
					<a><p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p></a>
				</div>
			</div><!-- <div class="col-lg-3"> -->
			<div class="col-lg-3 col-md-3 col-sm-3 guttersp_row5">
				<div class="row tt1_r5c2r1">
					<img src="uploads/images/Pokhara World Peace Pagoda.jpg">
				</div>
				<div class="row tt1_r5c2r2">
					<a><h5>POKHARA</h5></a>
					<a><p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p></a>
				</div>
			</div><!-- <div class="col-lg-3"> -->
			<div class="col-lg-3 col-md-3 col-sm-3 guttersp_row5">
				<div class="row tt1_r5c3r1">
					<img src="uploads/images/Chitwan-national-park.jpg">
				</div>
				<div class="row tt1_r5c3r2">
					<a><h5>CHITWAN</h5></a>
					<a><p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p></a>
				</div>
			</div><!-- <div class="col-lg-3"> -->
			<div class="col-lg-3 col-md-3 col-sm-3 guttersp_row5">
				<div class="row tt1_r5c4r1">
					<img src="uploads/images/lumbini.jpg">
				</div>
				<div class="row tt1_r5c4r2">
					<a><h5>LUMBINI</h5></a>
					<a><p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p></a>
				</div>
			</div><!-- <div class="col-lg-3"> -->
		</div><!-- <div class="row tt1_row5"> -->
		<hr>
		<div class="row tt1_row6">
			<div class="col-lg-7 col-md-7col-sm-7">
				<div class="row tt1_r6c1r1">
					<h5>Travel Tips</h5>
					<h2>Annapurna Circuit Trek with Tilicho Lake</h2>
					<p>MAY 15, 2016  3 COMMENTS</p>
				</div><!-- <div class="row tt1_r6c1r1"> -->
				<div class="row tt1_r6c1r3">
					<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot tortoise inside opaquely. Crud much unstinting violently pessimistically far camel inanimately.</p>
					<p>Coquettish darn pernicious foresaw therefore much amongst lingeringly shed much due antagonistically alongside so then more and about turgid wrote so stunningly this that much slew.</p>
					<div id='hidden' style="display:none;">
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot tortoise inside opaquely. Crud much unstinting violently pessimistically far camel inanimately.</p>
						<p>Coquettish darn pernicious foresaw therefore much amongst lingeringly shed much due antagonistically alongside so then more and about turgid wrote so stunningly this that much slew.</p>
					</div>
					<h4 id="cr" onclick="continue_reading()">Continue Reading</h4>	
				</div><!-- <div class="row tt1_r6c1r3"> -->
				<div class="row tt1_r6c1r4">
					<hr>
					By Rubi Maharjan
					<ul class="pull-right">
						
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>

						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>

						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>

						<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					
					</ul>
					<hr>
					<hr id="hr-line3">

				</div><!-- <div class="row tt1_r6c1r4"> -->

				<div class="row tt1_r6c1r5">
					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r5c1">
						<img src="uploads/images/boudhanath.jpg">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Boudhanath visit?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r5c1"> -->
					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r5c2">
						<img src="uploads/images/nyatapole.png">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Bhaktapur visit?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r5c2"> -->


				</div><!-- <div class="row tt1_r6c1r5"> -->

				<div class="row tt1_r6c1r6">
					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r6c1">
						<img src="uploads/images/swayambu.jpg">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Swayambhu visit?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r6c1"> -->

						<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r6c2">
						<img src="uploads/images/Kathmandu-Durbar-Square.jpg">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Kathmandu visit?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r6c2"> -->
					</div><!-- <div class="row r6c1r6"> -->

					<div class="row tt1_r6c1r7">
					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r7c1">
						<img src="uploads/images/chandragiri-best-image.jpg">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Chandragiri visit?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r7c1"> -->

					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r7c2">
						<img src="uploads/images/BBB.jpg">
						<h5>Travel tips</h5>
						<h3>How to get most out of your Bunjee jumping?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r7c2"> -->
				</div><!-- <div class="row tt1_r6c1r7"> -->

				<div class="row tt1_r6c1r8">
					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r8c1">
						<img src="uploads/images/paragliding-nepaljpg.jpg">
						<h5>Travel tips</h5>
						<h3>Want to experience Paragliding in Nepal?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r8c1"> -->

					<div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r8c2">
						<img src="uploads/images/jungle.jpg">
						<h5>Travel tips</h5>
						<h3>Want to experience jungle saffari in Nepal?</h3>
						<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla and drew humbly shot…</p>
						<button type="button" class="btn bt1">CONTINUE READING</button>
					</div><!-- <div class="col-lg-6 col-md-6 col-sm-6 tt1_r6r7c2"> -->
				</div><!-- <div class="row tt1_r6c1r8"> -->

			</div><!-- <div class="col-lg-7 col-md-7 col-sm-7"> -->
			<div class="col-lg-5 col-md-5 col-sm-5">
				<div class="about">
					<div class="row tt1_r6c2r1">
						<h2 class="block_heading">ABOUT</h2>
					</div><!-- <div class="row tt1_r6c2r1"> -->
					<div class="row tt1_r6c2r2">
						<img src="uploads/images/about.jpg" >
					</div><!-- <div class="row tt1_r6c2r2"> -->
					<div class="row tt1_r6c2r3">
						<p>I'm Rubi, a girl and lover of life. Join me on the journey to find adventure in Nepal.</p>
						<a href="">Read more</a>
					</div><!-- <div class="row tt1_r6c2r3"> -->
				</div>
				<div class="top_destinations">
					<div class="row tt1_r6c2r4">
						<h2 class="block_heading">TOP DESTINATIONS</h2>
					</div><!-- <div class="row tt1_r6c2r4"> -->
					<div class="row tt1_r6c2r5">
						<h4 class="img_name1">Annapurna Massif</h4>
					</div><!-- <div class="row tt1_r6c2r5"> -->
					<div class="row tt1_r6c2r6">
						<h4 class="img_name2">Namche Bazar</h4>		
					</div><!-- <div class="row tt1_r6c2r6"> -->
					<div class="row tt1_r6c2r7">
						<h4 class="img_name3">Jomsom</h4>		
					</div><!-- <div class="row tt1_r6c2r7"> -->
				</div><!-- <div class="top_destinations"> -->
				<div class="connect_follow">
					<div class="row tt1_r6c2r8">
						<h2 class="block_heading">CONNECT & FOLLOW</h2>
					</div><!-- <div class="row tt1_r6c2r8"> -->
					<div class="row tt1_r6c2r9">
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>			
					</div><!-- <div class="row tt1_r6c2r9"> -->
				</div><!-- <div class="connect_follow"> -->
				<div class="newsletter">
					<div class="row tt1_r6c2r10">
						<h4>NEWSLETTER</h4>
					</div><!-- <div class="row tt1_r6c2r10"> -->
					<div class="row tt1_r6c2r11">
						<p>Enter your email address below to subscribe to my newsletter</p>
					</div><!-- <div class="row tt1_r6c2r11"> -->
					<div class="row tt1_r6c2r12">
						<div class="form-group">
      						<input type="text" class="form-control" name="email" placeholder="Your email address.." id="email">
      						<button type="button" class="btn btn-default btn-block" id="subscribe">SUBSCRIBE</button>
    					</div>
					</div><!-- <div class="row tt1_r6c2r12"> -->
				</div><!-- <div class="newsletter"> -->
				<div class="latest_posts">
					<div class="row tt1_r6c2r13">
						<h2 class="block_heading">LATEST POSTS</h2>
					</div><!-- <div class="row tt1_r6c2r13"> -->
					<div class="row tt1_r6c2r14">
						<div class="col-lg-5 col-md-5 col-sm-5 img_post">
							<div class="row">
								<img src="uploads/images/religious-tourists-throng-muktinath-temple.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7 intro_post">
							<div class="row">
								<h4>Religious tourists throng Muktinath temple</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
					</div><!-- <div class="row tt1_r6c2r14"> -->
					<div class="row tt1_r6c2r15">
						<div class="col-lg-5 col-md-5 col-sm-5 img_post">
							<div class="row">
								<img src="uploads/images/p1.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7 intro_post">
							<div class="row">
								<h4>Nepal opens Everest for autumn</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
					</div><!-- <div class="row tt1_r6c2r15"> -->
					<div class="row tt1_r6c2r16">
						<div class="col-lg-5 col-md-5 col-sm-5 img_post">
							<div class="row">
								<img src="uploads/images/cable-car.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7 intro_post">
							<div class="row">
								<h4>Chandragiri Cable Car service opens</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
					</div><!-- <div class="row tt1_r6c2r16"> -->
					<div class="row tt1_r6c2r17">
						<div class="col-lg-5 col-md-5 col-sm-5 img_post">
							<div class="row">
								<img src="uploads/images/nepal-earthquake.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7 intro_post">
							<div class="row">
								<h4>Powerful quake rocks Nepal - Sad Hearts News</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
					</div><!-- <div class="row tt1_r6c2r17"> -->
				</div><!-- <div class="latest_posts"> -->
				<div class="instagram">
					<div class="row tt1_r6c2r18">
						<h2 class="block_heading">INSTAGRAM</h2>
					</div><!-- <div class="row tt1_r6c2r18"> -->
					<div class="row tt1_r6c2r19">
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/elephant-safari.png">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/paraglyding.jpg">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/Pokhara_Overview.jpg">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
					</div><!-- <div class="row tt1_r6c2r19"> -->
					<div class="row tt1_r6c2r20">
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/DSC0433.jpg">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/nepal-scams.jpg">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
						<div class="col-lg-4 col-md-4 col-sm-4 insta_img">
							<div class="row">
								<img src="uploads/images/basantapur.jpg">
							</div>
						</div><!-- <div class="col-lg-4 col-md-4 col-sm-4 insta_img"> -->
					</div><!-- <div class="row tt1_r6c2r20"> -->
				</div><!-- <div class="instagram"> -->
				<div class="categories">
					<div class="row tt1_r6c2r21">
						<h2 class="block_heading">CATEGORIES</h2>
					</div><!-- <div class="row tt1_r6c2r21"> -->
					<div class="row tt1_r6c2r22">
						<ul>
    					<li>Annapurna Circuit Trek with Tilicho Lake<span class="badge pull-right">8</span><hr></li>
          				<li>Destinations<span class="badge pull-right">8</span><hr></li>
          				<li>Latest posts<span class="badge pull-right">8</span><hr></li>
          				<li>Travel Tips<span class="badge pull-right">15</span><hr></li>
          				</ul>
					</div><!-- <div class="row tt1_r6c2r22"> -->
				</div><!-- <div class="categories"> -->
			</div><!-- <div class="col-lg-5 col-md-5 col-sm-5"> -->
		</div><!-- <div class="row tt1_row6"> -->
	</div><!-- <div class="container"> -->
	<div class="container-fluid container3">
		<div class="row tt1_row7">
				<div class="col-lg-2 tt1_r7c1">
					<div class="row">
						<img src="uploads/images/elephant-safari.png"">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c1"> -->
				<div class="col-lg-2 tt1_r7c2">
					<div class="row">
						<img src="uploads/images/paraglyding.jpg">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c2"> -->
				<div class="col-lg-2 tt1_r7c3">
					<div class="row">
						<img src="uploads/images/Pokhara_Overview.jpg">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c3"> -->
				<div class="col-lg-2 tt1_r7c4">
					<div class="row">
						<img src="uploads/images/DSC0433.jpg">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c4"> -->
				<div class="col-lg-2 tt1_r7c5">
					<div class="row">
						<img src="uploads/images/nepal-scams.jpg">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c5"> -->
				<div class="col-lg-2 tt1_r7c6">
					<div class="row">
						<img src="uploads/images/basantapur.jpg">
					</div><!-- <div class="row"> -->
				</div><!-- <div class="col-lg-2 tt1_r7c6"> -->
		 </div><!-- <div class="row tt1_row7"> -->
	</div><!-- <div class="container-fluid"> -->
	<div class="container-fluid container4">
		<div class="row tt1_row8">
			<div class="col-lg-4 tt1_r8c1 guttersp_row8">
				<div class="row">
					<h2 class="block_heading2">ABOUT</h2>
					<img src="uploads/images/about.jpg" >
					<br><p>I'm Rubi, a girl and lover of life. Join me on the journey to find adventure in Nepal.</p>
				</div>
			</div><!-- <div class="col-lg-4 tt1_r8c1"> -->
			<div class="col-lg-4 tt1_r8c2 guttersp_row8">
				<div class="row">
					<h2 class="block_heading2">LATEST POSTS</h2>
					<div class="col-lg-5 col-md-5 col-sm-5">
						<div class="row">
							<img src="uploads/images/religious-tourists-throng-muktinath-temple.jpg">
						</div>
					</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
					<div class="col-lg-7 col-md-7 col-sm-7">
						<div class="row" style="margin-left: 5%;">
							<h4>Religious tourists throng Muktinath temple</h4>
							<h6>MAY 15, 2016  3 COMMENTS</h6>
						</div>	
					</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5">
						<div class="row">
							<img src="uploads/images/p1.jpg">
						</div>
					</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
					<div class="col-lg-7 col-md-7 col-sm-7">
						<div class="row" style="margin-left: 5%;">
							<h4>Nepal opens Everest for autumn</h4>
							<h6>MAY 15, 2016  3 COMMENTS</h6>
						</div>	
					</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
				</div>
			</div><!-- <div class="col-lg-4 tt1_r8c1"> -->
			<div class="col-lg-4 tt1_r8c3 guttersp_row8">
				<div class="row">
					<h2 class="block_heading2">POPULAR POSTS</h2>
					<div class="col-lg-5 col-md-5 col-sm-5">
							<div class="row">
								<img src="uploads/images/cable-car.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7">
							<div class="row" style="margin-left: 5%;">
								<h4>Chandragiri Cable Car service opens</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
				</div>
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5">
							<div class="row">
								<img src="uploads/images/nepal-earthquake.jpg">
							</div>
						</div><!-- <div class="col-lg-5 col-md-5 col-sm-5 img_post"> -->
						<div class="col-lg-7 col-md-7 col-sm-7">
							<div class="row" style="margin-left: 5%;">
								<h4>Powerful quake rocks Nepal - Sad Hearts News</h4>
								<h6>MAY 15, 2016  3 COMMENTS</h6>
							</div>	
						</div><!-- <div class="col-lg-7 col-md-7 col-sm-7 img_post"> -->
					</div>
			</div><!-- <div class="col-lg-4 tt1_r8c1"> -->
		</div><!-- <div class="row tt1_row8"> -->
		<div class="row tt1_row9">
			<a href=""><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; &nbsp;FACEBOOK</a>
			<a href=""><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; &nbsp;TWITTER</a>
			<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i>&nbsp; &nbsp;GOOGLE PLUS</a>
			<a href=""><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp; &nbsp;INSTAGRAM</a>
			<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i>&nbsp; &nbsp;PINTEREST</a>
			<hr>
			<p>Copyright &copy; 2017 . All rights reserved.</p>
		</div><!-- <div class="row tt1_row9"> -->
	</div><!-- <div class="container-fluid"> -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/travelnepal.js"></script>
</body>
</html>