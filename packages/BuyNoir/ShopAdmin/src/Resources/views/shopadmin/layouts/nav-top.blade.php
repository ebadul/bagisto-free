<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  
    <div class="form-group has-search">
        <span class=" form-control-feedback search-icon"></span>
        <input type="text" class="form-control" placeholder="Search">
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 admin-logo-buynoir">
        <li class="nav-item d-none d-sm-block">
            <h2 class="text-white">BuyNoir</h2>
           {{-- <div class="navbar-top-left">
                <div class="brand-logo navbar-brand">
                    <a href="{{ route('admin.dashboard.index') }}">
                        @if (core()->getConfigData('general.design.admin_logo.logo_image'))
                            <img src="{{ \Illuminate\Support\Facades\Storage::url(core()->getConfigData('general.design.admin_logo.logo_image')) }}" alt="{{ config('app.name') }}" style="height: 40px; width: 110px;"/>
                        @else
                            <img src="{{ asset('vendor/webkul/ui/assets/images/logo.png') }}" alt="{{ config('app.name') }}"/>
                        @endif
                    </a>
                </div>
            </div> --}}
        </li>

        <li class="nav-item d-none d-xs-block"><a  href="#"><a href="{{ route('shop.home.index') }}" class="dropdown-item" >{{ __('admin::app.layouts.visit-shop') }}</a></a></li>
        <li class="nav-item d-none d-xs-block"><a href="{{ route('admin.account.edit') }}" class="dropdown-item" >{{ __('admin::app.layouts.my-account') }}</a></li>
        <li class="nav-item d-none d-xs-block"><a href="{{ route('admin.session.destroy') }}" class="dropdown-item" >{{ __('admin::app.layouts.logout') }}</a></li>

      </ul>
      <form class="d-flex  d-none d-sm-block">
            <li class="nav-item dropdown" style="list-style:none">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="name">
                        {{ auth()->guard('admin')->user()->name }}
                    </span>
                    <br />
                    <span class="role">
                        {{ auth()->guard('admin')->user()->role['name'] }}
                    </span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a  href="#"><a href="{{ route('shop.home.index') }}" class="dropdown-item" >{{ __('admin::app.layouts.visit-shop') }}</a></a></li>
                    <li><a href="{{ route('admin.account.edit') }}" class="dropdown-item" >{{ __('admin::app.layouts.my-account') }}</a></li>
                    <li><a href="{{ route('admin.session.destroy') }}" class="dropdown-item" >{{ __('admin::app.layouts.logout') }}</a></li>
                    <li><hr class="dropdown-divider"></li>
                    
                </ul>
            </li>
      </form>
    </div>
  </div>
</nav>

