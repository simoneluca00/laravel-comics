{{-- estensione del layout (solo il main (parte superiore) è dinamico -> header e footer sono gli stessi per tutte le rotte) --}}
@extends('layouts.layout')

{{-- rendere dinamico il titolo della scheda corrente in base alla pagina in cui si trova l'utente --}}
@section('headTitle', 'Single Comic')

{{-- contenuto dinamico del main per la pagina HOME --}}
@section('content')

<div id="container-comic-global">
    <div class="bg-blue p-relative">
        <div class="comic-cover p-absolute">
            <p class="comic-type text-uppercase text-small p-absolute">{{ $singoloProdotto['type'] }}</p>
            <img src="{{ $singoloProdotto['thumb'] }}" alt="cover di {{ $singoloProdotto['title'] }}">
            <p class="gallery-label text-uppercase text-center text-small p-absolute">view gallery</p>
        </div>
    </div>

    <div class="row-comic-global">
        <div class="comic-global d-flex">
            <div class="description-text">
                <h2 class="text-uppercase">
                    {{ $singoloProdotto['title'] }}
                </h2>

                <div class="container-price bg-green d-flex">
                    <div class="price-status d-flex">

                        <div class="comic-price">
                            <span class="text-green">U.S. Price:</span>
                            <span>
                                {{ $singoloProdotto['price'] }}
                            </span>
                        </div>

                        <div class="comic-status">
                            <span class="text-green">AVAILABLE</span>
                        </div>
                    </div>

                    <div class="checkAvailability d-flex">
                        Check Availability
                        <span class="caret-down">&#9660;</span>
                    </div>
                </div>

                <p class="comic-description">
                    {{ $singoloProdotto['description'] }}
                </p>

            </div>
            <div class="adv">
                <h2 class="text-uppercase">advertisement</h2>
                <img src="{{ asset('../images/adv.jpg') }}" alt="advertisement">
            </div>
        </div>
    </div>

    <div id="container-comic-specs">
        <div class="row-comic-specs">

            <div class="comic-talent">
                <h2>Talent</h2>

                <div class="art-by">
                    <div class="label-talent">
                        <span>Art by:</span>
                    </div>

                    <p>
                        @foreach ( $singoloProdotto['artists'] as $artist)
                        {{$artist}}
                        <span class="comma">,</span>

                        {{-- non stampare la virgola all'ultimo elemento --}}
                        @if ($loop->last)
                        {{$artist}}
                        @endif

                        @endforeach
                    </p> p-absolute

                </div>


                <div class="written-by">
                    <div class="label-talent">
                        <span>Written by:</span>
                    </div>

                    <p>
                        @foreach ( $singoloProdotto['writers'] as $writer)
                        {{$writer}}
                        <span class="comma">,</span>

                        {{-- non stampare la virgola all'ultimo elemento --}}
                        @if ($loop->last)
                        {{$writer}}
                        @endif

                        @endforeach
                    </p>
                </div>
            </div>

            <div class="comic-specs">
                <h2>Specs</h2>

                <div class="sub-specs">
                    <p>Series:</p>
                    <p class="comic-series text-uppercase text-small">
                        {{$singoloProdotto['series']}}
                    </p>
                </div>

                <div class="sub-specs">
                    <p>U.S. Price:</p>
                    <p class="text-small">
                        {{ $singoloProdotto['price'] }}
                    </p>
                </div>

                <div class="sub-specs">
                    <p>On Sale Date:</p>
                    <p class="text-small">
                        {{-- trasformare il formato della data da "2018-10-02" a "2 October 2018" --}}
                        {{ date( 'j \\ F Y', strtotime($singoloProdotto['sale_date'])) }}
                    </p>
                </div>

            </div>

        </div>

    </div>

    <div class="info-options">
        <div class="row-info-options">
            <div class="single-info-option">
                <span class="text-uppercase">digital comics</span>
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="icona digital comics">
            </div>
            <div class="single-info-option">
                <span class="text-uppercase">shop dc</span>
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="icona digital comics">
            </div>
            <div class="single-info-option">
                <span class="text-uppercase">comic shop locator</span>
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="icona digital comics">
            </div>
            <div class="single-info-option">
                <span class="text-uppercase">subscriptions</span>
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="icona digital comics">
            </div>
        </div>
    </div>

</div>

@endsection
