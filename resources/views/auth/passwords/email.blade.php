@extends('layouts.app')

@section('content')

	<div class="flex md:justify-center min-h-screen">
		<div class="w-full max-w-sm md:self-center mx-4">
			<h1 class="font-logo">
				<a href="{{ route('start') }}" class="logo">
			  		{{ config('app.logo', 'Laravel') }}
		    	</a>
			</h1>

			@include('partials.status')


			<h2 class="mb-10">{{ __('Reset Password') }}</h2>



			<form method="POST" action="{{ route('password.email') }}">
				{{ csrf_field() }}

				<div class="mb-8">
					<label for="email">E-Mail Address</label>

					<input placeholder="sigmund@besidethesofa.com" id="email" type="email" class="{{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
					{!! $errors->first('email', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}
				</div>

				<button type="submit" class="btn btn-large w-full mb-8">
					<i data-feather="send" class="align-middle mr-2"></i> {{ __('Send password reset link') }}
				</button>
			</form>


		</div>
	</div>

@endsection
