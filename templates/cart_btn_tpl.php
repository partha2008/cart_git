	<!-- Add to cart button. -->
	<script type="text/template" class="add-to-cart-btn-template">
	<% if( ! _oData.nProductInCart ) { %>
		<a href="#" class="btn btn-warning add-to-cart-btn"><span class="add-to-cart-btn-text">Add to Quote</span> <i class="glyphicon glyphicon-shopping-cart"></i></a>
	<% } else { %>
		<a href="#" class="btn btn-success add-to-cart-btn"><span class="add-to-cart-btn-text">Added </span> <i class="glyphicon glyphicon-ok"></i>: <%- _oData.nProductInCart %> </a>
	<% }%>
	</script>
	<!-- /Add to cart button. -->