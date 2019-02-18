@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

		<div class="max-w-xl mx-auto px-6 pb-6 ">

				<h1>⚙️ Your settings</h1>
			<p class="lg:w-3/4 text-xl leading-loose">
                Tinker around all you want.
            </p>


					@foreach ($settings as $label => $setting)

						<div class="py-8 border-b">
                            {{$label}} = {{ $setting }}
                        </div>

					@endforeach


			</form>

		</div>

@endsection
