@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

	<div class="bg-white mt-12">
		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<div class="md:flex md:flex-row-reverse md:justify-between md:items-center">
				<span class="status mb-2 md:mb-0 inline-block flex-no-grow">2/3</span>
				<h1> 👊 Good work!</h1>
			</div>
			<div class="lg:w-3/4">
				<p class="text-xl leading-loose">
					Now, this step is a bit tricky, we'd like you to take some time and define what these different areas mean to you. Try to scribble 📝 down a few thoughts about each area.
				</p>


			</div>

			<form method="POST" action="{{route('you.setup', ['step' => 'define_types'])}}">

				@csrf

				@foreach ($mood_types as $type)

					<div class=" py-8 border-b">

						<h2>{{$type->label}}</h2>


						<p class="italic font-grey-light">{{$type->desc}}</p>

						<input type="hidden" name="mood_type_description[{{$type->id}}][id]" value="{{$type->id}}">

						<textarea name="mood_type_description[{{$type->id}}][description]" cols="30" rows="10" class="w-full bg-grey-lightest rounded h-32 border border-grey"></textarea>
					</div>

				@endforeach

				<button type="submit" class="btn btn-large w-full mb-8">
					{{ __("Let's decide how often you'd like to hear from us") }} <i data-feather="arrow-right" class="align-middle mr-2"></i>
				</button>

		</div>
	</div>


@endsection
