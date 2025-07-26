
<li class="nav-item">
    <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.users') }}" class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }} {{ Request::is('dashboard/users/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.teams') }}" class="nav-link {{ Request::is('dashboard/teams') ? 'active' : '' }} {{ Request::is('dashboard/teams/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog"></i>
        <p>Team Details</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('dashboard/index') ? 'active' : '' }} {{ Request::is('dashboard/index/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info"></i>
        <p>Meta Data</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('dashboard/index') ? 'active' : '' }} {{ Request::is('dashboard/index/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>Abouts Data</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.products') }}" class="nav-link {{ Request::is('dashboard/products') ? 'active' : '' }} {{ Request::is('dashboard/products/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list"></i>
        <p>Products & Technologies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.markets') }}" class="nav-link {{ Request::is('dashboard/markets') ? 'active' : '' }} {{ Request::is('dashboard/markets/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Markets</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.news') }}" class="nav-link {{ Request::is('dashboard/news') ? 'active' : '' }} {{ Request::is('dashboard/news/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>News</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.events') }}" class="nav-link {{ Request::is('dashboard/events') ? 'active' : '' }} {{ Request::is('dashboard/events/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>Events</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.success-stories') }}" class="nav-link {{ Request::is('dashboard/success-stories') ? 'active' : '' }} {{ Request::is('dashboard/success-stories/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-trophy"></i>
        <p>Success Stories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.clients') }}" class="nav-link {{ Request::is('dashboard/clients') ? 'active' : '' }} {{ Request::is('dashboard/clients/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-handshake"></i>
        <p>Clients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.testimonials') }}" class="nav-link {{ Request::is('dashboard/testimonials') ? 'active' : '' }} {{ Request::is('dashboard/testimonials/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-comment-alt"></i>
        <p>Testimonials</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.information-center') }}" class="nav-link {{ Request::is('dashboard/information-center') ? 'active' : '' }} {{ Request::is('dashboard/information-center/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>Information Center</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.help-center') }}" class="nav-link {{ Request::is('dashboard/help-center') ? 'active' : '' }} {{ Request::is('dashboard/help-center/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-question-circle"></i>
        <p>Help Center/FAQ</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.statistics') }}" class="nav-link {{ Request::is('dashboard/statistics') ? 'active' : '' }} {{ Request::is('dashboard/statistics/*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>Statistics</p>
    </a>
</li>


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
