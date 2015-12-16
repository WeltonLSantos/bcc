<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Welton</title>

</head>
<body>
<!-- TOPO DO TEMPLATE-->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Brand</span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{url('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!--CORPO DO SITE-->
<div class="content">
    @yield('content')
</div>
<!--INÍCIO DA MINHA FOOTER-->
<footer>
    <style rel="stylesheet">
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

   <div class="footer container">

           <p class="text-muted">Place sticky footer content here.</p>

   </div>
</footer>
<link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
</body>
</html>