@extends('layouts.app')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        

        <div class="wrapper pizza-details col">
            <h1>Order for:  {{$pizza -> name}}</h1>
            <p class="type">Type - {{$pizza -> type}}</p>
            <p class="base">Base - {{$pizza -> base}}</p>
            <br><br>
        <ul>
            @foreach($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
        <form action="{{route('pizzas.destroy', $pizza->id )}}" method='POST'>
         @csrf
         @method('DELETE')
         <button class="btn btn-warning" >Complete Order</button>
        </form>

        </div> 
        <div class="col d-flex">
             <a href="/pizzas"class="back"><- Back to all Pizzas</a>
        </div>


    


    </div>

@endsection

