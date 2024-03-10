<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">You<span class="text-dark">Event</span></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @if(Auth::user()->roles->first()->name == "Admin")

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Statistics</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('eventsRequest.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Requests</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Users</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Categories</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cities.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Cities</span></a>
        </li>

    @elseif(Auth::user()->roles->first()->name == "Organizer")
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Statistics</span></a>
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Establishment</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('events.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>My Events</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('reservations.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Reservations</span>
            </a>
        </li>

    @endif

    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
