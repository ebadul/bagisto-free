{{-- @extends('extend_product_view::layouts.master')

@section('page_title')
    {{ __('career_lang::app.shop.title') }}
@endsection


<style>
    .table{
        padding: 10px;
    }
</style>
    

@section('content-wrapper')
    <div class="container">

        <div class="main">

            <div class="extend-container">

                <div class="extend-block">
                
                    <div class="hero-image" style="background: #fff; padding: 0 15px;">
                        <h2 style="margin-top: 20px;">{{ __('career_lang::app.shop.title') }}</h2>
                    </div>

                    @inject('careerGrid','Itec\Career\DataGrids\ShopCareerDataGrid')

                    {!! $careerGrid->render() !!}

                </div>

            </div>

        </div>

    </div>


    @include('shop::layouts.footer.footer')


    
@stop

@push('scripts')
    <script>
        var hammenu = $('.icon-menu-close');
        var header_bottom = $('.header-bottom');
        hammenu.removeClass('icon-menu-close');
        hammenu.addClass('icon-menu');
        header_bottom.css('display', 'none');
            
        
    </script>
@endpush






 --}}


@extends('shop::layouts.master')

@section('page_title')
    {{ __('career_lang::app.shop.title') }}
@endsection


@section('content-wrapper')

    <div class="container" id="agent">
        <div class="account-content">

            <div class="account-layout">


                <div class="account-head mb-10">

                    <span class="back-icon"><a href="{{ URL::previous() }}"><i class="icon icon-menu-back"></i></a></span>
                    <span class="account-heading">
                        <i class="fa fa-box-open"></i> 
                        {{ __('career_lang::app.shop.title') }}
                    </span>

                <div class="horizontal-rule"></div>
                </div>


                <div class="account-items-list">
                    <div class="account-table-content">
                        
                        @inject('careerGrid','Itec\Career\DataGrids\ShopCareerDataGrid')

                        {!! $careerGrid->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop







@section('footer')
    {!! view_render_event('bagisto.shop.layout.footer.before') !!}

        @include('shop::layouts.footer.index')

    {!! view_render_event('bagisto.shop.layout.footer.after') !!}
@endsection



	