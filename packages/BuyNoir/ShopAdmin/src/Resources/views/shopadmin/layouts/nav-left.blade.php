
<div class="navbar-left">
    <ul class="nav flex-column">
        @foreach ($menu->items as $menuItem)
        <li class="nav-item {{ $menu->getActive($menuItem) }}">
            <a class="nav-link " href="{{ count($menuItem['children']) ? current($menuItem['children'])['url'] : $menuItem['url'] }}">
                <span class="nav-icon {{ $menuItem['icon-class'] }}"></span>
                <span>{{ trans($menuItem['name']) }}</span>
            </a>
        </li>
        @endforeach

       
    </ul>

</div>