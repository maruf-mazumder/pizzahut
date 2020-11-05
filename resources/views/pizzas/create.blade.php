@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name : </label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type :</label>
        <select name="type" id="type">
            <option value="hawaian">Hawaian</option>
            <option value="volcano">Volcano</option>
            <option value="margarita">margarita</option>
            <option value="ver supreme">ver supreme</option>
        </select>
        <label for="base">Choose pizza base :</label>
        <select name="base" id="base">
            <option value="garlic crust">garlic crust</option>
            <option value="cheesy crust">cheesy crust</option>
            <option value="thin and crispy">thin and crispy</option>
            <option value="Thick">Thick</option>
        </select>
        <fieldset>
            <input type="checkbox"name="toppings[]"value="Mushroom">Mushroom <br>
            <input type="checkbox"name="toppings[]"value="Garlic">Garlic <br>
            <input type="checkbox"name="toppings[]"value="Peppers">Peppers <br>
            <input type="checkbox"name="toppings[]"value="Olives">Olives <br>
        </fieldset>
        <input type="submit" value="Order Pizza" >
    </form>
</div>
@endsection

