@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

	<div class="bg-white mt-12">
		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<div class="md:flex md:flex-row-reverse md:justify-between md:items-center">
				<span class="status mb-2 md:mb-0 inline-block flex-no-grow">2/3</span>
				<h1> 👊 Let's figure out what is important for you.</h1>
			</div>
			<div class="lg:w-3/4">
				<p class="text-xl leading-loose">
					Now it's time to try and define your desired state for each mood. The values you decide here will be used as a benchmark as you start to track 🎯 your mood over time.
				</p>
				<p>
					Pulling the slider to the right indicates imporance for you.
				</p>

			</div>

			<form method="POST" action="{{route('you.setup', ['step' => 2])}}">

				{{ csrf_field() }}

				@foreach ($mood_types as $type)

					<div class=" py-8 border-b">

						<label for="mood_type_{{$type->id}}">
							{{$type->label}}
						</label>

						<input type="hidden" name="mood_types[{{$type->id}}][id]" value="{{$type->id}}">

						<input type="range" name="mood_types[{{$type->id}}][target]" value="0" min="0" max="100" class="w-full">

						<textarea name="mood_types[{{$type->id}}][description]" cols="30" rows="10" class="w-full bg-grey-lightest rounded border-0"></textarea>
					</div>

				@endforeach

				<button type="submit" class="btn btn-large w-full mb-8">
					{{ __("Let's decide how often you'd like to hear from us") }} <i data-feather="arrow-right" class="align-middle mr-2"></i>
				</button>

		</div>
	</div>


@endsection
