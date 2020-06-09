<html>

<head>
    <title>Projeto webII</title>
    <link rel="stylesheet" href="{{asset('js\bootstrap\css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('js\fontawesome\css\all.css')}}">

    <script src="{{asset('js\jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js\init.js')}}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="#">Projeto P2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="/fornecedor">FORNECEDORES</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/categoria">CATEGORIAS</a>
                </li>

                <ul class="nav nav-pills nav-stacked">
                <li class="nav-item active">
                    <a class="nav-link" href="/produto">PRODUTOS</a>
                </li>
                </ul>
                
                <li class="nav-item active">
                    <a class="nav-link" href="/cliente">CLIENTES</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/venda">VENDAS</a>
                </li>

               

            </ul>
        </div>
    </nav>

    <main class="container" style="...">
        @yield('conteudo')
    </main>
</body>

</html>