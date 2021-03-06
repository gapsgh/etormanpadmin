@extends('site.layout')

@section('title')
	Promotegh.com - Add Business
@stop

@section('content')
<div class="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-8 page-content">
				<div class="inner-box category-content">
					<h2 class="title-2"><i class="icon-user-add"></i> Create your business account, Its free </h2>
					<div class="row">
						<div class="col-sm-12">
						@if (count($errors) > 0)
		                    <div class="alert alert-danger">
		                        <ul>
		                            @foreach ($errors->all() as $error)
		                                <li>{{ $error }}</li>
		                            @endforeach
		                        </ul>
		                    </div>
		                @endif
							<form action="/companies" method="POST" class="form-horizontal" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<div class="form-group required">
										<label class="col-md-4 control-label">Company/Business Name <sup>*</sup></label>
										<div class="col-md-6">
											<input name="name" placeholder="Business Name" class="form-control input-md" required="" type="text">
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Registration Number</label>
										<div class="col-md-6">
											<input name="registration_number" placeholder="Company Registration Number" class="form-control input-md" type="text">
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Address</label>
										<div class="col-md-6">
											<input name="address" placeholder="Company Address" class="form-control input-md" type="text">
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Working Hours</label>
										<div class="col-md-6">
											<input name="working_hours" placeholder="Company Working Hours" class="form-control input-md" type="text">
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Phone Number <sup>*</sup></label>
										<div class="col-md-6">
											<input name="number" placeholder="Phone Number" class="form-control input-md" type="text">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label" for="textarea">About Business</label>
										<div class="col-md-6">
											<textarea class="form-control" id="textarea" name="other_description">
												A little About Your Business
											</textarea>
										</div>
									</div>
									<div class="form-group required">
										<label for="inputEmail3" class="col-md-4 control-label">Email
											<sup>*</sup>
										</label>
										<div class="col-md-6">
											<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="textarea"> Logo </label>
										<div class="col-md-8">
											<div class="mb10">
												<input id="Comp_logo" name="logo" type="file" class="file" data-preview-file-type="image" accept=".png,.jpg">
											</div>
											<p class="help-block">Add Your Company/Business Logo</p>
										</div>
									</div>
										
									<div class="form-group">
										<label class="col-md-4 control-label"></label>
										<div class="col-md-8">
											<div class="termbox mb10">
												<label class="checkbox-inline" for="checkboxes-1">
													<input name="checkboxes" id="checkboxes-1" value="1" type="checkbox">
														I have read and agree to the 
														<a href="#">Terms
													& Conditions</a> 
												</label>
											</div>
											<div style="clear:both"></div>
											
											<button type="submit" class="btn btn-primary">
												Create Business Profile
											</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 reg-sidebar">
				<div class="reg-sidebar-inner text-center">
					<div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
						<h3><strong>Post a Free Product or Service</strong></h3>
						<p> Post your free product or service ads with us. Get your product onto the large family of GH products </p>
					</div>
					<div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>
						<h3><strong>Create and Manage Items</strong></h3>
						<p>Easily Add and Manage your Ghana Made Products or Services posted here.</p>
					</div>
					<div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>
						<h3><strong>Create your Favorite ads list.</strong></h3>
						<p> Boost your favorite products by setting a list of your best products or service.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
@stop

@section('scripts')
	<script type="text/javascript">
		initialize_image_input('Comp_logo');
	</script>
	
@stop