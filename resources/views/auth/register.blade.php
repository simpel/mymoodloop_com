@extends('layouts.app')

@section('content')
	<a name="getstarted"></a>

	<div class="flex md:justify-center min-h-screen">
		<div class="w-full max-w-sm md:self-center mx-4">
			<h1 class="font-logo">
				<a href="{{ route('start') }}" class="logo">
			  		{{ config('app.logo', 'Laravel') }}
		    	</a>
			</h1>
			@include('partials.status')
			<h2 class="mb-10">Let's become friends!</h2>
			@include('partials.register')
		</div>
	</div>

@endsection
