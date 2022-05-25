<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- icona sito (favicon) --}}
    <link rel="shortcut icon" href="{{asset('dc-logo.ico')}}" type="image/x-icon">
    {{-- CDN FONT AWESOME 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- APP.CSS --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>DC Comics: @yield('headTitle')</title>
</head>

<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>

        <section id="hero">

        </section>

        <div id="main-container">
            @yield('content')
        </div>

    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>
