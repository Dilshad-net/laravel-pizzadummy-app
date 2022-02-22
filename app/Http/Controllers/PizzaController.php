<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $query1 = request('name');
    // /pizzas?name=hvschssj

    $pizza = [
        ['type' => 'hawaiian', 'base' => 'cheese crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin crust']
    ];

    return view('pizzas', ['route' => 'pizzas', 'pizzas' => $pizza, 'query1' => $query1]);
    }

    public function show($id){
        // if(isNan($id)){
    //     $error = 'Sorry id should be a number';
    // }
    return view('details', ['id' => $id]);
    }
}
