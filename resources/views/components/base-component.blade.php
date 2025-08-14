@props(['title' => '', 'metadescription' => '', 'remixicon' => '', 'jquery' => '', 'slick' => ''])
<x-MainComponent>
    @section('meta-section')
    @if($metadescription)
    <meta name="description" content="{{ $metadescription }}">
    @endif
    <meta name="description" content="{{ $title ? $title : 'Best Jobs Platform for Developers' }}">
    @endsection
    
    @section('title-section')
    <title>
        {{ config('app.name') }}
        @if($title)
        - {{ $title }}
        @else
        - Best Jobs Platform for Developers
        @endif
    </title>
    @endsection
    
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
</x-MainComponent>