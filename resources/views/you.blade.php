@extends('layouts.app')

@section('content')
		@include('partials.headers.loggedin', [
			'user' => $user,
		])

	<div class="bg-white mt-12">
		<div class="max-w-xl mx-auto px-6 pb-6 ">
			<span class="bg-secondary rounded text-sm font-semibold text-white px-4 py-2">1/3</span>
			<h1>👋 Hello {{ $user->firstname}}, let's get you started!</h1>
			<p class="lg:w-3/4 text-xl leading-loose">Begin by picking the areas<span class="text-sm text-secondary">(1)</span> that you'd like to track, later on we'll set your desired state<span class="text-sm text-secondary">(2)</span> and configure how often you'd like to here from us<span class="text-sm text-secondary">(3)</span>.</p>

			<div class="flex flex-wrap -m-4 lg:w-3/4">

				@foreach ($types as $type)

					<div class="p-4 m-4 flex items-center content-center h-24 border" style="border-color: {{ $type->color }}">
						<div>
							<span>{{ $type->label }}</span>

						</div>

					</div>

				@endforeach

			</div>

		</div>
	</div>


@endsection
