@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

	<div class="bg-white mt-12">
		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<div class="md:flex md:flex-row-reverse md:justify-between md:items-center">
				<span class="status mb-2 md:mb-0 inline-block flex-no-grow">3/3</span>
				<h1>👍 Nice one! That was the hard part.</h1>
			</div>
			<div class="lg:w-3/4">
				<p class="text-xl leading-loose">
					We're basically done now, just one last thing. How often would you like to track your mood? We'll remind you as often as you'd like.
				</p>
			</div>

			<form method="POST" action="{{route('you.setup', ['step' => 'set_periodicity'])}}">

				{{ csrf_field() }}

				<div class="flex flex-wrap">
					<div class="checkbox mr-8 mb-8">
						<input type="radio" class="checkbox" name="occurance" value="0" id="radio_0"/>
						<label for="radio_0" class="flex items-center">
							<i data-feather="square" class="on"></i>
							<i data-feather="check-square" class="off"></i>
							<span>{{ __("Daily") }}</span>
						</label>
					</div>
					<div class="checkbox mr-8 mb-8">
						<input type="radio" class="checkbox" checked="checked" name="occurance" value="1" id="radio_1"/>
						<label for="radio_1" class="flex items-center">
							<i data-feather="square" class="on"></i>
							<i data-feather="check-square" class="off"></i>
							<span>{{ __("Weekly") }}</span>
						</label>
					</div>

					<div class="checkbox mr-8 mb-8">
						<input type="radio" class="checkbox" name="occurance" value="2" id="radio_2"/>
						<label for="radio_2" class="flex items-center">
							<i data-feather="square" class="on"></i>
							<i data-feather="check-square" class="off"></i>
							<span>{{ __("Monthly") }}</span>
						</label>
					</div>
				</div>

				<button type="submit" class="btn btn-large w-full mb-8">
					{{ __("We´re done!") }} <i data-feather="award" class="align-middle mr-2"></i>
				</button>

		</div>
	</div>


@endsection
