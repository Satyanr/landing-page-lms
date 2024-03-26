<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LMS - BBPPMPVBMTI</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/bootstrap/css/bootstrap.min.css') }}">

    <style>
        /* HTML: <div class="loader"></div> */
        .loader {
            width: 50px;
            aspect-ratio: 1;
            display: grid;
        }

        .loader::before,
        .loader::after {
            content: "";
            grid-area: 1/1;
            --c: no-repeat radial-gradient(farthest-side, #25b09b 92%, #0000);
            background:
                var(--c) 50% 0,
                var(--c) 50% 100%,
                var(--c) 100% 50%,
                var(--c) 0 50%;
            background-size: 12px 12px;
            animation: l12 1s infinite;
        }

        .loader::before {
            margin: 4px;
            filter: hue-rotate(45deg);
            background-size: 8px 8px;
            animation-timing-function: linear
        }

        @keyframes l12 {
            100% {
                transform: rotate(.5turn)
            }
        }

        html,
        body {
            height: 100vh;
            margin: 0;
            background-color: #173176;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        :root::-webkit-scrollbar {
            display: none;
        }

        :root {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .content {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
            margin-top: auto;
            background-color: #0168fa;
        }

        .navbar-collapse {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }
    </style>

    @livewireStyles
    @stack('css')
</head>

<body>

    <x-nav-head />

    <div class="content mt-5 pt-2">
        @yield('content')
    </div>

    <x-footer />

    <script src="{{ asset('Assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
    @stack('js')
</body>

</html>
