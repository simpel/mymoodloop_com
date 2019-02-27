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
			<p class="lg:w-3/4 text-xl leading-loose">Begin by picking the areas<span class="text-sm text-cta">(1)</span> that you'd like to track, later on we'll set your desired state<span class="text-sm text-cta">(2)</span> and configure how often you'd like to hear from us<span class="text-sm text-cta">(3)</span>.</p>



			@if ($errors->any())
			   	<div class="shadow-md bg-secondary w-full p-8 mb-8 text-white text-lg">

			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<form method="POST" action="{{route('you.setup', ['step' => 1])}}">
				{{ csrf_field() }}
				<div class="flex flex-wrap">

					@foreach ($mood_types as $type)

						<div class="checkbox mr-8 mb-8">
							<input type="checkbox" name="mood_types[]" value="{{ $type->id }}" id="toggle_{{ $type->id }}"/>
							<label for="toggle_{{ $type->id }}" class="flex items-center">

								<i data-feather="square" class="on"></i>
								<i data-feather="check-square" class="off"></i>
								<span>{{ $type->label }}</span>
							</label>


						</div>

					@endforeach
				</div>

				<button type="submit" class="btn btn-large w-full mb-8">
					{{ __("Let's create a desired state for you") }} <i data-feather="arrow-right" class="align-middle mr-2"></i>
				</button>

			</form>

		</div>

@endsection
