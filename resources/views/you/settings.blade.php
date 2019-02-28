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


			@foreach ($settings as $key => $setting)

				<div class="py-8 border-b flex">
					<div class="w-1/4">{{$key}}</div>
					<div class="flex w-3/4 justify-between">
						<div>{{(string) $setting}} </div>
						<div>
							<form action="{{ route('settings.destroy', $key) }}" method="POST">
							    @method('DELETE')
							    @csrf
							    <button>{{__("Reset this setting")}}</button>
							</form>
						</div>
					</div>


                </div>

			@endforeach



		</div>

@endsection
