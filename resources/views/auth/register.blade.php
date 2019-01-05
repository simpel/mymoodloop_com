@extends('layouts.app')

@section('content')
<div class="flex items-center px-6 md:px-0">
    <div class="w-full max-w-md md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-teal-darker bg-teal p-3 rounded-t">
                Register
            </div>
            <div class="bg-white p-3 rounded-b">
                @include('partials.register')
            </div>
        </div>
    </div>
</div>
@endsection
