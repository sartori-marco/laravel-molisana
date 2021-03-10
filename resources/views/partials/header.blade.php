<header>
  <div class="logo">
    <img src="{{ asset('img/logo.png')}} " alt="logo immagine">
  </div>
  <div class="menu">
    <nav>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('prodotti') }}">Prodotti</a></li>
        <li><a href=" {{ url('news') }} ">News</a></li>
      </ul>
    </nav>
  </div>
</header>
