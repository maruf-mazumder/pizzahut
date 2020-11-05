@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index" >
<h1>Pizza Orders</h1>
    @foreach($item as $pizza)

        <div class="pizza-item">
            <!-- <span>
                
                Name: {{ $pizza->name}}-   -
                base: {{ $pizza['base']}}-
                type: {{ $pizza['type']}}-
            </span> -->
            <img src="/img/pizza.png" alt="pizza icon">
            <h4> <a href="/pizzas/{{$pizza->id}}">  {{$pizza->name}} </a>  </h4>
        </div>
    @endforeach
</div>
@endsection

