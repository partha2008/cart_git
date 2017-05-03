	<!-- Request a Quote Cart. --> 
	<script type="text/template" class="quote-cart-template">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		  <h3>Quote Cart</h3>
		</div>
		
		<div class="modal-body"> 
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Description</th>
							<th class="right-align">Qty.</th>
							<th class="center-align">Remove</th>
						</tr>
					</thead>
					<tbody id="shoppingCartData">
						<% if( _oData.cartProductsCollection.length > 0 ) {
						_.each( _oData.cartProductsCollection, function(listItem, nCartRowIndex ) { 
						var listItemProduct = _oData.allProductsCollection[listItem.index]; %>
						<tr>
							<td><%- listItemProduct.name %></td>
							<td class="right-align"><input data-cartrowindex="<%- nCartRowIndex %>" type="number" step="1" min="1" value="<%- listItem.qty %>" class="cart-product-qty right-align"/></td>
							<td class="center-align"><button type="button" data-cartrowindex="<%- nCartRowIndex %>" class="btn btn-link delete-product-from-cart" title="Remove from Cart"><i class="glyphicon glyphicon-trash"></i></button></td>
						</tr>
						<% }); } else { %>
						<td colspan="6"><div class="alert alert-info">No item found for requesting quote</div></td>
						<% } %>
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="modal-footer"> 
			<div id="shoppingCartTotal" class="alert alert-info tar">Total <strong><%- _oData.cartStats.totalItems %></strong> <%- (_oData.cartStats.totalItems === 1) ? 'item' : 'items' %> in your QuoteCart.</div>
		  <div><a href="#" class="btn btn-default pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-arrow-left"></i> Continue </a> </div>
		  <% if( ! _oData.generalVars.enableOrderBtn) { %> 
		  <a id="checkoutSubmitRequestBtn" class="btn btn-primary"  title="Ask a Question" href="#/quote-cart/uid-submit-order">Ask a Question <i class="glyphicon glyphicon-question-sign"></i></a>
		   <% } else { %>
				<a id="checkoutSubmitRequestBtn" class="btn btn-primary"  title="Submit order by Email" href="#/quote-cart/uid-submit-order">Request a Quote <i class="glyphicon-envelope"></i></a>
			 <% } %>
		</div>
	</script>
	<!-- /Request a Quote Cart. -->