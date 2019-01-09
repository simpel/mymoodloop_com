@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

	<div class="bg-white mt-12">
		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<div class="md:flex md:flex-row-reverse md:justify-between md:items-center">
				<span class="status mb-2 md:mb-0 inline-block flex-no-grow">1/3</span>
				<h1>👋 Hello {{ $user->firstname}}, let's get you started!</h1>
			</div>

			<p class="lg:w-3/4 text-xl leading-loose">Begin by picking the areas<span class="text-sm text-secondary">(1)</span> that you'd like to track, later on we'll set your desired state<span class="text-sm text-secondary">(2)</span> and configure how often you'd like to here from us<span class="text-sm text-secondary">(3)</span>.</p>

			<div class="flex flex-wrap -m-2 lg:w-3/4">
				<form method="POST" action="{{route('setup')}}"></form>
				{{ csrf_field() }}
				@foreach ($types as $type)

	  						<input type="checkbox" checked="checked">

					<div class="p-4 m-2 flex items-center content-center rounded-full" style="background-color: {{ $type->color }}">
						<label class="checkbox">{{ $type->label }}
	  						<input type="checkbox" checked="checked">
	 	 					<span class="checkmark"></span>
						</label>
					</div>

				@endforeach

			</form>

			</div>

		</div>
	</div>


@endsection
