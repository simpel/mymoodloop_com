<form method="POST" action="{{ route('register') }}">
	{{ csrf_field() }}

	<div class="mb-8">

		<div class="md:flex">
			<div class="w-100 md:w-1/2 md:mr-6 mb-8 lg:mb-0">
				<label for="firstname">First name</label>

				<input placeholder="Sigmund" id="firstname" autocomplete="firstname" type="text" class="{{ $errors->has('firstname') ? 'border-red-dark' : 'border-grey-light' }}" name="firstname" value="{{ old('firstname') }}" autofocus>
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

			<button type="submit" class="btn btn-large w-full">
				Register
			</button>
		</div>

</form>
