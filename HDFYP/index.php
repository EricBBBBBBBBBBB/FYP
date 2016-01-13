<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>

		<!-- Meta Data -->	
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Loose Change - Testing</title>
		<meta name="description" content="Loose Change" />
		<meta name="keywords" content="Loose Change, shop, mobile" />
		<meta name="author" content="Loose Change" />
		<link rel="shortcut icon" href="image/favicon.ico" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/LC.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/component.css">		

		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">		
			<!-- Push Wrapper -->
			<div class="push-pusher" id="push-pusher">

				<?php require_once("php/push_menu.php"); ?>

				<div class="scroller"><!-- For emulating position fixed of the Push Menu -->
					<div class="scroller-inner">
					
						<!-- Top Navigation -->
						<div class="LC-top clearfix">
							<a href="#" id="trigger"><i class="fa fa-bars"></i>&nbsp; All Categories</a>
							<span class="right" >
								<a href="index.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
								<a href="#"><i class="fa fa-book fa-fw"></i>&nbsp; Blog</a>
								<a href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp; Request</a>
								<a href="#"><i class="fa fa-sign-in fa-fw"></i>&nbsp; Sign in</a>
								<a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
							</span>
						</div>
						
						<!-- Header -->
						<header class="LC-header clearfix">
							<h1>Loose Change <span>Web-based Online Service/Product Exchange Platform</span></h1>
						</header>
											
						<!-- Content area -->
						<div class="LC-content clearfix">
							
							<!-- aside -->
							<aside class="LC-sidebar clearsix">
								<section class="sidebar-box clearfix">
									<h3>Hi, User</h3>
									<p>Request the service you are looking for.</p>
									<button>Post a Request</button>
								</section>
								<section class="sidebar-box clearfix">
									<h3>POPULAR SEARCHES</h3>
									<p>xxxxxxx</br>xxxxxxx</br>xxxxxxx</p>
								</section>
								<section class="sidebar-box clearfix">
									<h3>START SELLING</h3>
									<p>Sell your services to millions of people all over the world.</p>
									<button>Start Now</button>
								</section>
							</aside>
							
							<div class="LC-article clearfix">
								<p>Slider</p>
							</div>
							
							<div class="LC-article clearfix">
								<p>Product</p>
							</div>							
							
						</div>

						<!-- Content area -->
						<div class="LC-content-second clearfix">	
						
							<p>News and Storys</p>
							
							<section class="LC-article clearfix">
								<p>Product</p>
							</section>									
							
						</div>
						
						<!-- Footer -->
						<footer class="LC-footer clearfix">
							<div class="LC-content-second">	
								<p>Home || Contact us || Fuck Eric</p>
								<p>Coryright &copy; 2015 Loose Change, All Right Reserved.</p>
							</div>
						</footer>					
						
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->
			</div><!-- /pusher -->
		</div><!-- /container -->
		
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'push-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );
		</script>
		
	</body>
</html>