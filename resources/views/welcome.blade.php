@extends('layouts.layout')
        <div class="flex-center position-ref full-height">
          
        @section('content')
            <div class="content">
            <img style="width: 100px; height: 100px" src="/img/architectural-design-architecture-building-business-443383.jpg" alt="arch">
                <div class="title m-b-md">
                    Domino pizzas
                </div>
            <p class="mssg">{{ session('mssg')}}</p>
            <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
               
            </div>
        </div>
  @endsection
