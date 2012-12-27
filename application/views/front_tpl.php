<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main-style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" type="text/css" />

<!-- Third, add the GalleryView Javascript and CSS files -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/gallery/css/jquery.galleryview-3.0-dev.css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
</head>
<body>
	<div class="masthead border">
		<div class="container-narrow">

			<ul class="nav nav-pills pull-right">
				<li class="active"><?php echo anchor('home','Home')?></li>
				<li><?php echo anchor('promotion','Promotions')?></li>
				<li><?php echo anchor('gallery','Gallery')?></li>
				<li><?php echo anchor('contact','Contact us')?></li>
				<li><?php echo anchor('admin','Admin')?></li>
			</ul>
			<h3 class="muted">Project name</h3>


		</div>
	</div>

	<div class="container-narrow">

		<h1>
			<?php echo $headline;?>
		</h1>
		<?php echo $this->load->view($include);?>



		<hr>
		<div class="footer">
			<p>&copy; Company 2012</p>
			<p>
				Page rendered in <strong>{elapsed_time}</strong> seconds
			</p>
		</div>

	</div>
	<!-- /container -->
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/global.js"></script>

	<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/gallery/js/jquery-ui.min.js"></script>
	
	<!-- Second, add the Timer and Easing plugins -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/gallery/js/jquery.timers-1.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/gallery/js/jquery.easing.1.3.js"></script>

	<!-- Third, add the GalleryView Javascript and CSS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/gallery/js/jquery.galleryview-3.0-dev.js"></script>
	

	<!-- Lastly, call the galleryView() function on your unordered list(s) -->
	<script type="text/javascript">
		$(function(){
			$('#myGallery').galleryView({
				show_panel_nav: false,
				autoplay: true,
				transition_interval: 2000,
				panel_animation: "crossfade"
			});
		});
	</script>

	<!-- Test automatic cycle -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#myCarousel').carousel({
			interval: 2000
		});

		//Heighlight the current page
		var str=location.href.toLowerCase();
		$(".nav li a").each(function() {			
			if (str.indexOf(this.href.toLowerCase()) > -1) {
				$("li.active").removeClass("active");
		    	$(this).parent().addClass("active");
		    }
		});
		    
	});
	
	</script>
</body>
</html>
