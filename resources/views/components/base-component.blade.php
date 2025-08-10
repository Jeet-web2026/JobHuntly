@props(['title' => '', 'metadescription' => '', 'remixicon' => ''])
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
</head>

<body>
    @include('components.essentials.header')
    {{ $slot }}
    @include('components.essentials.footer')
</body>

</html>