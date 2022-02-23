<?php

namespace App\Http\Controllers;

use App\Models\PizzaModel;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        // $query1 = request('name');
        // /pizzas?name=hvschssj

        // $pizzas = PizzaModel::all();
        $pizzas = PizzaModel::orderBy('name', 'desc')->get();

    /* $pizza = [
        ['type' => 'hawaiian', 'base' => 'cheese crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin crust']
    ]; */

    // return view('pizzas', ['route' => 'pizzas', 'pizzas' => $pizza, 'query1' => $query1]);

    return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        // if(isNan($id)){
    //     $error = 'Sorry id should be a number';
    // }

    $pizza = PizzaModel::findOrFail($id);

    return view('pizzas.show', ['id' => $id, 'pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        // $name = request('name');

        $pizza = new PizzaModel();

        $pizza->name = request('name');
        $pizza->base = request('type');
        $pizza->type = request('base');
        $pizza->toppings = request('toppings');
        error_log($pizza);
        // error_log(request('toppings'));
        // return request('toppings');

        $pizza->save();

        return redirect('/pizzas')->with('mssg', 'Thanks for your order!');
    }

    public function destroy($id) {
        $pizza = PizzaModel::findOrFail($id);

        $pizza->delete();

        return redirect('/pizzas');
    }
}
