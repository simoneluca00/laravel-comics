@extends('layouts.layout')

@section('headTitle', 'Home')

@section('content')
<div id="container-comics">
    <div class="labelComic">
        current series
    </div>
    
    <div class="row-products">
        @foreach ( $comics as $product )
        <div class="card">
            <img src=" {{ $product['thumb'] }} " alt="copertina di {{$product['title']}}" class="card-img">
            <h5>
                {{ $product['title'] }}
            </h5>
        </div>
        @endforeach
    </div>

    <div class="containerBtn">
        <button class="loadMore">
          load more
        </button>
    </div>

</div>
@endsection
