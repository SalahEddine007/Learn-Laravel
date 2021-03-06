 

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand w3-container w3-center w3-animate-left" href="{{ url('/') }}">
                         Learn Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav  w3-center w3-animate-top">
                          <li ><a href="/" class="w3-hover-teal w3-medium">Home</a></li>
                          <li><a href="/about" class=" w3-hover-teal w3-medium">About</a></li>
                          <li><a href="/posts" class="w3-hover-teal w3-medium">Posts</a></li>
                          <li><a href="/posts/create" class="w3-hover-teal w3-medium">Create post</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" class="w3-hover-teal w3-medium">Login</a></li>
                            <li><a href="{{ route('register') }}" class="w3-hover-teal w3-medium">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#"  class="dropdown-toggle w3-center w3-animate-right" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                   <li><a href="/dashboard" class="w3-hover-teal w3-medium">Dashboard</a></li>              
                                    <li>
                                        <a href="{{ route('logout') }}" class="w3-hover-teal w3-medium"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>




 