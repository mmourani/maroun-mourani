<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Maroun Mourani CV international business development Dubai Middle East Africa blockchain ICO defense defence Internet Of Things IOT consulting software designer programmer integration soutions')">
        <meta name="author" content="@yield('meta_author', 'Maroun Mourani')">
        @yield('meta')

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
                function hideURLbar(){ window.scrollTo(0,1); } </script>

        <link rel="stylesheet" href="css/lightbox.css"><!-- for gallery css -->

        <!-- banner text effect css files -->
            <link rel="stylesheet" type="text/css" href="css/demo.css" />
            <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <!-- banner text effect css files -->

        <!-- Navigation-CSS --> <link rel="stylesheet" href="css/menu_sideslide.css"    type="text/css" media="all">

        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

        <link href="css/bars.css" rel="stylesheet" type="text/css"><!-- for skills -->

        <!-- custom-theme files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //custom-theme files -->

        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->


        <!-- googlefonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!-- //googlefonts -->

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')


    </head>
    <body>
        @include('includes.partials.logged-in-as')
        <!--@include('frontend.includes.nav')-->
        @yield('banner')
        <div class="clearfix"></div>
        @yield('content')
        @include('includes.partials.messages')
        @include('frontend.includes.footer') 
        <!-- Scripts -->
        @include('includes.partials.scripts')
        @include('includes.partials.ga')
    </body>
</html>
