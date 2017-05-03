<!-- Submit Request form -->
			<script type="text/template" class="submit-request-form-template">
				<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				  <h3 class="request-page-header">Submit Request</h3>
				</div>
				<div class="modal-body request-page-body"> 
				  <!-- Submit Request Form -->
				  <form class="form-horizontal bs-3-form" id="submitRequestForm">
				  <div class="bs-callout bs-callout-danger">
				Field(s) marked as <strong class="color-red">*</strong> are required.
			  </div>
			<div>
			<!--  Name -->
			  <div class="form-group">
				  <label for="fname" class="col-sm-3 col-md-3 col-lg-3 control-label">Name: </label>
				  <div class="col-sm-3 col-md-3 col-lg-3">
					<input type="text" name="fname" value="" id="fname" class="form-control" placeholder="First Name" autofocus="">
		 
				  </div>
				  <div class="col-sm-3 col-md-3 col-lg-3">
					<input type="text" name="lname" value="" id="lname" class="form-control" placeholder="Last Name">
		 
				  </div>
						  </div>
			<!--  /Name --> 
				  <!--  Business Name -->
				  <div class="form-group">
					<label for="sof_bname" class="col-sm-3 col-md-3 col-lg-3 control-label">Business Name: </label>
					<div class="col-sm-6 col-md-6 col-lg-6">
					 <input type="text" name="sof_bname" value="" id="sof_bname" class="form-control">
		 
					</div>
				  </div>
			<!--  /Business Name --> 
			<!--  Email -->
			<div class="form-group">
					<label for="sof_email" class="col-sm-3 col-md-3 col-lg-3 control-label"><strong class="color-red">*</strong> Email: </label>
					<div class="col-sm-6 col-md-6 col-lg-6">
					 <input type="email" name="sof_email" value="" id="sof_email" class="form-control required" required>
		 
								  </div>
				  </div>
				  <!--  /Email --> 
				  <!--  Address -->
				  <div class="form-group">
					<label for="sof_add" class="col-sm-3 col-md-3 col-lg-3 control-label">Address: </label>
					<div class="col-sm-6 col-md-6 col-lg-6">
					 <div class="input-group">
					  <span class="input-group-addon">Street</span>
					  <input type="text" name="sof_add" value="" id="sof_add" class="form-control" autocomplete="off">
					</div>
					</div>
				  </div>
					<!--  /Street --> 
					<!--  City -->
					<div class="form-group">
					  <label for="" class="col-sm-3 col-md-3 col-lg-3 control-label"></label>
					  <div class="col-sm-6 col-md-6 col-lg-6">
					   <div class="input-group">
						<span class="input-group-addon">City</span>
						<input type="text" name="sof_city" value="" id="sof_city" class="form-control">
		 
					  </div>
					  </div>
					</div>

					<!--  /City --> 
					<!--  Zip code -->
					<div class="form-group">
					<label for="" class="col-sm-3 col-md-3 col-lg-3 control-label"></label>
					  <div class="col-sm-6 col-md-6 col-lg-6">
					   <div class="input-group">
						<span class="input-group-addon">ZIP</span>
						<input type="text" name="sof_zip" value="" id="sof_zip" class="form-control">
		 
					  </div>
					  </div>
					</div>

					<!--  /Zip code --> 
					<!--  Phone -->

					<div class="form-group">
					<label for="" class="col-sm-3 col-md-3 col-lg-3 control-label"></label>
					  <div class="col-sm-6 col-md-6 col-lg-6">
					   <div class="input-group">
						<span class="input-group-addon">Ph</span>
						<input type="tel" name="sof_ph" value="" id="sof_ph" class="form-control">
					  </div>
					  </div>
					</div>
					<!--  /Phone --> 
					<!--  Country -->
					<div class="form-group">
					<label for="" class="col-sm-3 col-md-3 col-lg-3 control-label"></label>
					  <div class="col-sm-6 col-md-6 col-lg-6">
					   <div class="input-group">
						<span class="input-group-addon">Country</span>
						<input type="text" name="sof_country" value="" id="sof_country" class="form-control">
		 
					  </div>
					  </div>
					</div>

					<!--  /Country --> 

				  
				  <!--  /Address --> 
				  <!--  Message -->
				  <div class="form-group">
					<label for="sof_message" class="col-sm-3 col-md-3 col-lg-3 control-label">Message if any: </label>
					  <div class="col-sm-8 col-md-8 col-lg-8">
						<textarea name="sof_message" cols="40" rows="10" id="sof_message" class="form-control"></textarea>
					</div>
					</div>
				  <!--  /Message -->
			  </form>
			  <!-- /Submit Request Form --> 
			</div>
			<div class="modal-footer"> 
			  <!--  Action Buttons -->
			  <div><a id="backToCartBtn" href="#" class="btn btn-default pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Back to Cart</a> <a href="#" id="submitRequestBtn" disabled class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i> Submit Request</a> <button class="btn hide btn request-page-close-btn" data-dismiss="modal" aria-hidden="true">Close</button></div>
			  <!--  /Action Buttons --> 
			</div>
		</script>
		<!-- /Submit Request form -->