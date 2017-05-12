@extends('admin.layout')

@section('content')
	<h3 class="pull-right">Create Category</h3>
	<form action="/categories" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
		<div class="row">
	        <div class="input-field col s6">
	          <input placeholder="PLease Enter The Level 1 Category Here" id="cat-lev1" type="text" name="level1" class="validate" required="">
	          <label for="cat-lev1" class="active">Main Category Level Name</label>
	          	
				<input id="img" type="file" name="cat_lev_1_img" class="file"  required="">
				
	        </div>
	        <div class="input-field col s5">
		        <div id="level2s">
		        	<div class="row lev2">
                      <div class="input-field col s12">
                        <input id="cat-lev2-1" type="text" name="level2s[0][name]" required="" >
                        <label for="cat-lev2-1" class="">Sub Category Level Name</label>
                        <input id="l2img1" type="file" name="level2s[0][img]" class="file"  required=""><br/>
                      </div>
                    </div>
		        </div>
		        <a onclick="add_level_two();" id="add-lev-2" class="btn-floating waves-effect waves-light darken-2">
		        	<i class="mdi-content-add activator"></i>
		        </a>
	         
	        </div>
	     </div>
	     <div class="row">
	          <div class="input-field col s12">
	            <button class="btn waves-effect waves-light right" type="submit">
	            Create Category
	              <i class="mdi-content-send right"></i>
	            </button>
	          </div>
        </div>
	</form>

@stop

@section('scripts')
	<?php 
		if(session('success_message')){
			?>
			<script type="text/javascript">
				setTimeout(function() {
	            	Materialize.toast('<span>{{ session('success_message') }}</span>', 5000, 'btn-success');
	        	}, 1000);
			</script>
			<?php
		}
	?>
<script type="text/javascript">
initialize_image_input('img');
initialize_image_input('l2img1');

var counter = 2;

function add_level_two() {
	$('#level2s').append( '<div class="row lev2"><div class="input-field col s12"><input id="cat-lev2-'+counter+'" type="text" name="level2s['+counter+'][name]" focus><label for="cat-lev2-'+counter+'" class="">Category Level 2</label></div></div><input id="l2img'+counter+'" type="file" name="level2s['+counter+'][img]" class="file"  required="" required><br/>' );
	
	$('#cat-lev2-'+counter+'').focus();
	initialize_image_input('l2img'+counter+'');
	counter++;
}

</script>
	
@stop