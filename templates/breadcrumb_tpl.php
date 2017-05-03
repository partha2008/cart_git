	<!-- BreadCrumb template -->
	<script type="text/template" class="product-breadcrumb-template">
	<% if( _oData.breadCrumbProudctCategory  == 'all' ) { %>
		<li><a data-categoryindex="all" href="#/category/uid-all" class="category-link-all category-link">All</a></li>
		<% } else { %>
		<li><a data-categoryindex="all" href="#/category/uid-all" class="category-link-all category-link">All</a></li>
		<span class="divider">/</span> 
		<li><a data-categoryindex="all" href="#/category/uid-<%- _oData.breadCrumbProudctCategory.index %>" class="category-link-<%- _oData.breadCrumbProudctCategory.index %> category-link"><%- _oData.breadCrumbProudctCategory.name %></a></li>
		<% if( _oData.breadCrumbProduct ) { %>
			<span class="divider">/</span> <li> <%- _oData.breadCrumbProduct.name %>
		<% }%>
	  <% }%>
	</script>
	<!-- /BreadCrumb template -->