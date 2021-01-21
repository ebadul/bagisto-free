{{-- @extends('admin::layouts.master') --}}
@extends('shopadmin_view::shopadmin.layouts.master')

@section('content-wrapper')
    <div class="inner-section row">
        <div class=" col-3 aside-div">
            @include ('shopadmin_view::shopadmin.layouts.nav-aside')
        </div>
        <div class="content-wrapper col-9 body-side">

            @include ('shopadmin_view::shopadmin.layouts.tabs')

            @yield('content')

        </div>
        
    </div>
@stop