@extends('layouts.layout')

@section('content')

@foreach($pizzas as $pizza)
<div>
    {{ $pizza->name }} - {{ $pizza->base }} - {{ $pizza->type }} - 
    <ul>
    @foreach($pizza->toppings as $topping)
    <li> {{ $topping }} </li>
    @endforeach
    </ul>
</div>
@endforeach

<div>
    <p class="mssg"> {{ session('mssg') }} </p>
</div>
</div>
@endsection

