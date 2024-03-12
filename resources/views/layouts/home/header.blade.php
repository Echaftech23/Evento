@php
$user = Auth::user();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand sidebar-brand-text mx-3" href="index.html">You<span>Event.</span></a>

        <!-- Topbar Search -->
        <form action="" class="d-none d-sm-inline-block navbar-search" style="margin-inline: 30px; width: 250px;">
            <div class="input-group">
                <input type="text" id="search-input" class=" bg-gray border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="background-color: #eceff3; width: 84%; padding-left: 15px; outline: none">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
            @can('MyEvent', \App\Models\Event::class)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('events.index')}}"  id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Events
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="eventDropdown">
                    @can('viewAny', \App\Models\Event::class)
                        <a class="dropdown-item" href="{{route('organizers.statistics')}}">
                            <i class="fas fa-tachometer-alt fa-sm fa-fw mr-2fa-sm fa-fw mr-2"></i>
                            Dashboard
                        </a>
                    @endcan
                    @can('viewAny', \App\Models\Reservation::class)
                        <a class="dropdown-item" href="{{route('reservations.index')}}">
                            <i class="fas fa-ticket-alt fa-sm fa-fw mr-2"></i>
                            My Tickets
                        </a>
                    @endcan
                    <a class="dropdown-item" href="{{route('events.index')}}">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Buy Ticket
                    </a>
                </div>
            </li>
            @endcan

            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>

            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>

            @can('create', \App\Models\Event::class)
                @if (Auth::user()->roles->first()->name == "Admin")
                    <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link">Dashboard</a></li>
                @else
                    <li class="nav-item cta mr-md-2" style="position: relative;">
                        <a href="{{route('events.create')}}" class="nav-link bg-danger">
                            Add Event
                        </a>
                    </li>
                @endif
            @endcan

            @can('create', \App\Models\Establishment::class)
                <li class="nav-item cta mr-md-2" style="position: relative;">
                    <a class="nav-link bg-danger dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Become Organizer
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right animated--grow-in" style="position: absolute; top: 100%; right: 0; max-width: 500px; width: 450px" aria-labelledby="userDropdown">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Organizer Informations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('establishments.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Company">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Comapny Description</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            @endcan

            @guest
                <li class="nav-item cta">
                    <a href="{{route('login')}}" class="nav-link cursor-pointer mr-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buy Ticket</a>
                </li>
            @endguest
        </ul>

        @auth
            <div class="dropdown">
                <a class="nav-item dropdown-toggle mx-2" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" width="40px" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/profile">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                        >
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        @endauth
        </div>
    </div>
</nav>
