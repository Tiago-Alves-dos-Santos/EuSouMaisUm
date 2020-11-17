<html lang="pt-br">

@component('componentes.cabecalho')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="" id="galeria">

@component('componentes.menu')

@endcomponent

<div class="container">
    <div class="row mb-5 mt-3">
        <div class="col-md-12 d-flex justify-content-center"> <!-- Titulo -->
            <h1>Mais sobre o projeto</h1>
        </div>
    </div>

    <div class="row mb-5">
            <div class="col-md-6 mt-2">
                <img src="https://source.unsplash.com/random/150x150" class="img-fluid projetos-homepage" alt="erro" width="100%" height="100%" style="border-radius: 15px" />
            </div>
        <div class="col-md-6"> <!-- Info -->
            <div class="row">
                <h1>Objetivo</h1> <!-- publico alvo -->
            </div>
            <div class="row mt-3">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum</h4> <!-- sobre o projeto -->
            </div>
            <div class="row mt-3">
                <h5>Público Alvo</h5>
            </div>
            <div class="row mt-3">
            <a class="btn btn-azul" href="">Galeria</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">

        </div>
    </div>
</div>


@component('componentes.rodape')

@endcomponent


@component('componentes.scripts')

@endcomponent

</body>

</html>
