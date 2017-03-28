<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SiGEO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/header-bar.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/common.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/login/login.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/dashboard/dashboard.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/css/room/details.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<body>
    @yield('content')

    <script src="{{ env('APP_URL') }}/js/init-components.js"></script>
</body>
</html>