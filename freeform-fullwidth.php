<!DOCTYPE html>
	<html lang="en"> 
		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

			<title>Site Name</title>
			<meta name="description" content="">
			<meta name="robots" content="index, follow">

			<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.min.css">	
			<link rel="stylesheet" href="_assets_/fonts/font-awesome/css/all.min.css">
			<link rel="stylesheet" href="_assets_/css/animate.min.css">
			<link rel="stylesheet" href="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.css">			
			<link rel="stylesheet" href="_assets_/css/layout.css">

			<link rel="shortcut icon" href="_assets_/images/favicon.ico">
			<link rel="apple-touch-icon" href="_assets_/images/touch-icon-iphone.png">
			<link rel="apple-touch-icon" sizes="72x72" href="_assets_/images/touch-icon-ipad.png">
			<link rel="apple-touch-icon" sizes="114x114" href="_assets_/images/touch-icon-iphone4.png">
			<link rel="apple-touch-icon" sizes="144x144" href="_assets_/images/touch-icon-ipad2.png">

			<!-- Respond.js for IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->

		</head>
		<body id="freeform" class="fullwidth">

			<button id="skip" tabindex="0">skip to content</button>
		
			<div id="wrapper">	

				<!-- Content Here -->

			</div><!-- /#wrapper -->  

<!-- Share widget make into an include file -->
<?php define('PAGE_PROTOCOL', (isset($_SERVER['https']) && $_SERVER['https'] === 'on') ? 'https' : 'http' ); ?>
<button type="button" class="share-btn floating-share-btn" data-toggle="modal" data-target="#shareModal">
	<i class="fa fa-share-alt"></i>
</button>

<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Share this page</h4>
			</div>
			<div class="modal-body">
				<div class="copylink">
					<p>Copy and paste this code into your website.</p>
					<pre>&lt;a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">Your Link Name&lt;/a&gt;</pre>
				</div><!-- /.copylink -->
				<div class="share-btns">
					<p>Share this page on your favorite Social network</p>
					<div class="row">
						<div class="col-sm-4">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
							target="_blank">
								<i class="fab fa-facebook-f"></i> Facebook
							</a>
						</div>
						<div class="col-sm-4">
							<a href="https://www.twitter.com/home?status=<?php echo PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
							target="_blank">
								<i class="fab fa-twitter"></i> Twitter
							</a>
						</div>
						<div class="col-sm-4">
							<a href="https://www.reddit.com/submit?url=<?php echo PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
							target="_blank">
								<i class="fab fa-reddit"></i> Reddit
							</a>
						</div>
					</div><!-- /.row -->
				</div><!-- /.share-btns -->
				<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Close</button>
			</div><!-- /.modal-body -->
		</div>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Share widget make into an include file -->

<script src="_assets_/js/jquery.min.js"></script>
<script src="_assets_/plugins/modernizr/modernizr.custom.js"></script>
<script src="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script src="_assets_/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="_assets_/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="_assets_/plugins/twitter/js/jquery.tweet.min.js"></script>
<script src="_assets_/plugins/instafeed/instafeed.min.js"></script>
<script src="_assets_/plugins/sticky/jquery.sticky.js"></script>
<script src="_assets_/plugins/matchHeight/dist/jquery.matchHeight-min.js"></script>
<script src="_assets_/plugins/revizeWeather/js/revizeWeather.min.js"></script>
<script src="_assets_/plugins/waypoints/waypoints.min.js"></script>
<script src="_assets_/js/scripts.js"></script>
</body>
</html>