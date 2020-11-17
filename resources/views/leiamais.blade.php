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
            <h1>{{ $projeto->Nome_Projeto }}</h1>
        </div>
    </div>

    <div class="row mb-5">
            <div class="col-md-6 mt-2">
                <img src="data:image/png;base64,{{ base64_encode($projeto->blogo_projeto) }}" class="img-fluid projetos-homepage" alt="{{ $projeto->Nome_Projeto }}"  width="100%" height="100%" style="border-radius: 15px"/>

            </div>
        <div class="col-md-6"> <!-- Info -->
            <div class="row">
                <h1>Objetivo</h1> <!-- publico alvo -->
            </div>
            <div class="row mt-3">
                    <h4>{{ $projeto->Objetivo_projeto }}</h4>
            </div>
            <div class="row mt-3">
                <h5>Público Alvo: {{ $projeto->Publico_Alvo }}</h5>
            </div>
            <div class="row mt-3">
            <a class="btn btn-azul" href="{{route('projeto.viewGaleria', ['id' => $projeto->idTbProjeto])}}">Galeria</a>
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
