	<!--  header -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid lw-header-bar">
				<!--  logo --> 
				<a class="brand" href="javascript:void(0);">
					<img class="lw-main-logo-img" id="storeLogo" src="./assets/images/logo.png" alt="Logo"></a> 
				<!-- /logo -->
				
				<!-- Show Cart Button -->
				<span class="hidden-xs quote-cart-btn-wrapper-parent">
					<span class="pull-right quote-cart-btn-container quote-cart-btn-wrapper">
						<a title="View Cart" class="btn btn-default show-quote-cart-btn lw-disabled-cart" href="#/quote-cart/uid-show">
							<strong>2</strong> items in QuoteCart <i class="glyphicon glyphicon-shopping-cart"></i>
						</a> 
					</span>
				</span>
				<span class="visible-xs quote-cart-btn-wrapper-parent">
					<span class="pull-right quote-cart-btn-container-icon-only quote-cart-btn-wrapper">
						<a title="View Cart" class="btn btn-default show-quote-cart-btn lw-disabled-cart" href="#/quote-cart/uid-show">
							<i class="glyphicon glyphicon-shopping-cart"></i>
						</a>
					</span>          
				</span>
				<!-- /Show Cart Button --> 
			</div>
		</div>
		<?php include_once("breadcrumb.php");?>		
	</div>
	<!--  /header -->