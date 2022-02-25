
@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1> Order a New Pizza </h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Ur Name : </label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Type : </label>
        <select name="type" id="type">
            <option value="margerite">Margerita</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="volcano">Volcano</option>
            <option value="veg supreme">Veg Supreme</option>
        </select>
        <label for="base">Choose Base</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheese Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin crust">Thin Crust</option>
            <option value="thick crust">Thick Crust</option>
        </select>
        <fieldset>
            <label> Extra Toppings : </label>
            <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms"> Mushrooms <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="jelepino"> Jelepino <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="peppers"> Peppers <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="olives"> Olives <br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection
