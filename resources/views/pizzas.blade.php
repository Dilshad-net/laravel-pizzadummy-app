@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
<!-- 
<div>
    <p> {{ $route }} Route Here! </p>
</div> -->
<!-- 
@for($i = 0; $i < count($pizzas); $i++)
    <p> {{ $pizzas[$i]['type'] }} </p> <br>
@endfor -->

@if($query1)
{{ $query1 }} <span> name query here! </span>
@endif

@foreach($pizzas as $pizza)
<div>
    {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} <br>
    @if($loop->first)
    <span> first in the loop! </span> <br>
    @endif
</div>
@endforeach
</div>
@endsection

