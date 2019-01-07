


<div class="z-50 w-full">
<nav class="flex items-center justify-between flex-wrap py-6 w-full max-w-xl mx-auto">

  <div class="flex items-center flex-no-shrink text-black mr-6 pl-6">
		<a href="{{ route('you') }}" class="logo">
    		{{ config('app.logo', 'Laravel') }}
		</a>
  </div>
  <div class="block md:hidden pr-6">
    <button id="menuBtn" class="flex items-center px-3 py-2 border rounded text-black border-black hover:text-primary-darker hover:border-primary-darker">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div id="menu" class="w-full block flex-grow md:flex md:items-center md:justify-between md:w-auto self-center  items-center">
	  <div class="links text-black">
  		<a href="{{ route('you') }}" class="{{ (route('you') == URL::current()) ? 'active' : '' }}">
  	    	Moodstats
  	  	</a>
  	</div>

	<div class="links text-black">
		<a href="{{ route('logout') }}">
	    	<i data-feather="log-out" class="align-middle"></i> Logout
	  	</a>

		<a href="{{ route('you.profile') }}"  class="{{ (route('you.profile') == URL::current()) ? 'active' : '' }}">
			<i data-feather="user" class="align-middle"></i> {{ $user->firstname }} {{ $user->lastname }}
	  	</a>
	</div>
  </div>
</nav>
</div>
