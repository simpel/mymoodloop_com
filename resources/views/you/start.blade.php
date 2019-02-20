@extends('layouts.app')

@section('scripts')
	<script src="{{ mix('js/you.js') }}"></script>
@endsection

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

                <div class="shadow-md border w-full p-8 my-8">
                    <h2>Where has your focus been lately?</h2>

                    <form method="POST" action="{{route('moods.store')}}">

	                    {{ csrf_field() }}
	                    <div class="flex flex-wrap -mx-4">
	                        @foreach ($charts as $chart)

	        					<div class="w-1/2 p-4">

	        						<label for="mood_{{$chart["type"]->id}}" class="block mb-4">
	        							{{$chart["type"]->label}}
	        						</label>

	        						<input type="range" id="type_{{$chart["type"]->id}}" name="types[{{$chart["type"]->id}}]" value="0" min="0" max="100" class="w-full">
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

				<div class="flex flex-wrap -mx-4">
					@foreach ($charts as $chart)

						<div class="w-1/2 p-4">
							<div class="shadow-md my-4 ">

								<h2 class="text-md p-8">
									{{$chart['type']->label}}
								</h2>

								<canvas id="chart__id_{{$chart['type']->id}}" class="w-full h-32">

								</canvas>

								<script type="text/javascript">
									var ctx = document.getElementById("chart__id_{{$chart['type']->id}}").getContext('2d');

									var gradientStroke = ctx.createLinearGradient(0, 0, 0, 200);
									gradientStroke.addColorStop(0, 'rgba(68, 218, 218, 0.3)');
									gradientStroke.addColorStop(1, '#FFFFFF');


									var myChart = new Chart(ctx, {
										type: 'line',
										data: {
											labels: {{ $chart['labels'] }},
											dataIndex: 30,
											datasets: [{
												data: {{ $chart['data'] }},
												label: "",
									            borderColor: "#44DADA",
												fill: true,
												backgroundColor: gradientStroke,
									            pointBorderWidth: 10,
									            pointHoverRadius: 10,
									            pointHoverBorderWidth: 1,
									            pointRadius: 3,

											}
										]},
										options: {
											responsive: true,
									        legend: {
									            display: false
									        },
											horizontalLine: [{
											 	y: {{$chart['target']}},
											 	style: "#4CF298",
											 	text: "Your target state for {{$chart['type']->label}} is {{$chart['target']}}"
   											}],
									        scales: {
									            xAxes: [{
													display:false,
									            }],
									            yAxes: [{
									               display:false,
													ticks: {
														min: 0,
													  	max: 100,
													},
									            }]
									        },
											tooltips: {
												backgroundColor: "#FFFFFF",
												xPadding: 10,
												yPadding: 10,
												cornerRadius: 0,
												displayColors: false,
												titleFontColor: "#000000",
												titleFontSize: 15,
												titleFontFamily: "'Inter UI', system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif",
												bodyFontColor: "#000000",
												bodyFontSize: 13,
												bodyFontFamily: "'Inter UI', system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif"
											}
									    }
									});
								</script>


							</div>


						</div>

					@endforeach
				</div>

		</div>

@endsection
