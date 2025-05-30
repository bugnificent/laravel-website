<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('all_destinations')}}">Destinations</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Login</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{route('home')}}">Home</a></li>
                     <li><a href="{{route('about')}}">About</a></li>
                     <li><a href="{{route('all_destinations')}}">Destinations</a></li>
                     @if (Route::has('login'))
                     @auth
                     <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                     <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                     </li>
                     @else
                     <li><a href="{{route('login')}}">Login</a></li>
                     @endauth
                     @endif
                  </ul>
               </div>
            </div>
         </div>
         