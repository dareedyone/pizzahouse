<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
//auth for all the routes instance
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
//    $pizzas = Pizza::all();
        //    $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawalian')->get();
        $pizzas = Pizza::latest()->get();
        $name = request('name');
        return view("pizzas.index", ['pizzas' => $pizzas, 'name' => $name, 'age' => request('age')]);
    }

    public function show($id)
    {
        // $pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete($id);

        return redirect('/pizzas');
    }
}
