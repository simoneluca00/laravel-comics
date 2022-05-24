{{-- estensione del layout (solo il main (parte superiore) è dinamico -> header e footer sono gli stessi per tutte le rotte) --}}
@extends('layouts.layout')

{{-- rendere dinamico il titolo della scheda corrente in base alla pagina in cui si trova l'utente --}}
@section('headTitle', 'Home')

{{-- contenuto dinamico del main per la pagina HOME --}}
@section('content')

<h2 style="color: #fff; padding: 30px 0; text-align: center;">Sono la Pagina Home</h2>

@endsection