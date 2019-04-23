<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        @guest
            <a class="navbar-brand" href="{{ url('/interest') }}">
                <img class="logo" alt="V2O logo" src="{{ asset('img/tialablogo.png') }}" style="width:30%; height:30%">

            </a>
        @else
            <a class="navbar-brand" href="{{ url('/profile') }}">
                <img class="logo" alt="V2O logo" src="{{ asset('img/tialablogo.png') }}" >

            </a>
        @endguest
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('interest.create') }}">{{ __('Create New Record') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{url('/interest')}}">{{ __('View/Edit/Delete Record') }}</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('viewall') }}">{{ __('View All Records') }}</a>
                    </li>
                @else
                <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">Profile <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-i4em">
                            <a class="nav-link" href="/student">My Students</a>
                        </li>

                        <li class="nav-i4em">
                            <a class="nav-link" href="/timetable">All Classes</a>
                        </li>

                    </ul>

                    <li class="nav-item dropdown" style="list-style-type: none;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
