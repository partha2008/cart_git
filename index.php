	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

			<title>JQuery XML Product Showcase &amp; Quote Cart</title>
			
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			
			<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,700,700italic,500italic" rel="stylesheet" type="text/css">
			<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
			<link href="./assets/css/lw-jquery-xml-quote-cart.min.css" rel="stylesheet">
			<link href="./assets/css/style.css" rel="stylesheet">
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
				  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
			<!--  fav and touch icons -->
			<link rel="shortcut icon" href="./assets/ico/favicon.ico">
			<link rel="apple-touch-icon" href="./assets/ico/apple-touch-icon.png">
			<link rel="apple-touch-icon" sizes="72x72" href="./assets/ico/apple-touch-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="114x114" href="./assets/ico/apple-touch-icon-114x114.png">
		</head>

		<body class="bs-3">
			<div id="loaderContainer" style="top: 241.5px; left: 584.5px; display: none;">
				<div class="preloader">Loading...</div>
				<span class="lw-waiting-text">Please wait</span>		   
			</div>			
			<?php include_once('includes/dynamic_show_cart.php');?>
			<div id="mainContainer" style="">
				<?php include_once('includes/header.php');?>				
				<!-- Main Container -->
				<div class="container-fluid content-container">
				   <!-- Content Holder -->
					<div class="row">
					    <div class="col-lg-3"><?php include_once('includes/sidebar.php');?></div>
						<div class="col-lg-9">
							<!--<div class="alert alert-warning alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<strong>Please Note: </strong>Demo purposes only. No request will be sent.
							</div>-->							
							<!-- Products Holder -->
							<ul id="productsContainer" class="thumbnails" style="position: relative; height: 336px;">
								<!--<li data-productindex="spkf0001" class="product-item fade-in" style="position: absolute; left: 10px; top: 10px;">
									<div class="thumbnail">
										<h4 class="product-name"> Rocker Dolphin</h4>
										<a data-productindex="spkf0001" href="#/product/uid-spkf0001/rocker-dolphin" class="product-id-spkf0001 product-link">
											<div class="thumb-holder"><img src="./assets/images/thumbs/Kids-Furniture/Nilkamal-Rocker-Dolphin-Yellow-Olive-SDL181747751-1-6531d.jpg" alt="Rocker Dolphin"></div>
										</a>
										<div class="btn-group product-add-to-cart-btn-container-spkf0001" role="group">
											<a href="#" data-productindex="spkf0001" class="btn btn-warning product-add-to-cart-btn product-add-to-cart-spkf0001"><span class="add-to-cart-btn-text">Add to Quote <i class="glyphicon glyphicon-shopping-cart"></i></span></a>
											<a data-productindex="spkf0001" href="#/product/uid-spkf0001/rocker-dolphin" class="product-id-spkf0001 product-link btn btn-default"><i class="glyphicon glyphicon-info-sign"></i> </a>
										</div>
									</div>
								</li>
								<li data-productindex="spkf0002" class="product-item fade-in" style="position: absolute; left: 240px; top: 10px;">
									<div class="thumbnail">
										<h4 class="product-name"> Movable Desk &amp; Drawer Set</h4>
										<a data-productindex="spkf0002" href="#/product/uid-spkf0002/movable-desk--drawer-set" class="product-id-spkf0002 product-link">
											<div class="thumb-holder"><img src="./assets/images/thumbs/Kids-Furniture/Alex-Daisy-Movable-Desk-Drawer-SDL809178588-1-37e64.jpg" alt="Movable Desk &amp; Drawer Set"></div>
										</a>
										<div class="btn-group product-add-to-cart-btn-container-spkf0002" role="group">
											<a href="#" data-productindex="spkf0002" class="btn btn-warning product-add-to-cart-btn product-add-to-cart-spkf0002"><span class="add-to-cart-btn-text">Add to Quote <i class="glyphicon glyphicon-shopping-cart"></i></span></a>
											<a data-productindex="spkf0002" href="#/product/uid-spkf0002/movable-desk--drawer-set" class="product-id-spkf0002 product-link btn btn-default"><i class="glyphicon glyphicon-info-sign"></i> </a>
										</div>
								   </div>
								</li>-->
							</ul>
							<!-- /Products Holder --> 
					  </div>
				   </div>
				   <!-- /Content Holder -->	
					<?php include_once('includes/footer.php');?>
				</div>
				<!-- /Main Container -->
			</div>
			<?php include_once('includes/modal_container.php');?>
			
			<!--  Templates --> 
			<?php include_once('templates/submit_request_tpl.php');?>
			<?php include_once('templates/cart_grid_tpl.php');?>
			<?php include_once('templates/cart_record_tpl.php');?>
		    <?php include_once('templates/cart_btn_tpl.php');?>
		    <?php include_once('templates/search_bar_tpl.php');?>
		    <?php include_once('templates/sidebar_cat_tpl.php');?>
		    <?php include_once('templates/product_grid_tpl.php');?>
		    <?php include_once('templates/product_grid_cart_tpl.php');?>
			<?php include_once('templates/product_details_tpl.php');?>
			<?php include_once('templates/breadcrumb_tpl.php');?>
			<!--  / Templates --> 
			
			<script type="text/javascript" src="./assets/js/jquery.min.js"></script> 
			<script type="text/javascript" src="./assets/js/underscore-min.js"></script> 
			<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script> 
			<script type="text/javascript" src="./assets/js/jquery.validate.min.js"></script> 
			<script type="text/javascript" src="./assets/js/jquery.json.min.js"></script> 
			<script type="text/javascript" src="./assets/js/jstorage.min.js"></script>
			<script type="text/javascript" src="./assets/js/imagesloaded.pkgd.min.js"></script> 
			<script type="text/javascript" src="./assets/js/masonry.pkgd.min.js"></script> 
			<script type="text/javascript" src="./assets/js/lw-jquery-xml-quote-cart.min.js"></script>

		</body>
	</html>