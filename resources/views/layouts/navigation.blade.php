<nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Clinic Booking System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('dashboard.index') ? 'active' : ''}}" href="{{route('dashboard.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('booking.index') ? 'active' : ''}}" href="{{route('booking.index')}}">Booking</a>
                </li>

            </ul>
            <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('user.index')}}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-warning" type="submit">LOGOUT</button>
            </form>

        </div>
    </div>
</nav>