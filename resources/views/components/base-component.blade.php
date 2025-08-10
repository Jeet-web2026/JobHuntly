@props(['title' => '', 'metadescription' => ''])
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
</head>

<body>
    @include('components.essentials.header')
</body>

</html>