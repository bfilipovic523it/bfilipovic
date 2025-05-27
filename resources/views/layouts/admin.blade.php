<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.index') }}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Urednički panel</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.listobuke') }}">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Obuke</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.listkategorije') }}">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Kategorije</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.listusers') }}">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Korisnici</span>
            </a>
        </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link" href="{{ route('public.pocetna') }}">Početna</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </nav>
            
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="sticky-footer bg-white mt-4">
            <div class="container my-auto text-center">
                <span>Bogdan Filipovic IT 5/23</span>
            </div>
        </footer>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/js/sb-admin-2.min.js"></script>

</body>
</html>