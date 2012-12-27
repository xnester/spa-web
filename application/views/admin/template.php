<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css"
	rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<!--<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main-style.css" type="text/css" />-->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap-responsive.css"
	type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
</head>
<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<h3 class="muted">Project name</h3>
			</div>
			<div class="span3 offset6">
				Welcome <?php echo $name ?> <a href="<?php echo base_url()?>admin/manage/do_logout">Logout Fool!</a>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3">
			<div id="admin_menu">
				<ul class="nav nav-tabs nav-stacked">
					<li class="active"><?php echo anchor('admin/manage','<i class="icon-home"></i> Home')?></li>
					<li><?php echo anchor('admin/promotions','<i class="icon-gift"></i> Promotions')?></li>
					<li><?php echo anchor('admin/gallery','<i class="icon-picture"></i> Gallery')?></li>
					<li><?php echo anchor('admin/comments','<i class="icon-comment"></i> Comments')?></li>
					<li><?php echo anchor('admin/settings','<i class="icon-cog"></i> Settings')?></li>
					<li><?php echo anchor('admin/help','<i class="icon-question-sign"></i> Help')?></li>
				</ul>
				</div>
			</div>
			<div class="span9">
			    <ul class="breadcrumb">
    <li><a href="#">Home</a> <span class="divider">/</span></li>
    <li><a href="#">Library</a> <span class="divider">/</span></li>
    <li class="active">Data</li>
    </ul>
				<h1><?php echo $headline;?></h1>
				<?php echo $this->load->view($include);?>
			</div>
		</div>
		<hr>
		<div class="footer">
			<p>
				Page rendered in <strong>{elapsed_time}</strong> seconds
			</p>
			<p>&copy; Company 2012</p>
		</div>
	</div>
	<!-- /container -->
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/global.js"></script>
	<!-- Test automatic cycle -->
	<script type="text/javascript">
	  $(document).ready(function() {
		    $('#myCarousel').carousel({
		      interval: 2000
		    });

		  //Heighlight the current page
			var str=location.href.toLowerCase();
			$("#admin_menu .nav li a").each(function() {			
				if (str.indexOf(this.href.toLowerCase()) > -1) {
					$("#admin_menu .nav li.active").removeClass("active");
			    	$(this).parent().addClass("active");
			    }
			});
	});
	
	</script>
</body>
</html>
