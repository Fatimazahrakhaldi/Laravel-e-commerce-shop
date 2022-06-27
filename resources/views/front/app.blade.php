<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-commerce UI Kit and web templates to design shopping websites on   Sketch, Figma">

    <meta name="keywords"
        content="design system, UIkit, eCommerce, online shop, components, e-commerce, Sketch and Figma, ecommerce web design">

    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('front.partials.styles')
</head>

<body class="">
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.scripts')
</body>

</html>
