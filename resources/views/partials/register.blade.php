<a href="/login/google" class="btn btn-large btn-white w-full mb-4">


	<svg width="24" height="24" class="align-middle mr-2" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M17.64 9.205c0-.639-.057-1.252-.164-1.841H9v3.481h4.844a4.14 4.14 0 0 1-1.796 2.716v2.259h2.908c1.702-1.567 2.684-3.875 2.684-6.615z" fill="#4285F4" fill-rule="nonzero"></path><path d="M9 18c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332A8.997 8.997 0 0 0 9 18z" fill="#34A853" fill-rule="nonzero"></path><path d="M3.964 10.71A5.41 5.41 0 0 1 3.682 9c0-.593.102-1.17.282-1.71V4.958H.957A8.996 8.996 0 0 0 0 9c0 1.452.348 2.827.957 4.042l3.007-2.332z" fill="#FBBC05" fill-rule="nonzero"></path><path d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0A8.997 8.997 0 0 0 .957 4.958L3.964 7.29C4.672 5.163 6.656 3.58 9 3.58z" fill="#EA4335" fill-rule="nonzero"></path><path d="M0 0h18v18H0z"></path></g></svg>

	 Sign up with Google
</a>

<a href="/login/facebook" class="btn btn-large btn-white w-full mb-4">


	<svg width="24" height="24" class="align-middle mr-2" viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg"><path d="M7.2 2.323H5.923c-1.046 0-1.278.464-1.278 1.16V5.11h2.44l-.35 2.438h-2.09v6.387H2.09V7.548H0V5.11h2.09V3.252C2.09 1.162 3.368 0 5.342 0c.93 0 1.742.116 1.858.116v2.207z" fill="#3b5998" fill-rule="evenodd"></path></svg>

	 Sign up with Facebook
</a>

<p class="text-center my-8">or</p>

<form method="POST" action="{{ route('register') }}">
	{{ csrf_field() }}

	<div class="mb-8">

		<div class="md:flex">
			<div class="w-100 md:w-1/2 md:mr-6 mb-8 lg:mb-0">
				<label for="firstname">First name</label>

				<input placeholder="Sigmund" id="firstname" autocomplete="firstname" type="text" class="{{ $errors->has('firstname') ? 'border-red-dark' : 'border-grey-light' }}" name="firstname" value="{{ old('firstname') }}">
				{!! $errors->first('name', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}

			</div>

			<div class="w-100 md:w-1/2">
				<label for="lastname">Last name</label>

				<input placeholder="Freud" id="lastname" type="text" autocomplete="lastname" class="{{ $errors->has('lastname') ? 'border-red-dark' : 'border-grey-light' }}" name="lastname" value="{{ old('lastname') }}">
				{!! $errors->first('lastname', '<span class="block text-red-dark text-sm mt-2">:message</span>') !!}

			</div>

		</div>

	</div>

	<div class="mb-8">
		<label for="email">E-Mail Address</label>

			<input placeholder="sigmund@besidethesofa.com" autocomplete="email" id="email" type="email" class="{{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
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

			<button type="submit" class="btn btn-large w-full mb-4">
				<i data-feather="user-check" class="align-middle mr-2"></i> Create your account
			</button>



		</div>

</form>
