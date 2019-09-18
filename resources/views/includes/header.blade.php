<!--

   ___    ____    ___    ____   ___   _   _      _      _               __  __   ___   _  __  _____        ____    ___    __  __
  / _ \  |  _ \  |_ _|  / ___| |_ _| | \ | |    / \    | |             |  \/  | |_ _| | |/ / | ____|      / ___|  / _ \  |  \/  |
 | | | | | |_) |  | |  | |  _   | |  |  \| |   / _ \   | |      _____  | |\/| |  | |  | ' /  |  _|       | |     | | | | | |\/| |
 | |_| | |  _ <   | |  | |_| |  | |  | |\  |  / ___ \  | |___  |_____| | |  | |  | |  | . \  | |___   _  | |___  | |_| | | |  | |
  \___/  |_| \_\ |___|  \____| |___| |_| \_| /_/   \_\ |_____|         |_|  |_| |___| |_|\_\ |_____| (_)  \____|  \___/  |_|  |_|


-->
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="meta text">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{ config('app.name', 'Real-Shit') }} | title</title>
    <script src="https://kit.fontawesome.com/8a02c36757.js"></script>
    <script src="{{ asset('js/fontawesomepro.js') }}" defer></script>
</head>
<body class="body">
@include('includes/navbar')
@include('includes/search')
@yield('content')
@include('includes/footer')
</body>
</html>