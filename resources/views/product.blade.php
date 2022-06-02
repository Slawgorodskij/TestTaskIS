@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="container wrapper">

            <div class="product">
                <p>Название коллекции: {{$collection->name}}</p>
                <p>Название товара: {{$product->name}}</p>
                <p>Стоимость: {{$product->price}} рублей</p>
            </div>

        </div>
    </main>
@endsection
