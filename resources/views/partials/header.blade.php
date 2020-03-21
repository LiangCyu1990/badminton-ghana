<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
        <a href="{{route('home')}}"><img src="img/logo.png" alt="Logo"></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Play</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Club Renewal&School</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Events</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#hotels">Gallery</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">Donate</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">Sponsors</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#buy-tickets">MemberRegister</a></li>
      </ul>
    </nav>
  </div>
</header>
