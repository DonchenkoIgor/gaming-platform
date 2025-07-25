<header class="site-header">
    <div class="container">
        <span class="logo">Logo</span>
        <nav>
            <ul>
                <li><a href="{{route('main')}}">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>


                @auth
                    <li>
                        <ul class="dropdown">
                            <li><a href="{{route('profile')}}">Profile</a></li>
                            <li class="logout-item">
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('showRegistrationForm') }}">Register</a></li>
                    <li><a href="{{route('showLoginForm')}}">Log In</a></li>
                @endauth

                <li class="btn"><a href="{{route('contact')}}">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
