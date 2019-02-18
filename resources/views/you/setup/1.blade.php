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

			<form method="POST" action="{{route('you.setup', ['step' => 1])}}">
				{{ csrf_field() }}
				<div class="flex flex-wrap">

					@foreach ($moods as $mood)

						<div class="checkbox mr-8 mb-8">
							<input type="checkbox" checked="checked" name="moods[]" value="{{ $mood->id }}" id="toggle_{{ $mood->id }}"/>
							<label for="toggle_{{ $mood->id }}" class="flex items-center">

								<i data-feather="square" class="on"></i>
								<i data-feather="check-square" class="off"></i>
								<span>{{ $mood->label }}</span>
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
