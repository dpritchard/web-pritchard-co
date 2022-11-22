<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>{{ $page->getTitle() }}</title>
        <meta property="og:title" content="{{ $page->getTitle() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta name="referrer" content="always">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:site_name" content="{{ $page->siteName }}">

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="flex flex-row py-4 px-4">
            <div class="w-2/12">
                @include('_layouts.partials.nav')
            </div>
            <div class="w-10/12">
                @yield('body')
            </div>
        </div>
    </body>
</html>
