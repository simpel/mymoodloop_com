@extends('layouts.app')

@section('content')
		@include('partials.headers.loggedin', [
			'user' => $user,
		])

	<div class="bg-white">
		<div class="flex flex-col content-between max-w-xl mx-auto px-6 pb-6 ">
			Hello! {{ $user->firstname}}
		</div>
	</div>


@endsection
