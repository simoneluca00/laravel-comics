{{-- estensione del layout (solo il main (parte superiore) è dinamico -> header e footer sono gli stessi per tutte le rotte) --}}
@extends('layouts.layout')

{{-- rendere dinamico il titolo della scheda corrente in base alla pagina in cui si trova l'utente --}}
@section('headTitle', 'Home')

{{-- contenuto dinamico del main per la pagina HOME --}}
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
