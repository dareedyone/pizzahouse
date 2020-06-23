@extends('layouts.app')


@section('content')
  <div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
  <label for="name">Your name:</label>
  <input type="text" id="name" name="name" >

  <label for="type">Choose pizza type:</label>
 <select name="type" id="type">
 <option value="margarita">Margarita</option>
 <option value="hawalian">Hawalian</option>
 <option value="veg supreme">Veg supreme</option>
 <option value="volcano">volcano</option>
 </select>

 <label for="base">Choose pizza base:</label>
 <select name="base" id="base">
 <option value="cheesy crust">Cheesy crust</option>
 <option value="garlic crust">Garlic crust</option>
 <option value="thin & cripsy">Thin & cripsy</option>
 <option value="thick">Thick</option>
 </select>

 <fieldset> 
     <label>Extra toppings:</label>
     <input id="mushrooms" type="checkbox" name="toppings[]" value="mushrooms">
     <label for="mushrooms">Mushrooms</label>
     <input id="peppers" type="checkbox" name="toppings[]" value="peppers">
     <label for="peppers">Peppers</label>
     <input id="garlic" type="checkbox" name="toppings[]" value="garlic">
     <label for="garlic">Garlic</label>
     <input id="olives" type="checkbox" name="toppings[]" value="olives">
     <label for="olives">Olives</label>
     
     
 </fieldset>

 <input type="submit" value="order pizza">
  </form>
  </div>     
@endsection
   
