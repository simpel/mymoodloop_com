<nav class="flex items-center content-center justify-between flex-wrap p-6 w-full max-w-xl mx-auto">
	<div class="flex items-center flex-no-shrink text-{{ $color }} text-white mr-6">
		<a href="{{ route('start') }}" class="logo text-{{ $color }}">
			{{ config('app.logo', 'Laravel') }}
		</a>
	</div>
	<div class="block md:hidden">
		<button id="menuBtn" class="flex items-center btn btn-{{ $color }}">
			<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
				<title>Menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
			</svg>
		</button>
	</div>
	<div id="menu" class="w-full block flex-grow md:flex md:items-center md:w-auto">

		<div class="text-sm md:flex-grow">
			@auth
				<a href="{{ route('you') }}" class="block mt-8 lg:inline-block lg:mt-0 text-{{ $color }}">{{ __('Home') }}</a>
			@endauth
		</div>

		<div class="flex">
			@auth
				<a href="{{ route('logout') }}" class="btn btn-{{ $color }} block w-full mt-8 md:mt-0">{{ __('Logout') }}</a>
			@else
				<a href="{{ route('login') }}" class="btn btn-{{ $color }} block w-full mt-8 md:mt-0 md:mr-4">{{ __('Login') }}</a>
				<a href="{{ route('register') }}" class="btn w-full block mt-4 md:mt-0">{{ __('Register') }}</a>
			@endauth
		</div>

	</div>
</nav>
