<html lang="pt-br">

@component('componentes.cabecalho')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="" id="galeria">

@component('componentes.menu')

@endcomponent

<div class="container mg-pct">
    <div class="row mb-3 mt-3">
        <div class="col-md-12 d-flex justify-content-center"> <!-- Titulo -->
            <h1>Sobre Nós</h1>
        </div>
    </div>

    <div class="row mb-5">
            <div class="col-md-12">
                <img src="https://source.unsplash.com/random/1060x450" class="img-fluid" alt=""  width="100%" height="450px" style="border-radius:15px"/>

            </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12"> <!-- Info -->
            <h1>Sistemas de Informação - 6º Bloco</h1> <!-- publico alvo -->
            <div class="">
                    <h5>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Integrantes</h1>
        </div>
        @php
        $i = 0;
        @endphp
        @while (!feof($arquivo))
        @php
            $linha = fgets($arquivo);

            $img = array(
                "arthur.jpeg",
                "bruno.jpeg",
                "joelves.jpeg",
                "jordan.jpeg",
                "adriano.jpeg",
                "tiago.jpg",
            );
        @endphp
        <div class="col-md-12">
        <h3>
            <img src="{{asset("img/participantes/".$img[$i++])}}" class="img-fluid rounded-circle mr-2" style="width: 50px; height:50px;" alt="sem foto"/>
            {{$linha}}
        </h3>
        </div>
        @endwhile
    </div>

    <div class="row">
        <div class="col-md-12 mb-5 d-flex justify-content-center">

        </div>
    </div>
</div>


@component('componentes.rodape')

@endcomponent


@component('componentes.scripts')

@endcomponent

</body>

</html>
