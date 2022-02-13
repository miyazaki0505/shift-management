<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="/">Shift Manageeeer</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    <li class="nav-item"><a href="" class="nav-link">something</a></li>
                    <li class="nav-item">{!! link_to_route('logout', 'Logout', [], ['class' => 'nav-link']) !!}</a></li>
                @else
                    <li class="nav-item">{!! link_to_route('signup', 'Sign Up', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</a></li>
                @endif
            </ul>
        </div>

    </nav>

</header>
