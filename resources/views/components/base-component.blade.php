@props(['title' => '', 'metadescription' => '', 'remixicon' => '', 'jquery' => '', 'slick' => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="CSRF_TOKEN" content="{{  csrf_token() }}">
    <meta name="description" content="Find the best jobs and opportunities for developers at {{ config('app.name') }}.">
    <meta name="description" content="{{ $title ? $title : 'Best Jobs Platform for Developers' }}">
    @if($metadescription)
    <meta name="description" content="{{ $metadescription }}">
    @endif
    <meta name="keywords" content="jobs, developers, opportunities, {{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <link rel="icon" href="{{ asset('assets/images/logo_.png') }}" type="image/png">
    <title>
        {{ config('app.name') }}
        @if($title)
        - {{ $title }}
        @else
        - Best Jobs Platform for Developers
        @endif
    </title>
    {{-- tailwind css cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{--figtree font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    {{-- Base css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    {{-- Remixicon cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--slick css--}}
    @if($slick)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif
</head>

<body>
    @include('components.essentials.header')
    {{ $slot }}
    @include('components.essentials.footer')
    @if($jquery)
    {{-- jquery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- base js --}}
    <script src="{{ asset('assets/js/base.js') }}"></script>
    @endif
    @if($slick)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endif
</body>

</html>