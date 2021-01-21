<aside id="column-left" class="col-md-3 col-sm-4 col-xs-12">
    <div class="hidden-xs">
        <div class="cateti">
            <h3><i class="fa fa-list"></i>category</h3>
        </div>
        <div class="cate-menu ">
            <nav id="menu" class="navbar">
                <div class="navbar-header"><span id="category" class="visible-xs"></span>
                    <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav">
                        <li class="moremenu"><a href="indexdf98.html?route=product/category&amp;path=38"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/9.png') }}"
                                    alt="Accessories">Accessories</a></li>

                        <?php
                        $categories = [];

                        foreach
                            (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id)
                            as $key => $category) {
                            if ($category->slug) {
                            //array_push($categories, $category);
                         
                            ?>
                           
                            <li class="dropdown moremenu">
                                <a href="index98dc.html?route=product/category&amp;path=20"
                                class="dropdown-toggle header-menu" data-toggle="dropdown">
                                <img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/3.png') }}" alt="{{$category->name}}">
                                    {{$category->id}}.
                                    {{$category->name}}
                                    <i class="fa fa-angle-down enangle"></i>
                                </a>
                                @if(count($category->children)>0)
                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled">
                                            
                                                @foreach ( $category->children as $child )
                                                    <li class="dropdown-submenu"> 
                                                        <a
                                                        href="/{{$child->translations[0]->url_path}}"
                                                        class="submenu-title">{{$child->name}} PC (4) </a>
                                                    </li>  
                                                @endforeach
                                           
                                            
                                        </ul>
                                    </div>
                                    <!-- <a href="http://templateinspire.com/opencart/Flower/index.php?route=product/category&amp;path=20" class="see-all"> Desktops</a> -->
                                </div>
                                @endif
                        </li>

                            <?php
                            }
                        }
                    ?>
                    
                        <li class="dropdown moremenu"><a href="index98dc.html?route=product/category&amp;path=20"
                                class="dropdown-toggle header-menu" data-toggle="dropdown"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/3.png') }}" alt="Desktops">
                                Desktops<i class="fa fa-angle-down enangle"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu"> <a
                                                href="indexd9fe.html?route=product/category&amp;path=20_26"
                                                class="submenu-title"> PC (4) </a>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="indexf345.html?route=product/category&amp;path=20_27"
                                                class="submenu-title"> Mac (2) </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="http://templateinspire.com/opencart/Flower/index.php?route=product/category&amp;path=20" class="see-all"> Desktops</a> -->
                            </div>
                        </li>
                        <li class="dropdown moremenu"><a href="index7fa3.html?route=product/category&amp;path=18"
                                class="dropdown-toggle header-menu" data-toggle="dropdown"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/6.png') }}" alt="Laptops"> Laptops<i
                                    class="fa fa-angle-down enangle"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu"> <a
                                                href="index9f41.html?route=product/category&amp;path=18_46"
                                                class="submenu-title"> Macs (9) </a>
                                            <ul class="list-unstyled grand-child">
                                                <li> <a href="index6d87.html?route=product/category&amp;path=46_34"> MP3
                                                        Players (7) </a> </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="index8470.html?route=product/category&amp;path=18_45"
                                                class="submenu-title"> Windows (9) </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="http://templateinspire.com/opencart/Flower/index.php?route=product/category&amp;path=18" class="see-all"> Laptops</a> -->
                            </div>
                        </li>
                        <li class="dropdown moremenu"><a href="index1647.html?route=product/category&amp;path=25"
                                class="dropdown-toggle header-menu" data-toggle="dropdown"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/2.png') }}" alt="Components">
                                Components<i class="fa fa-angle-down enangle"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu"> <a
                                                href="indexc219.html?route=product/category&amp;path=25_29"
                                                class="submenu-title"> Mice and Trackballs (8) </a>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="indexe177.html?route=product/category&amp;path=25_28"
                                                class="submenu-title"> Monitors (10) </a>
                                            <ul class="list-unstyled grand-child">
                                                <li> <a href="index43ee.html?route=product/category&amp;path=28_35">
                                                        Earrings (9) </a> </li>
                                                <li> <a href="indexf6ce.html?route=product/category&amp;path=28_36">
                                                        Smart phones (9) </a> </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="index68a7.html?route=product/category&amp;path=25_30"
                                                class="submenu-title"> Printers (9) </a>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="indexf3db.html?route=product/category&amp;path=25_31"
                                                class="submenu-title"> Scanners (9) </a>
                                        </li>
                                        <li class="dropdown-submenu"> <a
                                                href="index955a.html?route=product/category&amp;path=25_32"
                                                class="submenu-title"> Web Cameras (9) </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="http://templateinspire.com/opencart/Flower/index.php?route=product/category&amp;path=25" class="see-all"> Components</a> -->
                            </div>
                        </li>
                        <li class="moremenu"><a href="index70a9.html?route=product/category&amp;path=57"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/5.png') }}"
                                    alt="Tablets">Tablets</a></li>
                        <li class="moremenu"><a href="indexb152.html?route=product/category&amp;path=17"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/7.png') }}"
                                    alt="Software">Software</a></li>
                        <li class="moremenu"><a href="indexc957.html?route=product/category&amp;path=24"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/8.png') }}"
                                    alt="Phones &amp; PDAs">Phones &amp; PDAs</a></li>
                        <li class="moremenu"><a href="index68ea.html?route=product/category&amp;path=33"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/1.png') }}"
                                    alt="Cameras">Cameras</a></li>
                        <li class="moremenu"><a href="indexabf4.html?route=product/category&amp;path=42"><img
                                    src="{{ bagisto_asset('images/catalog/menu-icon/4.png') }}"
                                    alt="Home Applinaces">Home Applinaces</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <script type="text/javascript">
        function headermenu() {
            if (jQuery(window).width() < 992) {
                jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle", "dropdown");
            } else {
                jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle", "");
            }
        }
        $(document).ready(function() {
            headermenu();
        });
        jQuery(window).resize(function() {
            headermenu();
        });
        jQuery(window).scroll(function() {
            headermenu();
        });

    </script>

    <div class="pro-bg pro-nepr">
        <h2>Hot Deals</h2>
        <hr>
        <div class="row">
            <div id="count" class="owl-theme owl-carousel" style="opacity: 1; display: block;">

                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 1012px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 253px;">
                            <div class="product-layout col-xs-12">
                                <div class="product-thumb transition">
                                    <div class="image"><a
                                            href="indexbb02.html?route=product/product&amp;product_id=42"><img
                                                src="{{ bagisto_asset('images/cache/catalog/product/01-243x270.jpg') }}"
                                                alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;"
                                                class="img-responsive center-block"></a>


                                        <span class="salepro">sale</span>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">Apple
                                                Cinema 30"</a></h4>
                                        <p class="price">
                                            <span class="price-new">$110.00</span> <span
                                                class="price-old">$122.00</span>
                                        </p>
                                        <div class="rating">
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="Countdown42" class="box-timer is-countdown"><span
                                            class="countdown-row countdown-show4"><span class="countdown-section"><span
                                                    class="countdown-amount">24</span><span
                                                    class="countdown-period">Days</span></span><span
                                                class="countdown-section"><span class="countdown-amount">3</span><span
                                                    class="countdown-period">Hrs</span></span><span
                                                class="countdown-section"><span class="countdown-amount">42</span><span
                                                    class="countdown-period">Mins</span></span><span
                                                class="countdown-section"><span class="countdown-amount">16</span><span
                                                    class="countdown-period">Secs</span></span></span></div>
                                    <div class="button-group text-center">
                                        <button type="button" data-toggle="tooltip" onclick="cart.add('42');"
                                            class="pcart" title="" data-original-title="Add to Cart">
                                            <svg width="18px" height="18px" class="">
                                                <use xlink:href="#pcart"></use>
                                            </svg>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title=""
                                            onclick="wishlist.add('42');" class="pwish"
                                            data-original-title="Add to Wish List"><svg width="18px" height="18px"
                                                class="">
                                                <use xlink:href="#pwish"></use>
                                            </svg></button>
                                        <button type="button" data-toggle="tooltip" title=""
                                            onclick="compare.add('42');" class="pcom"
                                            data-original-title="Compare"><span><svg width="16px" height="16px"
                                                    class="">
                                                    <use xlink:href="#pcom"></use>
                                                </svg></span></button>
                                    </div>



                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#Countdown42').countdown({
                                                until: new Date(2021, 01 - 1, 03, 00, 00, 00),
                                                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs',
                                                    'Mins', 'Secs'
                                                ],
                                                labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min',
                                                    'Sec'
                                                ],
                                            });

                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 253px;">
                            <div class="product-layout col-xs-12">
                                <div class="product-thumb transition">
                                    <div class="image"><a
                                            href="indexf073.html?route=product/product&amp;product_id=30"><img
                                                src="{{ bagisto_asset('images/cache/catalog/product/10-243x270.jpg') }}"
                                                alt="Canon EOS 5D" title="Canon EOS 5D"
                                                class="img-responsive center-block"></a>


                                        <span class="salepro">sale</span>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="indexf073.html?route=product/product&amp;product_id=30">Canon EOS
                                                5D</a></h4>
                                        <p class="price">
                                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                        </p>
                                        <div class="rating">
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="Countdown30" class="box-timer is-countdown"><span
                                            class="countdown-row countdown-show4"><span class="countdown-section"><span
                                                    class="countdown-amount">8</span><span
                                                    class="countdown-period">Days</span></span><span
                                                class="countdown-section"><span class="countdown-amount">3</span><span
                                                    class="countdown-period">Hrs</span></span><span
                                                class="countdown-section"><span class="countdown-amount">42</span><span
                                                    class="countdown-period">Mins</span></span><span
                                                class="countdown-section"><span class="countdown-amount">16</span><span
                                                    class="countdown-period">Secs</span></span></span></div>
                                    <div class="button-group text-center">
                                        <button type="button" data-toggle="tooltip" onclick="cart.add('30');"
                                            class="pcart" title="" data-original-title="Add to Cart">
                                            <svg width="18px" height="18px" class="">
                                                <use xlink:href="#pcart"></use>
                                            </svg>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title=""
                                            onclick="wishlist.add('30');" class="pwish"
                                            data-original-title="Add to Wish List"><svg width="18px" height="18px"
                                                class="">
                                                <use xlink:href="#pwish"></use>
                                            </svg></button>
                                        <button type="button" data-toggle="tooltip" title=""
                                            onclick="compare.add('30');" class="pcom"
                                            data-original-title="Compare"><span><svg width="16px" height="16px"
                                                    class="">
                                                    <use xlink:href="#pcom"></use>
                                                </svg></span></button>
                                    </div>



                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#Countdown30').countdown({
                                                until: new Date(2020, 12 - 1, 18, 00, 00, 00),
                                                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs',
                                                    'Mins', 'Secs'
                                                ],
                                                labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min',
                                                    'Sec'
                                                ],
                                            });

                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#count").owlCarousel({
                itemsCustom: [
                    [0, 1]
                ],
                // autoPlay: 1000,
                navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navigation: true,
                pagination: false
            });
        });

    </script>


    <div class="pro-bg leftpro">
        <h2>Hot deal</h2>
        <hr>
        <div class="pro-nepr">
            <div id="onsale" class="owl-theme owl-carousel" style="opacity: 1; display: block;">

                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 892px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 223px;">
                            <div class="multi-row">
                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexcae8.html?route=product/product&amp;product_id=41"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/04-728x800.jpg') }}"
                                                    alt="iMac More powerful Intel Core 2 Duo processors"
                                                    title="iMac More powerful Intel Core 2 Duo processors"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexcae8.html?route=product/product&amp;product_id=41"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>








                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexcae8.html?route=product/product&amp;product_id=41">iMac
                                                    More powerful Intel Core 2 Duo processors</a></h4>
                                            <p class="price">
                                                <span class="price-new">$674.00</span> <span
                                                    class="price-old">$1,502.00</span>
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->

                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexb77e.html?route=product/product&amp;product_id=48"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/01-728x800.jpg') }}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexb77e.html?route=product/product&amp;product_id=48"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/01-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>







                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexb77e.html?route=product/product&amp;product_id=48">iPod
                                                    Classic</a></h4>
                                            <p class="price">
                                                $122.00
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->

                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexc21e.html?route=product/product&amp;product_id=34"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    alt="iPod Shuffle" title="iPod Shuffle"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexc21e.html?route=product/product&amp;product_id=34"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/01-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>









                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexc21e.html?route=product/product&amp;product_id=34">iPod
                                                    Shuffle</a></h4>
                                            <p class="price">
                                                $122.00
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->
                            </div>
                        </div>
                        <div class="owl-item" style="width: 223px;">
                            <div class="multi-row">
                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="index9144.html?route=product/product&amp;product_id=40"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/06-728x800.jpg') }}"
                                                    alt="iPhone" title="iPhone" class="img-responsive center-block"></a>

                                            <a href="index9144.html?route=product/product&amp;product_id=40"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/01-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>









                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a
                                                    href="index9144.html?route=product/product&amp;product_id=40">iPhone</a>
                                            </h4>
                                            <p class="price">
                                                $123.20
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->

                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="index5e0b.html?route=product/product&amp;product_id=36"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/04-728x800.jpg') }}"
                                                    alt="iPod Nano" title="iPod Nano"
                                                    class="img-responsive center-block"></a>

                                            <a href="index5e0b.html?route=product/product&amp;product_id=36"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/03-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>








                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="index5e0b.html?route=product/product&amp;product_id=36">iPod
                                                    Nano</a></h4>
                                            <p class="price">
                                                $122.00
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->

                                <!-- writ code Here -->
                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="index531d.html?route=product/product&amp;product_id=45"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/09-728x800.jpg') }}"
                                                    alt="MacBook Pro" title="MacBook Pro"
                                                    class="img-responsive center-block"></a>

                                            <a href="index531d.html?route=product/product&amp;product_id=45"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/08-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>






                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="index531d.html?route=product/product&amp;product_id=45">MacBook
                                                    Pro</a></h4>
                                            <p class="price">
                                                <span class="price-new">$100.00</span> <span
                                                    class="price-old">$2,000.00</span>
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- writ code Here End -->
                            </div>
                        </div>
                    </div>
                </div>





                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#onsale").owlCarousel({
                itemsCustom: [
                    [0, 1],
                    [600, 2],
                    [768, 1]
                ],
                // autoPlay: 1000,
                navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navigation: true,
                pagination: false
            });
        });

    </script>


    <div class="pro-bg leftpro">
        <h2>top Deal</h2>
        <hr>
        <div class="pro-nepr">
            <div id="bestpro" class="owl-theme owl-carousel" style="opacity: 1; display: block;">

                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 892px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 223px;">
                            <div class="multi-row">

                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexf073.html?route=product/product&amp;product_id=30"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    alt="Canon EOS 5D" title="Canon EOS 5D"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexf073.html?route=product/product&amp;product_id=30"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>






                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexf073.html?route=product/product&amp;product_id=30">Canon
                                                    EOS 5D</a></h4>
                                            <p class="price">
                                                <span class="price-new">$98.00</span> <span
                                                    class="price-old">$122.00</span>
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="index6320.html?route=product/product&amp;product_id=28"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/05-728x800.jpg') }}"
                                                    alt="HTC Touch HD" title="HTC Touch HD"
                                                    class="img-responsive center-block"></a>

                                            <a href="index6320.html?route=product/product&amp;product_id=28"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/06-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>


                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="index6320.html?route=product/product&amp;product_id=28">HTC
                                                    Touch HD</a></h4>
                                            <p class="price">
                                                $122.00
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexcae8.html?route=product/product&amp;product_id=41"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/04-728x800.jpg') }}"
                                                    alt="iMac More powerful Intel Core 2 Duo processors"
                                                    title="iMac More powerful Intel Core 2 Duo processors"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexcae8.html?route=product/product&amp;product_id=41"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>






                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexcae8.html?route=product/product&amp;product_id=41">iMac
                                                    More powerful Intel Core 2 Duo processors</a></h4>
                                            <p class="price">
                                                <span class="price-new">$674.00</span> <span
                                                    class="price-old">$1,502.00</span>
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item" style="width: 223px;">
                            <div class="multi-row">

                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexd94c.html?route=product/product&amp;product_id=44"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/08-728x800.jpg') }}"
                                                    alt="MacBook Air" title="MacBook Air"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexd94c.html?route=product/product&amp;product_id=44"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/08-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>





                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="indexd94c.html?route=product/product&amp;product_id=44">MacBook
                                                    Air</a></h4>
                                            <p class="price">
                                                $1,202.00
                                            </p>
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="index531d.html?route=product/product&amp;product_id=45"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/09-728x800.jpg') }}"
                                                    alt="MacBook Pro" title="MacBook Pro"
                                                    class="img-responsive center-block"></a>

                                            <a href="index531d.html?route=product/product&amp;product_id=45"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/08-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>




                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a href="index531d.html?route=product/product&amp;product_id=45">MacBook
                                                    Pro</a></h4>
                                            <p class="price">
                                                <span class="price-new">$100.00</span> <span
                                                    class="price-old">$2,000.00</span>
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-layout">
                                    <div class="product-thumb transition">
                                        <div class="image col-xs-5"><a
                                                href="indexb8ca.html?route=product/product&amp;product_id=43"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/05-728x800.jpg') }}"
                                                    alt="MacBook" title="MacBook"
                                                    class="img-responsive center-block"></a>

                                            <a href="indexb8ca.html?route=product/product&amp;product_id=43"><img
                                                    src="{{ bagisto_asset('images/cache/catalog/product/10-728x800.jpg') }}"
                                                    class="img-responsive additional-img" alt="additional image"></a>






                                        </div>
                                        <div class="caption text-left col-xs-7">
                                            <h4><a
                                                    href="indexb8ca.html?route=product/product&amp;product_id=43">MacBook</a>
                                            </h4>
                                            <p class="price">
                                                $602.00
                                            </p>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#bestpro").owlCarousel({
                itemsCustom: [
                    [0, 1],
                    [600, 2],
                    [768, 1]
                ],
                // autoPlay: 1000,
                navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navigation: true,
                pagination: false
            });
        });

    </script>
    <div class="inspire-newsletter  inspire-newsletter pro-bg" id="newsletter_1607512956" data-mode="default">
        <form id="formNewLestter" method="post"
            action="http://templateinspire.com/opencart/Flower/index.php?route=extension/module/inspirenewsletter/subscribe"
            class="formNewLestter newsletter-bg">
            <div class="inner">
                <h2>Newsletter</h2>
                <hr>
                <div class="description-top">
                    <p> Sign up for our newsletter

                    </p>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-md inputNew"
                        onblur="javascript:if(this.value=='')this.value='Your email address';"
                        onfocus="javascript:if(this.value=='Your email address')this.value='';"
                        value="Your email address" size="18" name="email">
                </div>
                <div class="button-submit">
                    <button type="submit" name="submitNewsletter" class="btn btn-danger">Subscribe</button>
                </div>
                <input type="hidden" value="1" name="action">
                <div class="valid"></div>
                <div class="description-bottom">




                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        <!--
        $("#newsletter_1607512956").inspireoNewsletter().work('Email is not valid!');

        -->
    </script>

    <div>
        <div class="testim text-xs-center left-carousel-button">
            <div id="testi" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 1338px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 223px;">
                            <div class="item">
                                <div class="timg"><img class="img-responsive center-block"
                                        src="{{ bagisto_asset('images/catalog/testi/testi1.png') }}" alt="testi"></div>
                                <div class="content_test">
                                    <h1>orando BLoom</h1>
                                    <p>Fusce et ipsum dignissim, consectetur augue ut, consectetur ante. Donec
                                        condimentum, eros non lacinia pretium, diam enim sagittis nibh, id consectetur
                                        elit tortor efficitur elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 223px;">
                            <div class="item">
                                <div class="timg"><img class="img-responsive center-block"
                                        src="{{ bagisto_asset('images/catalog/testi/testi2.png') }}" alt="testi"></div>
                                <div class="content_test">
                                    <h1>orando BLoom</h1>
                                    <p>Fusce et ipsum dignissim, consectetur augue ut, consectetur ante. Donec
                                        condimentum, eros non lacinia pretium, diam enim sagittis nibh, id consectetur
                                        elit tortor efficitur elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 223px;">
                            <div class="item">
                                <div class="timg"><img class="img-responsive center-block"
                                        src="{{ bagisto_asset('images/catalog/testi/testi3.png') }}" alt="testi"></div>
                                <div class="content_test">
                                    <h1>orando BLoom</h1>
                                    <p>Fusce et ipsum dignissim, consectetur augue ut, consectetur ante. Donec
                                        condimentum, eros non lacinia pretium, diam enim sagittis nibh, id consectetur
                                        elit tortor efficitur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#testi").owlCarousel({
                itemsCustom: [
                    [0, 1],
                    [768, 1]
                ],
                // autoPlay: 1000,
                navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navigation: false,
                pagination: false
            });
        });

    </script>

    <div class="sellbanner col-xs-12">
        <div class="row">
            <div class="col-xs-12 b-effect-p">
                <div class="img-effect-p banner-effect">
                    <a href="#">
                        <img src="{{ bagisto_asset('images/cache/catalog/leftbanner/263x451-263x451.jpg') }}"
                            alt="leftbanner" class="img-responsive center-block" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>



