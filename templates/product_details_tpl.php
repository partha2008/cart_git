	<!-- Product Details Modal -->
	<script type="text/template" class="products-details-modal-template">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title"><%- _oData.oCurrentProductData.name %></h4>
		<span class="product-attributes">
		<% var categoryItem = _oData.categoriesCollection[_oData.oCurrentProductData.categoryIndex]; %>
		<strong>Categoryd: </strong><a data-categoryindex="<%- categoryItem.index %>" href="#/category/uid-<%- categoryItem.index %>/<%- categoryItem.slug %>" class="category-link-<%- categoryItem.index %> category-link"><%- categoryItem.name %></a> |  
		<strong>Product ID: </strong><%- _oData.oCurrentProductData.id %></span>
	  </div>
	  <div class="modal-body lw-modal-body">
		<%= _oData.oCurrentProductData.details %>
	  </div>
	  <div class="modal-footer">
		  <div class="form-inline">
		  <% if( _oData.enableQuoteCart ) { %>
			<span id="addToCartBtnContainer"></span>
			 <% }%>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	  </div>
	</script>
	<!-- /Product Details Modal -->