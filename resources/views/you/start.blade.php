@extends('layouts.app')

@section('content')
	@include('partials.headers.menu', [
		'color' => 'black',
	])

		<div class="max-w-xl mx-auto px-6 pb-6 ">

				<h1>Hi {{ $user->firstname }}</h1>




				@if(Session::has('status'))
					<div class="shadow-md bg-secondary w-full p-8 mb-8 text-white text-lg">
						{{ Session::get('status') }}

					</div>
				@endif

                <div class="shadow-md border w-full p-8">
                    <h2>How are you today?</h2>

                    <form method="POST" action="{{route('moods.store')}}">

                    {{ csrf_field() }}
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($moods as $mood)

        					<div class="w-1/2 py-4 px-4">

        						<label for="mood_{{$mood->id}}" class="block mb-4">
        							{{$mood->label}}
        						</label>

        						<input type="range" id="mood_{{$mood->id}}" name="moods[{{$mood->id}}]" value="0" min="0" max="100" class="w-full">
        					</div>

        				@endforeach
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-large">
        					{{ __("Submit moods") }} <i data-feather="activity" class="align-middle ml-2"></i>
        				</button>
                        </div>

                    </form>

                </div>



			</form>

		</div>

@endsection
