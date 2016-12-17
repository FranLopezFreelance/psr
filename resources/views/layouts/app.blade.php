<!DOCTYPE html>
<html lang="es" itemscope itemtype="<a href="http://schema.org/Article">http://schema.org/Article</a>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Social Sharing -->
    <meta name="description" content="Descripcion de pagina. No sueperar los 155 caracteres." />

<!-- Google Authorship and Publisher Markup -->
<link rel="author" href=" <a href="blank">https://plus.google.com/114861984015791900708/posts"/</a>>
<link rel="publisher" href=” <a href="blank">https://plus.google.com/114861984015791900708"/</a>>

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Titulo">
<meta itemprop="description" content="Descripcion">
<meta itemprop="image" content="http://www.example.com/image.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@PSRepublica">
<meta name="twitter:title" content="Proyecto Segunda República">
<meta name="twitter:description" content="Una alternativa al sistema. Seguinos. Informate.">
<meta name="twitter:creator" content="@author_handle">
<!-- Twitter summary card with large image. Al menos estas medidas 280x150px -->
<meta name="twitter:image:src" content="http://www.example.com/image.html">

<!-- Open Graph data -->
<meta property="og:title" content="Titulo" />
<meta property="og:type" content="article" />
<meta property="og:url" content=" http://www.example.com/" />
<meta property="og:image" content=" http://example.com/image.jpg" />
<meta property="og:description" content="Descripcion" />
<meta property="og:site_name" content="Nombre de la web, i.e. Moz" />
<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
<meta property="article:section" content="Seción de la web" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="ID de Facebook " />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
