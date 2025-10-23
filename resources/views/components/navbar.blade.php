<nav class="navbar navbar-expand-lg navbar-dark cafe-bg shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}">
            <i class="bi bi-cup-hot-fill"></i> Kedai Sedulur
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if(isset($username))
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" 
                           href="{{ route('dashboard', ['username' => $username]) }}">
                            <i class="bi bi-house-door"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengelolaan') ? 'active' : '' }}" 
                           href="{{ route('pengelolaan', ['username' => $username]) }}">
                            <i class="bi bi-list-ul"></i> Pengelolaan Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" 
                           href="{{ route('profile', ['username' => $username]) }}">
                            <i class="bi bi-person-circle"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>