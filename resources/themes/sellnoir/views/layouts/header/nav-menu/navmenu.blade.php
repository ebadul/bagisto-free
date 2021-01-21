<div class="stmenu">
    <div class="container hidden-xs">
        <div id="menu1">
            <div class="manun">
                <ul class="list-inline">
                    <li><a href="index9328.html?route=common/home">Home</a></li>
                    <li><a href="indexf110.html?route=product/special">specials offfers</a></li>
                    <li><a href="index2724.html?route=information/contact">contact</a></li>
                    <li><a href="index7cb2.html?route=information/sitemap">sitemap</a></li>
                    <li><a href="indexd773.html?route=product/manufacturer">Brand</a></li>

                    <?php
                        $categories = [];

                        foreach
                            (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id)
                            as $category) {
                            if ($category->slug) {
                            //array_push($categories, $category);
                            ?>
                            <li><a href="indexd773.html?route=product/manufacturer">{{$category->name}}</a></li>
                            <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="hidden-md hidden-lg hidden-sm">
    <div class="container horizontal-menu">
        <nav id="menu" class="navbar">

            <div class="navbar-header">
                <!-- <span id="category" class="visible-xs">Categories</span> -->
                <button type="button" class="btn btn-navbar navbar-toggle" onclick="openNav()" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            </div>

            <div id="mySidenav" class="sidenav">
                <div class="close-nav">
                    <span class="categories">Category</span>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-close"></i></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="indexdf98.html?route=product/category&amp;path=38">Accessories</a></li>
                        <li class="dropdown"><a href="index98dc.html?route=product/category&amp;path=20"
                                class="dropdown-toggle header-menu" data-toggle="dropdown">Desktops<i
                                    class="fa fa-angle-down pull-right"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li><a href="indexd9fe.html?route=product/category&amp;path=20_26">PC (4)</a>
                                        </li>
                                        <li><a href="indexf345.html?route=product/category&amp;path=20_27">Mac (2)</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="index98dc.html?route=product/category&amp;path=20" class="see-all">Show All
                                    Desktops</a>
                            </div>
                        </li>
                        <li class="dropdown"><a href="index7fa3.html?route=product/category&amp;path=18"
                                class="dropdown-toggle header-menu" data-toggle="dropdown">Laptops<i
                                    class="fa fa-angle-down pull-right"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li><a href="index9f41.html?route=product/category&amp;path=18_46">Macs (9)</a>
                                        </li>
                                        <li><a href="index8470.html?route=product/category&amp;path=18_45">Windows
                                                (9)</a></li>
                                    </ul>
                                </div>
                                <a href="index7fa3.html?route=product/category&amp;path=18" class="see-all">Show All
                                    Laptops</a>
                            </div>
                        </li>
                        <li class="dropdown"><a href="index1647.html?route=product/category&amp;path=25"
                                class="dropdown-toggle header-menu" data-toggle="dropdown">Components<i
                                    class="fa fa-angle-down pull-right"></i></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li><a href="indexc219.html?route=product/category&amp;path=25_29">Mice and
                                                Trackballs (8)</a></li>
                                        <li><a href="indexe177.html?route=product/category&amp;path=25_28">Monitors
                                                (10)</a></li>
                                        <li><a href="index68a7.html?route=product/category&amp;path=25_30">Printers
                                                (9)</a></li>
                                        <li><a href="indexf3db.html?route=product/category&amp;path=25_31">Scanners
                                                (9)</a></li>
                                        <li><a href="index955a.html?route=product/category&amp;path=25_32">Web Cameras
                                                (9)</a></li>
                                    </ul>
                                </div>
                                <a href="index1647.html?route=product/category&amp;path=25" class="see-all">Show All
                                    Components</a>
                            </div>
                        </li>
                        <li><a href="index70a9.html?route=product/category&amp;path=57">Tablets</a></li>
                        <li><a href="indexb152.html?route=product/category&amp;path=17">Software</a></li>
                        <li><a href="indexc957.html?route=product/category&amp;path=24">Phones &amp; PDAs</a></li>
                        <li><a href="index68ea.html?route=product/category&amp;path=33">Cameras</a></li>
                        <li><a href="indexabf4.html?route=product/category&amp;path=42">Home Applinaces</a></li>
                    </ul>
                </div>
        </nav>
    </div>
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



{!! view_render_event('bagisto.shop.layout.header.category.before') !!}

<?php
$categories = [];

foreach
(app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id)
as $category) {
if ($category->slug) {
array_push($categories, $category);
}
}
?>

{{-- <category-nav categories='@json($categories)' url="{{ url()->to('/') }}"></category-nav> --}}

{!! view_render_event('bagisto.shop.layout.header.category.after') !!}


@push('scripts')


    <script type="text/x-template" id="category-nav-template">

        <ul class="nav">
            <category-item
                v-for="(item, index) in items"
                :key="index"
                :url="url"
                :item="item"
                :parent="index">
            </category-item>
        </ul>

    </script>

    <script>
        Vue.component('category-nav', {

            template: '#category-nav-template',

            props: {
                categories: {
                    type: [Array, String, Object],
                    required: false,
                    default: (function() {
                        return [];
                    })
                },

                url: String
            },

            data: function() {
                return {
                    items_count: 0
                };
            },

            computed: {
                items: function() {
                    return JSON.parse(this.categories)
                }
            },
        });

    </script>

    <script type="text/x-template" id="category-item-template">
        <li>
            <a :href="url+'/'+this.item['translations'][0].url_path">
                @{{ name }}&emsp;
                <i class="icon dropdown-right-icon" v-if="haveChildren && item.parent_id != null"></i>
            </a>

            <i :class="[show ? 'icon icon-arrow-down mt-15' : 'icon dropdown-right-icon left mt-15']"
            v-if="haveChildren"  @click="showOrHide"></i>

            <ul v-if="haveChildren && show">
                <category-item
                    v-for="(child, index) in item.children"
                    :key="index"
                    :url="url"
                    :item="child">
                </category-item>
            </ul>
        </li>
    </script>

    <script>
        Vue.component('category-item', {

            template: '#category-item-template',

            props: {
                item: Object,
                url: String,
            },

            data: function() {
                return {
                    items_count: 0,
                    show: false,
                };
            },

            mounted: function() {
                if (window.innerWidth > 770) {
                    this.show = true;
                }
            },

            computed: {
                haveChildren: function() {
                    return this.item.children.length ? true : false;
                },

                name: function() {
                    if (this.item.translations && this.item.translations.length) {
                        this.item.translations.forEach(function(translation) {
                            if (translation.locale == document.documentElement.lang)
                                return translation.name;
                        });
                    }

                    return this.item.name;
                }
            },

            methods: {
                showOrHide: function() {
                    this.show = !this.show;
                }
            }
        });

    </script>


@endpush
