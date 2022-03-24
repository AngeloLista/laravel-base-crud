<header>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Comics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link @if (Route::currentRouteName() === 'home') active @endif" href="{{ route('home') }}">Home</a>
            <a class="nav-item nav-link  @if (Route::currentRouteName() === 'comics.index' || Route::currentRouteName() ===  'comics.show' ) active @endif" 
            href="{{ route('comics.index')}}">Comics</a>
            <a class="nav-item nav-link @if (Route::currentRouteName() === 'comics.create') active @endif" href="{{ route('comics.create')}}">Create</a>
          </div>
        </div>
      </nav>
</header>