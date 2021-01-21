<nav id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4 hidden-xs">
                <ul class="list-inline list-unstyled head-social">
                    <li><a href="#">Get Up to 70% Discount Everyday</a></li>
                </ul>
            </div>
            <div id="top-links" class="text-right col-md-6 col-sm-8 col-xs-center">
                <ul class="list-inline">
                    <li><a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><span
                                class="hidden-xs">Wish List (0)</span><i
                                class="fa fa-heart-o hidden-sm hidden-lg hidden-md"></i></a></li>
                    <li>
                        <form
                            action="http://templateinspire.com/opencart/Flower/index.php?route=common/currency/currency"
                            method="post" enctype="multipart/form-data" id="form-currency">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong
                                        class="hidden-md hidden-sm hidden-lg">$</strong> <span
                                        class="hidden-xs">Currency</span>&nbsp;<i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button"
                                            name="EUR">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button"
                                            name="INR">₹ Indian Rupee</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button"
                                            name="GBP">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button"
                                            name="USD">$ US Dollar</button>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
                        </form>

                    </li>
                    <li>
                        <form
                            action="http://templateinspire.com/opencart/Flower/index.php?route=common/language/language"
                            method="post" enctype="multipart/form-data" id="form-language">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">

                                    <img class="hidden-md hidden-sm hidden-lg"
                                        src="catalog/language/en-gb/en-gb.png')}}" alt="English" title="English">
                                    <span class="hidden-xs">Language</span>&nbsp;<i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button"
                                            name="en-gb"><img src="catalog/language/en-gb/en-gb.png')}}" alt="English"
                                                title="English" /> English</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button"
                                            name="tr-tr"><img src="catalog/language/tr-tr/tr-tr.png')}}" alt="Türkçe"
                                                title="Türkçe" /> Türkçe</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button"
                                            name="ar"><img src="catalog/language/ar/ar.png')}}" alt="arabic"
                                                title="arabic" /> arabic</button>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="index9328.html?route=common/home" />
                        </form>
                    </li>

                    <li class="dropdown inspire-account"><a href="indexe223.html?route=account/account"
                            title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs">My
                                Account</span><i class="fa fa-user hidden-sm hidden-lg hidden-md"></i> <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="index5502.html?route=account/register"><i
                                        class="fa fa-address-book-o"></i>Register</a></li>
                            <li><a href="indexe223.html?route=account/login"><i class="fa fa-sign-in"></i>Login</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="http://templateinspire.com/opencart/Flower/index.php?route=checkout/checkout" title="Checkout"><span class="hidden-xs">Checkout</span><i class="fa fa-share hidden-sm hidden-lg hidden-md"></i></a></li> -->

                </ul>
            </div>
        </div>
    </div>
</nav>



<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-2 col-xs-6">
                <div id="logo">
                    <a href="index9328.html?route=common/home">
                        <img src="{{ bagisto_asset('images/catalog/logo-new.png') }}" title="Your Store"
                            alt="Your Store" class="img-responsive" />
                        <a href="{{ route('shop.home.index') }}">
                            @if ($logo = core()->getCurrentChannel()->logo_url)
                                <img class="logo" src="{{ $logo }}" />
                            @else
                                <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                            @endif
                        </a>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-lg">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 text-right mcart">
                <div id="cart" class="">
                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">
                        <i class="fa fa-shopping-bag cart-icon"></i>
                        <div class="ct">
                            <span id="cart-total">0 items / $0.00</span>
                        </div>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <p class="text-center">Your shopping cart is empty!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


 


{{-- <div class="left-content">
    <ul class="logo-container">
        <li>
            <a href="{{ route('shop.home.index') }}">
                @if ($logo = core()->getCurrentChannel()->logo_url)
                    <img class="logo" src="{{ $logo }}" />
                    @else
                    <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                @endif
            </a>
        </li>
    </ul>

    <ul class="search-container">
        <li class="search-group">
            <form role="search" action="{{ route('shop.search.index') }}" method="GET" style="display: inherit;">
                <input required name="term" type="search" value="{{ $term }}" class="search-field"
                    placeholder="{{ __('shop::app.header.search-text') }}">

                <image-search-component></image-search-component>

                <div class="search-icon-wrapper">

                    <button class="" class="background: none;">
                        <i class="icon icon-search"></i>
                    </button>
                </div>
            </form>
        </li>
    </ul>
</div><!-- end left-content -->

<div class="right-content">

    <span class="search-box"><span class="icon icon-search" id="search"></span></span>

    <ul class="right-content-menu">

        {!! view_render_event('bagisto.shop.layout.header.comppare-item.before') !!}

        @php
        $showCompare = core()->getConfigData('general.content.shop.compare_option') == "1" ? true : false
        @endphp

        @if ($showCompare)
            <li class="compare-dropdown-container">
                <a @auth('customer') href="{{ route('velocity.customer.product.compare') }}" @endauth @guest('customer')
                    href="{{ route('velocity.product.compare') }}" @endguest style="color: #242424;">

                    <i class="icon compare-icon"></i>
                    <span class="name">
                        {{ __('shop::app.customer.compare.text') }}
                        <span class="count">(<span id="compare-items-count"></span>)<span class="count">
                            </span>
                </a>
            </li>
        @endif

        {!! view_render_event('bagisto.shop.layout.header.compare-item.after') !!}

        {!! view_render_event('bagisto.shop.layout.header.currency-item.before') !!}

        @if (core()
        ->getCurrentChannel()
        ->currencies->count() > 1)
            <li class="currency-switcher">
                <span class="dropdown-toggle">
                    {{ core()->getCurrentCurrencyCode() }}

                    <i class="icon arrow-down-icon"></i>
                </span>

                <ul class="dropdown-list currency">
                    @foreach (core()->getCurrentChannel()->currencies as $currency)
                        <li>
                            @if (isset($serachQuery))
                                <a href="?{{ $serachQuery }}&currency={{ $currency->code }}">{{ $currency->code }}</a>
                                @else
                                <a href="?currency={{ $currency->code }}">{{ $currency->code }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif

        {!! view_render_event('bagisto.shop.layout.header.currency-item.after') !!}


        {!! view_render_event('bagisto.shop.layout.header.account-item.before') !!}

        <li>
            <span class="dropdown-toggle">
                <i class="icon account-icon"></i>

                <span class="name">{{ __('shop::app.header.account') }}</span>

                <i class="icon arrow-down-icon"></i>
            </span>

            @guest('customer')
            <ul class="dropdown-list account guest">
                <li>
                    <div>
                        <label style="color: #9e9e9e; font-weight: 700; text-transform: uppercase; font-size: 15px;">
                            {{ __('shop::app.header.title') }}
                        </label>
                    </div>

                    <div style="margin-top: 5px;">
                        <span style="font-size: 12px;">{{ __('shop::app.header.dropdown-text') }}</span>
                    </div>

                    <div style="margin-top: 15px;">
                        <a class="btn btn-primary btn-md" href="{{ route('customer.session.index') }}"
                            style="color: #ffffff">
                            {{ __('shop::app.header.sign-in') }}
                        </a>

                        <a class="btn btn-primary btn-md" href="{{ route('customer.register.index') }}"
                            style="float: right; color: #ffffff">
                            {{ __('shop::app.header.sign-up') }}
                        </a>
                    </div>
                </li>
            </ul>
            @endguest

            @auth('customer')
            <ul class="dropdown-list account customer">
                <li>
                    <div>
                        <label style="color: #9e9e9e; font-weight: 700; text-transform: uppercase; font-size: 15px;">
                            {{ auth()->guard('customer')->user()->first_name }}
                        </label>
                    </div>

                    <ul>
                        <li>
                            <a href="{{ route('customer.profile.index') }}">{{ __('shop::app.header.profile') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('customer.wishlist.index') }}">{{ __('shop::app.header.wishlist') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.header.cart') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth
        </li>

        {!! view_render_event('bagisto.shop.layout.header.account-item.after') !!}


        {!! view_render_event('bagisto.shop.layout.header.cart-item.before') !!}

        <li class="cart-dropdown-container">

            @include('shop::checkout.cart.mini-cart')

        </li>

        {!! view_render_event('bagisto.shop.layout.header.cart-item.after') !!}

    </ul>

    <span class="menu-box"><span class="icon icon-menu" id="hammenu"></span>
</div> --}}
