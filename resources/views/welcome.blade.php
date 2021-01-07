@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif 

        <div class="content">
            <img src="/img/pizza-house.png" alt="pizza house logo">
            <div class="title m-b-md">
                Greg's Pizza House
            </div>
            <p class="mssg">{{ session('mssg') }}</p>
            <button
                style="height: 3rem; width: 8rem; background-color: greenyellow; border: solid greenyellow; border-radius: 1rem;"><a
                    style="text-decoration: none; font-size: 1.3rem;text-decoration: none; color: black;"
                    href="{{ route('pizzas.create') }}">Order</a></button>
        </div>
    </div>
@endsection
