	<!-- /Products Grid add to cart -->		
	<script type="text/template" class="products-grid-add-to-cart-btn-template">
	<% if( _oData.enableQuoteCart ) {
	if( ! _oData.thisProductInCart ) { %>
			<a href="#" data-productindex="<%- _oData.listItem.index %>" class="btn btn-warning product-add-to-cart-btn product-add-to-cart-<%- _oData.listItem.index %>"><span class="add-to-cart-btn-text">Add to Quote <i class="glyphicon glyphicon-shopping-cart"></i></a>
		<% } else { %>
			<a href="#" data-productindex="<%- _oData.listItem.index %>" class="btn btn-success product-add-to-cart-btn product-add-to-cart-<%- _oData.listItem.index %>"><span class="add-to-cart-btn-text">Added </span> : <%- _oData.thisProductInCart %> <i class="glyphicon glyphicon-ok"></i></a>
		<% } %>
		 <a data-productindex="<%- _oData.listItem.index %>" href="#/product/uid-<%- _oData.listItem.index %>/<%- _oData.listItem.slug %>" class="product-id-<%- _oData.listItem.index %> product-link btn btn-default"><i class="glyphicon glyphicon-info-sign"></i> </a>

		 <% } else { %>
				<a data-productindex="<%- _oData.listItem.index %>" href="#/product/uid-<%- _oData.listItem.index %>/<%- _oData.listItem.slug %>" class="product-id-<%- _oData.listItem.index %> product-link btn btn-default">Details <i class="glyphicon glyphicon-info-sign"></i> </a>
		 <% } %>

	</script>
	<!-- /Products Grid add to cart -->