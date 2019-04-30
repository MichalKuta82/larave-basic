<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
      <a class="navbar-brand" href="#">Acme</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{ Request::is('messages') ? 'active' : '' }}">
            <a class="nav-link" href="/messages">Messages</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li> 
        </ul>
      </div>  
  </div>
</nav>