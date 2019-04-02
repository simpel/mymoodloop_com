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
					Now, this step is a bit tricky, we want you to choose traits within each area where you want to see a change 📈. Later on when you start to track your progress it's these traits you should focus on.
				</p>


			</div>

			<form method="POST" action="{{route('you.setup', ['step' => 'define_traits'])}}">

				@csrf

				@foreach ($mood_types as $type)

					<div class="p-8 my-8 shadow-lg">

						<h2>{{$type->label}}</h2>


						<div class="flex flex-wrap">
							@foreach ($type->traits as $trait)
								<div class="checkbox mr-8 mb-8">
									<input type="checkbox" name="mood_traits[]" value="{{ $trait->id }}" id="toggle_{{ $trait->id }}"/>
									<label for="toggle_{{ $trait->id }}" class="flex items-center">

										<i data-feather="square" class="on"></i>
										<i data-feather="check-square" class="off"></i>
										<span>{{ $trait->label }}</span>
									</label>
								</div>
							@endforeach
						</div>


					</div>

				@endforeach

				<button type="submit" class="btn btn-large btn-shadow w-full mb-8">
					{{ __("Let's decide how often you'd like to hear from us") }} <i data-feather="arrow-right" class="align-middle mr-2"></i>
				</button>

		</div>
	</div>


@endsection
