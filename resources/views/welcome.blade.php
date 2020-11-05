@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    

    <div class="container">
        <div class="text-center">
            <img src="/img/pizza-house.png" alt="pizza house logo">
            <div class="title m-b-md">
                <h1>North's best pizzas</h1>
            </div>
            <p class="mssg">{{session('mssg')}}</p>
            <a href="{{ route('pizzas.create') }}" class="title2" >Order a pizza</a>
        </div>

    
    </div>
</div>
@endsection