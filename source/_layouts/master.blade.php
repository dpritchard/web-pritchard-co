<!doctype html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta property="og:locale" content="en_US">
        <title>{{ $page->getTitle() }}</title>
        <meta property="og:title" content="{{ $page->getTitle() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:site_name" content="{{ $page->siteName }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

<body class="py-5">
    <div class="container page-content">
        <div class="row">
            <aside class="col-md-3 col-12">
                @include('_layouts.partials.nav')
            </aside>
            <div class="col-md">
                @yield('body')
            </div>
            
        </div>
    </div>
</body>
</html>
