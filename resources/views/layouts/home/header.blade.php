@php
$user = Auth::user();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand sidebar-brand-text mx-3" href="index.html">You<span>Event.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">My Event</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            @if($user->roles()->where('id', 2)->exists())
                <li class="nav-item cta mr-md-2" style="position: relative;">
                    <a href="{{route('events.create')}}" class="nav-link bg-danger">
                        Create Event
                    </a>
                </li>
            @else

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
            @endif
            <li class="nav-item cta">
                <a class="nav-link cursor-pointer mr-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buy Ticket</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
