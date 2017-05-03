	<!-- Sidebar Categories. -->
	<script type="text/template" class="sidebar-catgegories-template">
	<% _.each(_oData.categoriesCollection,function( listItem ){ %>
	  <li class="list-group-item category-list-item-<%- listItem.index %>">
		 <a data-categoryindex="<%- listItem.index %>" href="#/category/uid-<%- listItem.index %>/<%- listItem.slug %>" class="category-link-<%- listItem.index %> category-link btn-block"><%- listItem.name %> <span class="badge lw-category-badge"><%- listItem.count %></span> <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>
	  </li>
	<% }) %>
	</script>
	<!-- /Sidebar Categories. -->