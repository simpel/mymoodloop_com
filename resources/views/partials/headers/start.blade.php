


<div class="bg-primary z-50 fixed w-full">
<nav class="flex items-center justify-between flex-wrap py-6 w-full max-w-xl mx-auto">

  <div class="flex items-center flex-no-shrink text-white mr-6 pl-6">
	  <a href="{{ route('start') }}" class="logo text-white">
  		
		{{ config('app.logo', 'Laravel') }}
  	</a>
  </div>
  <div class="block md:hidden pr-6">
    <button id="menuBtn" class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-primary-lighter hover:border-primary-lighter">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div id="menu" class="w-full block flex-grow md:flex md:items-center md:justify-between md:w-auto">
    <div class="links">
      <a href="#features" class="text-white">
        Features
      </a>

      <a href="{{ route('login') }}"  class="text-white">
        Login
      </a>
    </div>
    <div class="px-6 md:px-0">
      <a href="#getstarted" class="w-full inline-block btn md:mt-0">Register</a>
    </div>
  </div>
</nav>
</div>
