<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">

            <li class="{{active_route_set('home')}}">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="{{active_route_set('about')}}">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li><li class="nav-item">
                <a class="nav-link" href="#">Artisans</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Laravel.com</a>
                    <a class="dropdown-item" href="#">Laravel.io</a>
                    <a class="dropdown-item" href="#">Laracasts</a>
                    <a class="dropdown-item" href="#">Larajobs</a>
                    <a class="dropdown-item" href="#">Laravel News</a>
                    <a class="dropdown-item" href="#">Larachats</a>
                </div>
            </li>
            <li class="{{active_route_set('contact')}}">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>

    </div>
</nav>
