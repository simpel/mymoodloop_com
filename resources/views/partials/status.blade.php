


@if (session('status'))
	<div class="status">
		<i data-feather="alert-triangle" class="align-middle h-4 w-4 mr-2"></i> {{ session('status') }}
	</div>
@endif
