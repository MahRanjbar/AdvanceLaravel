@if(Session::has('flash_message'))

		<div class="alert alert-info akert-dismissable" role="alert">
			<button type="butoon" class="close" data-dismiss="alert">
				<span artia-hidden="true">&times;</span><span class="sr-only">Close</span>
			</button>
			{{Session::get('flash_message')}}
		</div>
	@endif