{{-- estensione del layout (solo il main (parte superiore) è dinamico -> header e footer sono gli stessi per tutte le rotte) --}}
@extends('layouts.layout')

{{-- rendere dinamico il titolo della scheda corrente in base alla pagina in cui si trova l'utente --}}
@section('headTitle', 'Comics')

{{-- contenuto dinamico del main per la pagina HOME --}}
@section('content')
<div id="container-comics">
    <div class="labelComic">
        current series
    </div>
    
    <div class="row-products">
        @foreach ( $products as $key => $product )
        <div class="card">
            <a href="{{ route('singleComic', [ 'id' => $key ]) }}">
                <img src=" {{ $product['thumb'] }} " alt="copertina di {{$product['title']}}" class="card-img">
                <h5>
                    {{ $product['title'] }}
                </h5>
            </a>
        </div>
        @endforeach
    </div>

    <div class="containerBtn">
        <button class="loadMore">
          load more
        </button>
    </div>

</div>

<div class="container-info">
    <div class="row-info">
        <div class="info-icons">
            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="icona digital comics">
            <a href="#">digital comics</a>
        </div>

        <div class="info-icons">
            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="icona merchandise">
            <a href="#">dc merchandise</a>
        </div>

        <div class="info-icons">
            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="icona subscriptions">
            <a href="#">subscription</a>
        </div>

        <div class="info-icons">
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="icona shop locator">
            <a href="#">comic shop locator</a>
        </div>

        <div class="info-icons">
            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="icona power visa" id="visa-icon">
            <a href="#">dc power visa</a>
        </div>
    </div>
</div>
@endsection
