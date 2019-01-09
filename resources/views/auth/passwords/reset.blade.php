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



			<form method="POST" action="{{ route('password.request') }}">
				{{ csrf_field() }}

	            <input type="hidden" name="token" value="{{ $token }}">

				<div class="mb-8">
					<label for="email">E-Mail Address</label>
					<input placeholder="sigmund@besidethesofa.com" id="email" type="email" class="{{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
					{!! $errors->first('email', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}
				</div>

				<div class="mb-4">
					<label for="password">Password</label>

						<input placeholder="Your ego's password" autocomplete="new-password" id="password" type="password" class="{{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
						{!! $errors->first('password', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}

				</div>

				<div class="mb-8">
					<label for="password_confirmation">Confirm Password</label>

						<input placeholder="Your super-ego's password" autocomplete="new-password" id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? 'border-red-dark' : 'border-grey-light' }}" name="password_confirmation" required>
						{!! $errors->first('password_confirmation', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}
					</div>

				<div>

					<button type="submit" class="btn btn-large w-full mb-8">
						<i data-feather="send" class="align-middle mr-2"></i> {{ __('Send password reset link') }}
					</button>
			</form>


		</div>
	</div>

@endsection
