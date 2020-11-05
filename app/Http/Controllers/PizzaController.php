<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;



class PizzaController extends Controller
{
   public function index(){
  
    $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaian')->get();

    

    return view('pizzas.index',['item'=>$pizzas]);

    }

    public function show($id){

        $pizza = Pizza::findorFail($id);

        return view('pizzas.show',['pizza'=>$pizza]);

    }

    public function create(){
        return view('pizzas.create');
    }
    public function store(){

        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->base = request('base');
        $pizza->type = request('type');
        $pizza->toppings = request('toppings');


        $pizza->save();
        
        // error_log($pizza);

        return redirect('/')->with('mssg','Thank you for ordering..');
    }

    public function destroy($id){
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
