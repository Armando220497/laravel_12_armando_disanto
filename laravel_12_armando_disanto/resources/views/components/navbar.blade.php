<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">I miei Articoli</a>
                </li>
               
               

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LogIn</a>
                    </li>
                @endguest

                @auth
              
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benvenuto {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="submit nav-link">LogOut</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
