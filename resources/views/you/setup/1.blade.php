@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<div class="md:flex md:flex-row-reverse md:justify-between md:items-center">
				<span class="status mb-2 md:mb-0 inline-block flex-no-grow">1/3</span>
				<h1>👋 Hello {{ $user->firstname}}, let's get you started!</h1>
			</div>

			<p class="lg:w-3/4 text-xl leading-loose">Begin by picking the areas<span class="text-sm text-secondary">(1)</span> that you'd like to track, later on we'll set your desired state<span class="text-sm text-secondary">(2)</span> and configure how often you'd like to here from us<span class="text-sm text-secondary">(3)</span>.</p>

			<div class="flex flex-wrap lg:w-3/4">
				<form method="POST" action="{{route('setup')}}"></form>
				{{ csrf_field() }}
				@foreach ($types as $type)

				<div class="flex justify-between content-center w-full my-4">
					<div>
						<label  for="toggle_{{ $type->id }}">
							{{ $type->label }}
						</label>
					</div>
					<div class="toggle">
						<input type="checkbox" checked="checked" id="toggle_{{ $type->id }}"/>
					</div>


				</div>



				@endforeach


				<button type="submit" class="btn btn-large w-full mb-8">
					{{ __("Let's continue") }} <i data-feather="arrow-right" class="align-middle mr-2"></i>
				</button>

			</form>

			</div>

		</div>



@endsection
