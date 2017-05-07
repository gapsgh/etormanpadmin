@extends('admin.layout')

@section('content')
	<h3 class="pull-right">Create Category</h3>
	<form action="/categories" method="POST">
	{{ csrf_field() }}
		<div class="row">
	        <div class="input-field col s6">
	          <input placeholder="PLease Enter The Level 1 Category Here" id="cat-lev1" type="text" name="level1" class="validate" required="">
	          <label for="cat-lev1" class="active">Category Level 1 Name</label>
	        </div>
	        <div class="input-field col s5">
		        <div id="level2s">
		        	<div class="row lev2">
                      <div class="input-field col s12">
                        <input id="cat-lev2-1" type="text" name="level2s[]" required="" >
                        <label for="cat-lev2-1" class="">Category Level 2</label>
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
<script type="text/javascript">
var counter = 2;

function add_level_two() {
	$('#level2s').append( '<div class="row lev2"><div class="input-field col s12"><input id="cat-lev2-'+counter+'" type="text" name="level2s[]" focus><label for="cat-lev2-'+counter+'" class="">Category Level 2</label></div></div>' );
	$('#cat-lev2-'+counter+'').focus();
	counter++;
}
	$( document ).ready(function() {

		

	});
</script>
	
@stop