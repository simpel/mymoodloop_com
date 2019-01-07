@extends('layouts.app')

@section('content')
	<a name="login"></a>

	<div class="flex justify-center min-h-screen">
		<div class="w-full max-w-sm self-center">
			<h1 class="font-logo">
				{{ config('app.logo', 'Laravel') }}
			</h1>
			<h2 class="mb-10">{{ __('Login') }}</h2>
			@include('partials.login')
		</div>
	</div>

@endsection
