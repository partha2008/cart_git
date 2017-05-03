	<!-- Request a Quote Cart button. --> 
	<script type="text/template" class="quote-cart-btn-template">
	  <a title="View Cart" class="btn btn-default show-quote-cart-btn lw-disabled-cart" href="#/quote-cart/uid-show">
	<strong><%- _oData.cartStats.totalItems %></strong> <%- (_oData.cartStats.totalItems === 1) ? 'item' : 'items' %> in QuoteCart <i class="glyphicon glyphicon-shopping-cart"></i></a> 
	</script>
	<!-- /Request a Quote Cart button. -->