<div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
    <div class="container">
      <a href="" class="navbar-brand">Netronic</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="#home" class="nav-link" data-animate="scrolling">@lang('menu.home')</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link" data-animate="scrolling">@lang('menu.about')</a>
          </li>
          
          <li class="nav-item">
            <a href="#blog" class="nav-link" data-animate="scrolling">@lang('menu.blog')</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link" data-animate="scrolling">@lang('menu.contact')</a>
          </li>
        </ul>
        <ul class="nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('language.switch', 'en') }}" class="btn btn-fab btn-theme no-shadow">En</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('language.switch', 'uz') }}" class="btn btn-fab btn-theme no-shadow">Uz</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('language.switch', 'ru') }}" class="btn btn-fab btn-theme no-shadow">Ru</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
