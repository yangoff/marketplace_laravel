<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Marketplace L6</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px;">
        <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
                @else
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(request()->is('admin/stores*')) active @endif">
                    <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas</a>
                </li>

                <li class="nav-item @if(request()->is('admin/products*')) active @endif">
                    <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
                </li>

                <li class="nav-item @if(request()->is('admin/categories*')) active @endif">
                    <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
                        <form action="{{route('logout')}}" class="logout" method="POST" style="display: none;"> @csrf </form>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">{{auth()->user()->name}}</span>
                    </li>
                </ul>
            </div>
                @endguest
        </div>
    </nav>
<div class="container-sm">
    @include('flash::message')
    @yield('content')
</div>
</body>
</html>
