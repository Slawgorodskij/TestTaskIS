@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="container wrapper">
            @foreach($collections as $collection)
                <div class="collection">
                    <div class="collection__item">

                        <p>{{$collection['name']}}</p>

                    </div>
                    @foreach($collection['products'] as $product)

                        <a class="collection__item" href="{{route('product', $product->id)}}">
                            <p>{{$product->name}}</p>
                            <p>{{$product->price}} рублей</p>
                        </a>

                    @endforeach
                </div>

            @endforeach
        </div>
    </main>
@endsection
