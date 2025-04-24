<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ Vite::asset ('resources/img/dc-logo.png')}}" alt="Logo del Sito" width="50" height="50">
      </a>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            @php
                $navItems = config('navItems');
                // dd($navItems);
            @endphp
    
            @foreach ($navItems as $item)
                <li class="nav-item">
                    <a class="nav-link {{ $item['active'] ? 'active' : '' }}"
                       aria-current="{{ $item['active'] ? 'page' : '' }}"
                       href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
      
    </div>  
</nav>
