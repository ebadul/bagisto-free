<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">

    <link rel="stylesheet" href="{{ bagisto_asset('css/shop.css') }}">
    <link rel="stylesheet" href="{{ bagisto_asset('css/sellnoir.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">


    <!-- custom css/js -->
    <base  />
<meta name="description" content="My Store" />
<script src="{{ bagisto_asset('js/jquery/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<link href="{{bagisto_asset('js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
<script src="{{bagisto_asset('js/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/inspire/product-slider-zoom/jquery.elevatezoom.js')}}" type="text/javascript"></script>
<link href="{{bagisto_asset('font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="{{bagisto_asset('css/stylesheet.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 
<script src="{{bagisto_asset('js/countdown/jquery.plugin.min.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/countdown/jquery.countdown.min.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/inspire/custom.js')}}" type="text/javascript"></script>
<link href="{{bagisto_asset('js/jquery/swiper/css/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{bagisto_asset('js/jquery/swiper/css/owl.theme.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{bagisto_asset('js/jquery/magnific/magnific-popup.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{bagisto_asset('css/inspirenewsletter.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{bagisto_asset('js/jquery/swiper/css/swiper.min.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{bagisto_asset('js/jquery/swiper/css/opencart.css')}}" type="text/css" rel="stylesheet" media="screen" />

<script src="{{bagisto_asset('js/jquery/swiper/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/jquery/magnific/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/jquery/inspirenewsletter.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/jquery/swiper/js/swiper.jquery.js')}}" type="text/javascript"></script>
<script src="{{bagisto_asset('js/common.js')}}" type="text/javascript"></script>
<link href="{{bagisto_asset('images/catalog/cart.png')}}" rel="icon" />
<svg style="display: none;">
    <symbol id="cart" viewBox="0 0 459.529 459.529">    
      <path d="M256,0C114.84,0,0,114.842,0,256s114.84,256,256,256s256-114.842,256-256S397.16,0,256,0z M256,462.452
      c-113.837,0-206.452-92.614-206.452-206.452S142.163,49.548,256,49.548S462.452,142.163,462.452,256S369.837,462.452,256,462.452z
      "/>
    <polygon points="256.01,165.161 135.604,285.509 376.388,285.509     "/>
    </symbol>
    <symbol id="pcart" viewBox="0 0 491.029 491.029">    
     <path d="M470.129,1.515h-66.6c-9.4,0-17.7,5.2-19.8,14.6l-71.8,263.2h-212.1l-51-155h225.8c11.4,0,20.8-9.4,20.8-20.8
      s-9.4-20.8-20.8-20.8h-253.9c-15.5,0-23.6,15.2-19.8,27l64.5,196.7c3.1,8.3,11.4,13.5,19.8,13.5h241.4c9.4,0,17.7-6.2,20.8-13.5
      l71.8-263.2h51c11.4,0,20.8-9.4,20.8-20.8S481.629,1.515,470.129,1.515z"/>
      <path d="M283.929,350.115c-38.5,0-69.7,31.2-69.7,69.7s31.2,69.7,69.7,69.7c39.5,0,69.7-31.2,69.7-69.7
      S322.429,350.115,283.929,350.115z M283.929,447.815c-15.6,0-29.1-13.5-29.1-29.1s12.5-29.1,29.1-29.1s29.1,13.5,29.1,29.1
      S300.529,447.815,283.929,447.815z"/>
      <path d="M126.829,350.115c-38.5,0-69.7,31.2-69.7,69.7s31.2,69.7,69.7,69.7s69.7-31.2,69.7-69.7S165.329,350.115,126.829,350.115z
       M126.829,447.815c-15.6,0-29.1-13.5-29.1-29.1s12.5-29.1,29.1-29.1c15.6,0,29.1,13.5,29.1,29.1S143.429,447.815,126.829,447.815z
      "/>
    </symbol>
    <symbol id="pwish" viewBox="0 0 512 512">    
     <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
      c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
      c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
      c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
      c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
      c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
      C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
      c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
      C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
      c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
      c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
      C482,254.358,413.255,312.939,309.193,401.614z"/>
    </symbol>
    <symbol id="pcom" viewBox="0 0 73.17 73.17">    
     <path d="M36.856,12.554c-2.393,0-4.328,1.896-4.328,4.234v52.14c0,2.348,1.936,4.242,4.328,4.242
        c2.389,0,4.328-1.896,4.328-4.242v-52.14C41.185,14.449,39.244,12.554,36.856,12.554z M13.957,26.687
        c-2.391,0-4.329,1.903-4.329,4.242v37.999c0,2.348,1.938,4.242,4.329,4.242c2.388,0,4.325-1.896,4.325-4.242V30.929
        C18.282,28.59,16.345,26.687,13.957,26.687z M59.214,0c-2.389,0-4.324,1.903-4.324,4.242v64.686c0,2.348,1.937,4.242,4.324,4.242
        c2.393,0,4.328-1.896,4.328-4.242V4.242C63.542,1.903,61.606,0,59.214,0z"/>
    </symbol>
  </svg>
    <!-- custom css/js -->

    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.ico') }}" />
    @endif

    @yield('head')

    @section('seo')
        @if (! request()->is('/'))
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
        @endif
    @show

    @stack('css')

    {!! view_render_event('bagisto.shop.layout.head') !!}

    <style>
        {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
    </style>

</head>


<body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif style="scroll-behavior: smooth;">

    {!! view_render_event('bagisto.shop.layout.body.before') !!}

    <div id="app">
        <flash-wrapper ref='flashes'></flash-wrapper>

        <div class="main-container-wrapper">

            {!! view_render_event('bagisto.shop.layout.header.before') !!}

            @include('shop::layouts.header.index')

            {!! view_render_event('bagisto.shop.layout.header.after') !!}

            @yield('slider')

            <div class="content-container">

                {!! view_render_event('bagisto.shop.layout.content.before') !!}

                @yield('content-wrapper')

                {!! view_render_event('bagisto.shop.layout.content.after') !!}

            </div>

        </div>

        {!! view_render_event('bagisto.shop.layout.footer.before') !!}

        @include('shop::layouts.footer.footer')

        {!! view_render_event('bagisto.shop.layout.footer.after') !!}

        @if (core()->getConfigData('general.content.footer.footer_toggle'))
            <div class="footer">
                <p style="text-align: center;">
                    @if (core()->getConfigData('general.content.footer.footer_content'))
                        {{ core()->getConfigData('general.content.footer.footer_content') }}
                    @else
                        {!! trans('admin::app.footer.copy-right') !!}
                    @endif
                </p>
            </div>
        @endif

        <overlay-loader :is-open="show_loader"></overlay-loader>
    </div>

    <script type="text/javascript">
        window.flashMessages = [];

        @if ($success = session('success'))
            window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
        @elseif ($warning = session('warning'))
            window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
        @elseif ($error = session('error'))
            window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
            ];
        @elseif ($info = session('info'))
            window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
            ];
        @endif

        window.serverErrors = [];
        @if(isset($errors))
            @if (count($errors))
                window.serverErrors = @json($errors->getMessages());
            @endif
        @endif
    </script>

    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>

    @stack('scripts')

    {!! view_render_event('bagisto.shop.layout.body.after') !!}

    <div class="modal-overlay"></div>

    <script>
        {!! core()->getConfigData('general.content.custom_scripts.custom_javascript') !!}
    </script>

</body>

</html>