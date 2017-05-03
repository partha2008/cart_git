	<!-- Products Grid -->
	<script type="text/template" class="products-grid-template">
	<% if( _oData.currentProductCollection.length < 1) { %>
	<div class="alert alert-warning">
	  No Products to Display
	</div>
	<% } else { %>
	<% _.each( _oData.currentProductCollection, function( listItem ){ %>
		<li data-productindex="<%- listItem.index %>" class="product-item">
	  <div class="thumbnail">
	  <h4 class="product-name"> <%- listItem.name %></h4>
	  <a data-productindex="<%- listItem.index %>" href="#/product/uid-<%- listItem.index %>/<%- listItem.slug %>" class="product-id-<%- listItem.index %> product-link">
		<div class="thumb-holder"><img src="<%- listItem.thumbPath %>" alt="<%- listItem.name %>"></div>
		</a>
		<div class="btn-group product-add-to-cart-btn-container-<%- listItem.index %>" role="group"></div>
	  </div>
	</li>
	<% }); }; %>
	</script>