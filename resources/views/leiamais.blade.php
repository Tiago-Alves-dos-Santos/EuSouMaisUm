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
            <a class="btn btn-azul" href="{{route('projeto.viewGaleria', ['id' => $projeto->idTbProjeto])}}">Galeria</a>

            <a class="btn btn-success" href="">Coleta</a>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <h2>Objetivo</h2>
                </div> <!-- publico alvo -->
                <div class="col-md-12">
                    <h4>{{ $projeto->Objetivo_projeto }}</h4>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Público Alvo: </h2>
                <h4>{{ $projeto->Publico_Alvo }}</h4>
            </div>
        </div>
        
        </div>
        


        <div class="row mt-3 d-flex flex-wrap">
            <div class="col-md-6">
                <h2> Local Entrega: </h2>
                <h4>{{ $projeto->blocal_entrega }}</h4>
            </div>
            <div class="col-md-6">
                <h2> Objetos Doados: </h2>
                <h4>{{ $projeto->bobjetos_doado }}</h4>
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
