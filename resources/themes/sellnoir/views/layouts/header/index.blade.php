<?php
    $term = request()->input('term');

    if (! is_null($term)) {
        $serachQuery = 'term='.request()->input('term');
    }
?>

@include('shop::layouts.header.header-top')
@include('shop::layouts.header.nav-menu.navmenu')

<div id="page-preloader" class="visible">
  <div class="preloader">
      <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
      </div>
  </div>
</div>
<div id="common-home" class="container">
  <div class="row">
      @include('shop::partials.left-bar')
      @include('shop::home.body-content')
  </div><!-- end row after common-home-->
</div><!-- end  common-home & container-->


<div class="header" id="header">
    {{-- <div class="header-top">
       @include('shop::layouts.header.header-top')  
    </div><!-- end header-top --> --}}

    {{-- <div class="header-bottom" id="header-bottom">
        @include('shop::layouts.header.nav-menu.navmenu')
    </div> --}}

    <div class="search-responsive mt-10" id="search-responsive">
        <form role="search" action="{{ route('shop.search.index') }}" method="GET" style="display: inherit;">
            <div class="search-content">
                <button style="background: none; border: none; padding: 0px;">
                    <i class="icon icon-search"></i>
                </button>

                <image-search-component></image-search-component>

                <input type="search" name="term" class="search">
                <i class="icon icon-menu-back right"></i>
            </div>
        </form>
    </div>
</div><!-- end header -->

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>

    <script type="text/x-template" id="image-search-component-template">
        <div>
            <label class="image-search-container" for="image-search-container">
                <i class="icon camera-icon"></i>

                <input type="file" id="image-search-container" ref="image_search_input" v-on:change="uploadImage()"/>

                <img id="uploaded-image-url" :src="uploaded_image_url"/>
            </label>
        </div>
    </script>

    <script>

        Vue.component('image-search-component', {

            template: '#image-search-component-template',

            data: function() {
                return {
                    uploaded_image_url: ''
                }
            },

            methods: {
                uploadImage: function() {
                    var imageInput = this.$refs.image_search_input;

                    if (imageInput.files && imageInput.files[0]) {
                        if (imageInput.files[0].type.includes('image/')) {
                            var self = this;

                            self.$root.showLoader();

                            var formData = new FormData();

                            formData.append('image', imageInput.files[0]);

                            axios.post("{{ route('shop.image.search.upload') }}", formData, {headers: {'Content-Type': 'multipart/form-data'}})
                                .then(function(response) {
                                    self.uploaded_image_url = response.data;

                                    var net;

                                    async function app() {
                                        var analysedResult = [];

                                        var queryString = '';

                                        net = await mobilenet.load();

                                        const imgElement = document.getElementById('uploaded-image-url');

                                        try {
                                            const result = await net.classify(imgElement);

                                            result.forEach(function(value) {
                                                queryString = value.className.split(',');

                                                if (queryString.length > 1) {
                                                    analysedResult = analysedResult.concat(queryString)
                                                } else {
                                                    analysedResult.push(queryString[0])
                                                }
                                            });
                                        } catch (error) {
                                            self.$root.hideLoader();

                                            window.flashMessages = [
                                                {
                                                    'type': 'alert-error',
                                                    'message': "{{ __('shop::app.common.error') }}"
                                                }
                                            ];

                                            self.$root.addFlashMessages();
                                        };

                                        localStorage.searched_image_url = self.uploaded_image_url;

                                        queryString = localStorage.searched_terms = analysedResult.join('_');

                                        self.$root.hideLoader();

                                        window.location.href = "{{ route('shop.search.index') }}" + '?term=' + queryString + '&image-search=1';
                                    }

                                    app();
                                })
                                .catch(function(error) {
                                    self.$root.hideLoader();

                                    window.flashMessages = [
                                        {
                                            'type': 'alert-error',
                                            'message': "{{ __('shop::app.common.error') }}"
                                        }
                                    ];

                                    self.$root.addFlashMessages();
                                });
                        } else {
                            imageInput.value = '';

                            alert('Only images (.jpeg, .jpg, .png, ..) are allowed.');
                        }
                    }
                }
            }
        });

    </script>

    <script>
        $(document).ready(function() {

            $('body').delegate('#search, .icon-menu-close, .icon.icon-menu', 'click', function(e) {
                toggleDropdown(e);
            });

            @auth('customer')
                @php
                    $compareCount = app('Webkul\Velocity\Repositories\VelocityCustomerCompareProductRepository')
                        ->count([
                            'customer_id' => auth()->guard('customer')->user()->id,
                        ]);
                @endphp

                let comparedItems = JSON.parse(localStorage.getItem('compared_product'));
                $('#compare-items-count').html({{ $compareCount }});
            @endauth

            @guest('customer')
                let comparedItems = JSON.parse(localStorage.getItem('compared_product'));
                $('#compare-items-count').html(comparedItems ? comparedItems.length : 0);
            @endguest

            function toggleDropdown(e) {
                var currentElement = $(e.currentTarget);

                if (currentElement.hasClass('icon-search')) {
                    currentElement.removeClass('icon-search');
                    currentElement.addClass('icon-menu-close');
                    $('#hammenu').removeClass('icon-menu-close');
                    $('#hammenu').addClass('icon-menu');
                    $("#search-responsive").css("display", "block");
                    $("#header-bottom").css("display", "none");
                } else if (currentElement.hasClass('icon-menu')) {
                    currentElement.removeClass('icon-menu');
                    currentElement.addClass('icon-menu-close');
                    $('#search').removeClass('icon-menu-close');
                    $('#search').addClass('icon-search');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "block");
                } else {
                    currentElement.removeClass('icon-menu-close');
                    $("#search-responsive").css("display", "none");
                    $("#header-bottom").css("display", "none");
                    if (currentElement.attr("id") == 'search') {
                        currentElement.addClass('icon-search');
                    } else {
                        currentElement.addClass('icon-menu');
                    }
                }
            }
        });
    </script>
@endpush
