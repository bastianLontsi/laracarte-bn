<nav class="navbar navbar-expand-md navbar-default static-top bg-default">
    <a class="navbar-brand {{ set_active_route('root_path') }}" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('root_path') }}">
                <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ set_active_route('about_path') }}">
                <a class="nav-link" href="{{ route('about_path') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisants</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com">{{ config('app.name') }}</a>
                    <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.io">Larachat</a>


                </div>
            </li>
            <li class="nav-item {{ set_active_route('contact_path') }}">
                <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
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
