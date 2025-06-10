 <!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>

@if(Auth::user()->role == 'admin')
<li class="nav-item">
    <a href="{{ route('dashboard.users') }}" class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }} {{ Request::is('dashboard/users/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Users</p>
    </a>
</li>
@endif

@if(Auth::user()->role == 'admin')
<li class="nav-item">
    <a href="{{ route('dashboard.products') }}" class="nav-link {{ Request::is('dashboard/products') ? 'active' : '' }} {{ Request::is('dashboard/products/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list"></i>
        <p>Products</p>
    </a>
</li>
@endif

@if(Auth::user()->role == 'admin')
<li class="nav-item">
    <a href="{{ route('dashboard.markets') }}" class="nav-link {{ Request::is('dashboard/markets') ? 'active' : '' }} {{ Request::is('dashboard/markets/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Markets</p>
    </a>
</li>
@endif


@if(Auth::user()->role == 'admin')
<li class="nav-item">
    <a href="{{ route('dashboard.messages') }}" class="nav-link {{ Request::is('dashboard/messages') ? 'active' : '' }} {{ Request::is('dashboard/messages/*') ? 'active' : '' }}">
        <i class="nav-icon far fa-envelope"></i>
        <p>
            Messages
            @if($unresolvedmessagecount > 0)
            ({{ $unresolvedmessagecount }})
            @endif
        </p>
    </a>
</li>
@endif

<li class="nav-item">
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Logout</p>
    </a>
</li>
