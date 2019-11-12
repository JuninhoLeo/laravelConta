<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</head>

<style>
    body {
        margin: 0px;
        padding: 0px;
    }

    h1#cabecalho {
        text-align: center;
        font-size: 50px;
    }

    a {
        color: white;
        text-decoration: none;
    }

    header {
        margin-top: 0px;
        background: #6c757d;
        height: 109px;
    }

    #nav-direita {
        float: right;
    }

    #nav-direita li {
        margin: 30px;
    }

    #nav-esquerda li {
        display: inline-block;
        margin: 0px;
    }

    #nav-esquerda {
        float: left;
    }

    ul li {
        list-style: none;
    }

    footer {

        clear: both;
        background: #666;
        margin-top: 10px;
        text-align: center;
        padding: 10px;
        color: white;
    }

    a#btn {
        margin-left: 20px;
    }
</style>

<body>
    <header>

        <ul id="nav-direita">
            <li> <a class="btn btn-secondary" href="">Logout</a></li>
        </ul>

        <h1 id="cabecalho">Trabalho de Laravel</h1>

        <ul id="nav-esquerda">
            <li><a id="btn" class="btn btn-secondary" href="{{ route('bancos.index') }}">Bancos</a></li>
            <li><a class="btn btn-secondary" href="{{ route('clientes.index') }}">Clientes</a></li>
            <li><a class="btn btn-secondary" href="{{ route('backup.index') }}">Transaçoes</a></li>
        </ul>

    </header>

    <div class="container col-md-12">
        @yield('content')
    </div>


</body>

</html>
