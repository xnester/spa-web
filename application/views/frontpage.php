<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
<style type="text/css">
body { /*padding-top: 20px;*/
	padding-bottom: 40px;
	/*background:#2D1A33;*/
	background:#0E0112;
	color:#FFF;
}
/* Custom container */
.container-narrow {
	margin: 0 auto;
	max-width: 870px;
}

.container-narrow>hr {
	margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
	margin: 60px 0;
	text-align: center;
	width: 100%;
}

.jumbotron h1 {
	font-size: 72px;
	line-height: 1;
}

.jumbotron .btn {
	font-size: 21px;
	padding: 14px 24px;
}

/* Supporting marketing content */
.marketing {
	margin: 60px 0;
}

.marketing p+h4 {
	margin-top: 28px;
}

/* Carousel base class */
/* Splash */
.splash{
	margin-top:30px;
	margin-bottom:30px;
}

.splash-button{
	margin-left:10px;
	position:absolute;
	
	bottom:10px;
	
}
.splash-button ul{
    list-style-type:none;
    display: inline-block;
    margin-bottom: 0;
    margin-left: 0;
}
.splash-button li {
	float: left;
	background-color:#FFF;
	margin-right:5px;
}
.splash-button li a{
	padding:0 8px;
	display:block;
	text-decoration: none;

}


/**/
.carousel {
	margin-bottom: 0px;
}

.carousel .container {
	position: absolute;
	right: 0;
	bottom: 0;
	left: 0;
}

.carousel-control {
	background-color: transparent;
	border: 0;
	font-size: 120px;
	margin-top: 0;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .4);
}

.carousel .item { /*height: 500px;*/
	
}

.carousel img {
	/*min-width: 100%;*/
	/*height: 500px;*/
}

.carousel-caption { /*
	position: static;
max-width: 550px;
padding: 0 20px;
margin-bottom: 100px;
*/
	background-color: transparent;
	
	position:absolute;
	float:left;
	top: 0;
	bottom:auto;
	margin-left:466px;
	max-width: 385px;
	padding:0px;
	
}
.carousel-caption p {
	color:#000000;
}

.carousel-caption h1,.carousel-caption .lead {
	margin: 0;
	line-height: 1.25;
	color: #fff;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .4);
}

.carousel-caption .btn {
	margin-top: 10px;
}

.carousel-inner {
	/*width: 446px;
	height: 304px;*/
}

/* Heading */
.masthead {
	padding: 20px 0;
}

.border {
	background: url(assets/img/dividers.png) repeat-x bottom;
}

.header-bottom {
	/*background-color: #2D1A33;*/
	background-color: #5B065C;
	line-height: 49px;
	color: #FFFFFF;
}
.header-bottom p{
	font-family: "Droid Serif", Georgia, sans-serif !important;
	color:#EDEBEB;
	font-size: 16px;
}
/* Feature content */
.featurette {
	margin-top:11px;
	padding-top:35px;
}

.featurette hr {
	margin: 0 0 10px 0;
}
.thumbnail{
	padding:0;
	border-radius:0;
}

/* Header Menu Link */
.masthead a {
    color: #FFF;
    text-decoration: none;
}
.masthead a:hover {
    color: #FFF;
    text-decoration: underline;
}
.masthead .nav-pills > li > a:hover{
	background-color: #5B065C;
    text-decoration: none;
}
.masthead .nav-pills > .active > a, .nav-pills > .active > a:hover {
    background-color: #5B065C;
    color: #FFFFFF;
}

</style>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

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
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Promotion</a></li>
				<li><a href="#">Gellery</a></li>
				<li><a href="#">Location</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			<h3 class="muted">Project name</h3>


		</div>
	</div>
	<!--  <hr> -->
<div class="mobile hidden-desktop">
test mobile
</div>
	<div class="splash ">
		<div class="container-narrow">
		<div class="row-fluid">
		<div class="span6">
		
			<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="assets/img/410x302.gif" class="img-polaroid">
                  </div>
                  <div class="item">
                    <img src="assets/img/410x302.gif" class="img-polaroid">
                  </div>
                  <div class="item">
                    <img src="assets/img/410x302.gif" class="img-polaroid">
                  </div>
                </div>
   <div class="splash-button">             
    <ul>
    <li><a class="" href="#myCarousel" data-slide="prev">&lsaquo;</a></li>
    <li><a class="" href="#myCarousel" data-slide="next">&rsaquo;</a></li>
    </ul>
    </div>
                <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                -->
              </div>
        </div>
              <div class="span6">
              <div class="splash-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    </div>
          </div>           
		</div>
	</div><!-- splash -->
	
	<div class="header-bottom">
		<div class="container-narrow">
			<p>"ทดสอบภาษาไทย Cras justo odio, dapibus ac facilisis in, egestas eget quam."</p>
		</div>
	</div>

	<!-- <div class="jumbotron">
        <h1>Super awesome marketing speak!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="#">Sign up today</a>
      </div>-->
	<div class="container-narrow">
		<!--  <hr> -->
		<div class="featurette">
			<div class="row">
				<div class="span9">
					<div class="row">
						<div class="span3">

							<div class="thumbnail">
								<img alt="" src="http://placehold.it/300x200">
							</div>
							<div class="caption">

								<h3>Heading</h3>
								<hr>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce
									dapibus, tellus ac cursus commodo, tortor mauris condimentum
									nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
									malesuada magna mollis euismod. Donec sed odio dui.</p>
								<p>
									<a href="#" class="btn">View details »</a>
								</p>
							</div>

						</div>
						<div class="span3">
							<div class="thumbnail">
								<img alt="" src="http://placehold.it/300x200">
							</div>
							<div class="caption">
								<h3>Heading</h3>
								<hr>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce
									dapibus, tellus ac cursus commodo, tortor mauris condimentum
									nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
									malesuada magna mollis euismod. Donec sed odio dui.</p>
								<p>
									<a href="#" class="btn">View details »</a>
								</p>
							</div>
						</div>
						<div class="span3">
							<div class="thumbnail">
								<img alt="" src="http://placehold.it/300x200">
							</div>
							<div class="caption">
								<h3>Heading</h3>
								<hr>
								<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis
									in, egestas eget quam. Vestibulum id ligula porta felis euismod
									semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
									condimentum nibh, ut fermentum massa justo sit amet risus.</p>
								<p>
									<a href="#" class="btn">View details »</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<!--  <div class="border"></div>-->

		<div class="footer">
			<p>&copy; Company 2012</p>
		</div>

	</div>
	<!-- /container -->
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<!-- Test automatic cycle -->
	<script type="text/javascript">
	  $(document).ready(function() {
		    $('#myCarousel').carousel({
		      interval: 2000
		    })
		  });
	
	</script>
</body>
</html>