 <header>
    <div class="nav d-flex ">
      <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="">
      </div>
      <div>
        <ul class="nav_links p-0 m-0">
          <a href="{{ route('home') }}">COMICS</a>
          <a href="{{ route('movies') }}">MOVIES</a>
          <a href="{{ route('news') }}">NEWS</a>
          <li>CHARACTERS</li>
          <li>TV</li>
          <li>GAMES</li>
          <li>VIDEOS</li>
          <li>FANS</li>
          <li>SHOP</li>
        </ul>
        <ul class="nav_links p-0 m-0">
          <a href="{{ route('admin') }}">ADMIN</a>
        </ul>

      </div>
    </div>
  </header>