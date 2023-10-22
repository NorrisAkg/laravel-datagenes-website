<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> @yield('page_name') | DATAGENES AFRICA</title>

    @yield('meta')

    <meta name="author" content="{{ config('app.author') }}">
    <meta name="keywords" content="{{ config('app.keywords') }}">
    <meta name="description" content="{{ config('app.description') }}" />
    <meta property="og:type" name="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:url" name="og:url" content="{{ request()->url() }}" />
    <meta property="og:caption" name="og:caption" content="{{ config('app.url') }}" />
    <meta property="og:description" name="og:description" content="{{ config('app.description') }}">
    <meta property="og:image" name="og:image" content="{{ asset('images/ky-logo1.png') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/ky-logo1.png') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <!--Styles for RTL-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body class="clear-marge">

    @yield('top-bar')

    @include('layouts._partials.header')
    <!-- ... End Header -->

    <div class="content-wrapper">

        @yield('content')

    </div>

    @include('layouts._partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
