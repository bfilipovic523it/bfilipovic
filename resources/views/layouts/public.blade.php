<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Eduka - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

    <style>
        body {
          min-height: 100vh;
        }

        .sidebar {
          min-width: 220px;
          max-width: 220px;
          background-color: #343a40;
          color: white;
        }

        .sidebar a {
          color: white;
          text-decoration: none;
        }

        .sidebar a:hover {
          background-color: #495057;
          display: block;
        }

        .main-content {
          padding: 20px;
          width: 100%;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3" style="position: fixed; height: 100vh; overflow-y: auto;">
            <div class="d-flex align-items-center mb-3">
              <img src="{{ asset('images/logo.png') }}" alt="Eduka Logo"
              class="img-fluid me-2" style="height: 5em; width: auto;">
              <h4 class="m-0 text-white"><b>Eduka</b></h4>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('public.pocetna') }}" class="nav-link text-white">
                        <i class="fas fa-home me-2"></i> Početna
                    </a>
                </li>
                <li>
                    <a href="{{ route('public.ponuda') }}" class="nav-link text-white">
                        <i class="fas fa-book-open me-2"></i> Katalog
                    </a>
                </li>
                <li>
                    <a href="{{ route('public.kontakt') }}" class="nav-link text-white">
                        <i class="fas fa-envelope me-2"></i> Kontakt
                    </a>
                </li>
                <li>
                  <a href="{{ route('admin.index') }}" class="nav-link text-white">
                    <i class="fas fa-user-tie me-2"></i> Admin panel
                  </a>
                </li>
                <li>
                  <a href="{{ route('public.profil') }}" class="nav-link text-white">
                    <i class="fa-regular fa-user me-2"></i> Moj Profil
                  </a>
                </li>

                @if(Auth::check())
                  <li>
                    <a href="{{ route('logout') }}" onclick="w3_close()" class="nav-link text-white">
                      <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                  </li>
                @else
                  <li>
                    <a href="{{ route('login') }}" onclick="w3_close()" class="nav-link text-white">
                      <i class="fas fa-sign-in-alt me-2"></i> Login
                    </a>
                  </li>
                @endif
            </ul>
        </div>

        <div class="main-content flex-grow-1" style="margin-left: auto; padding-left: 250px;">
            @yield('content')
        </div>
    </div>

    <footer class="footer w3-container" style="height: 100px; display: flex; align-items: center; justify-content: center; margin-top: auto; background-color:#0d6efd;">
        <p class="text-center m-0" style="font-size: 1rem; color: white;">
          Bogdan Filipović IT 5/23
        </p>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
