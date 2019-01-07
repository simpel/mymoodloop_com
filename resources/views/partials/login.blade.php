<form method="POST" action="{{ route('login') }}">
	{{ csrf_field() }}


	<div class="mb-8">
		<label for="email">E-Mail Address</label>

		<input placeholder="sigmund@besidethesofa.com" id="email" type="email" class="{{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
		{!! $errors->first('email', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}
	</div>

	<div class="mb-8">
		<label for="password">Password</label>

		<input placeholder="Your ego's password" id="password" type="password" class="{{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
		{!! $errors->first('password', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}
	</div>

	<div class="mb-8">
		<label>
			<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>  {{ __('Remember Me') }}
		</label>
	</div>


	<button type="submit" class="btn btn-large w-full mb-8">
		<i data-feather="log-in" class="align-middle"></i> {{ __('Login') }}
	</button>

	<div class="md:flex">
		<div class="w-100 md:w-1/2 lg:mr-6 mb-8 lg:mb-0">
			<a href="{{ route('password.request') }}">
				{{ __('Forgot Your Password?') }}
			</a>
		</div>

		<div class="w-100 md:w-1/2 md:text-right">
			<a href="{{ route('register') }}">
				{{ __('Sign up') }}
			</a>
		</div>

	</div>
</form>
