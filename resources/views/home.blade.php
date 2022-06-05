@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="container wrapper">

            <div class="collection">
                @foreach($collections as $collection)
                    @if(!is_object($collection))
                        <div class="collection__item">

                            <p>{{$collection}}</p>

                        </div>
                    @else
                        <a class="collection__item" href="{{route('product', $collection->id)}}">
                            <p>{{$collection->name}}</p>
                            <p>{{$collection->price}} рублей</p>
                        </a>
                    @endif
                @endforeach
            </div>


        </div>
    </main>
@endsection
