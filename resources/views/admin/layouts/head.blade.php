<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ config('app.name', 'Hospital_Digit') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta name="author" content="DA Digit All">
    <meta name="author" content="Anselme Victor AKPOVI">
    <meta name="author" content="Eden AHOUSSOU">
    <meta name="author" content="Banel Fajardy SEMASSOUSSI">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hospital_Digit | Plateforme SaaS de Digitalisation des Services de Santé">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('hospital/images/logo.png') }}">
    <!-- Page Title  -->
    <title>{{ $title ?? '' }} | {{ __('Plateforme SaaS de Digitalisation des Services de Santé') }}</title>




    <!-- StyleSheets  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('hospital/assets/css/dashlite.css?ver=3.2.2') }}">
    <link rel="stylesheet" href="{{ asset('hospital/assets/css/theme.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />


    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.24/dist/css/uikit.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.6/dist/css/uikit.min.css" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/choices.js/1.1.6/styles/css/choices.css"
        integrity="sha512-0bYNWBaGnMqLCuum81OA7oZo7/pIEjWb/ad3vdKuKlgTZXalLMDkRT3P4Z262/aQBnNuznUg3WpTb5Vgu11abw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>


    @livewireStyles

</head>
