@extends('layouts.app')

@section('content')


    @include('partials.headers.menu', [
		'color' => 'black',
	])

		<div class="max-w-xl mx-auto px-6 pb-6 ">



            <h2 class="text-5xl text-center">
                🤦‍♂️🤷‍♀️🤕 <br>Ouch! Something went wrong and it was our fault.
            </h2>
            <p class="text-grey text-sm text-center">
                This is what we nerds call a <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#500" class="text-grey">500 Internal Server Error</a>. It basically means our server did some funky stuff but you should be OK by just <a href="{{ route('start') }}">returning to the homepage</a>. Sorry. Promise. 🤞🏻
            </p>


            @if(app()->bound('sentry') && app('sentry')->getLastEventId())

                <script src="https://browser.sentry-cdn.com/4.6.3/bundle.min.js" crossorigin="anonymous"></script>
                <script>
                    Sentry.init({ dsn: 'https://c09298e2d2c04e25ba586f01f267adca@sentry.io/1402267' });
                    Sentry.showReportDialog({ eventId: '{{app('sentry')->getLastEventId()}}' });
                </script>
            @endif
		</div>


@endsection
