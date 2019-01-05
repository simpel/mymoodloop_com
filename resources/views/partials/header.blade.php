
<div class="bg-primary z-50 fixed w-full">
<nav class="flex items-center justify-between flex-wrap py-6 w-full max-w-xl mx-auto">

  <div class="flex items-center flex-no-shrink text-white mr-6 pl-6">
    <span class="font-logo text-4xl lg:text-5xl tracking-tight">{{ config('app.name', 'Laravel') }}</span>
  </div>
  <div class="block lg:hidden pr-6">
    <button class="flex items-center px-3 py-2 border rounded text-primary-lighter border-primary-light hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:justify-end lg:w-auto">
    <div class="">
      <a href="#features" class="block lg:mr-6 lg:inline-block text-primary-lightest hover:text-white p-6 lg:p-0">
        Features
      </a>

      <a href="{{ route('login') }}" class="block  lg:mr-6 lg:inline-block text-primary-lightest hover:text-white p-6 lg:p-0">
        Sign in
      </a>
    </div>
    <div class="px-6 lg:px-0">
      <a href="#getstarted" class="w-full inline-block btn lg:mt-0">Get Started</a>
    </div>
  </div>
</nav>
</div>
