<html lang="pt-br">

@component('componentes.cabecalho')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="" id="galeria">

@component('componentes.menu')

@endcomponent

<div class="container">
    <div class="row mb-5 mt-3">
        <div class="col-md-12 d-flex justify-content-center">
            <h1>Galeria</h1>
        </div>
    </div>

    <div class="row mb-5">
        @forelse($galeria as $g)
            <div class="col-md-4 mt-2">
                <img src="data:image/png;base64,{{ base64_encode($g->bFoto) }}" class="img-fluid projetos-homepage" alt="erro" width="100%" height="100%" />

            </div>
        @empty
        <div class="col-md-12 d-flex justify-content-center text-danger">
            <h1>O projeto não possui fotos em sua galeria!</h1>
            <div style="margin-bottom: 230px"></div>
        </div>
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$galeria->links()}}
        </div>
    </div>
</div>


@component('componentes.rodape')

@endcomponent


@component('componentes.scripts')

@endcomponent

</body>

</html>
