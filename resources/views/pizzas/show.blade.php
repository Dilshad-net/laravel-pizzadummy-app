@extends('layouts.layout')

@section('content')

<div> pizza id = {{ $id }} </div>

<div class="wrapper pizza-work">
    <h1>Ordered Pizza name: {{ $pizza->name }}</h1>
    <p class="type"> Pizza type: {{ $pizza->type }} </p>
    <p class="base"> Base: {{ $pizza->base }} </p>
    <p class="toppings">
        <ul>
            @foreach($pizza->toppings as $topping)
                <li> {{ $topping }} </li>
            @endforeach
        </ul>
    </p>
    <form action="/pizzas/{{ $pizza->id }}" method="post">
        @csrf
        @method('DELETE')
        <button> Complete Order </button>
    </form>
</div>
<a href="/pizzas" class="back-link"> Back to Pizzas </a>

@endsection
