<html lang="pt-br">

@component('componentes.cabecalho')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="" id="depoimentos">

    @component('componentes.menu')

    @endcomponent
    <div class="col-md-12 mg-pct" style="min-height: 700px; background: no-repeat center/cover url('img/gatinhos.jpg'); display: flex;">
        <div class="container col-md-8" style="padding: 25px;background-color: rgba(0, 0, 0, 0.75);">
            <h2 style="color: white;">Novo depoimento</h2>
            <h5 style="word-wrap: break-word ; color: white; text-align: justify;">Conte-nos sua experiência com o projeto "Eu sou mais um". Fique à vontade para enviar imagens relacionadas à uma campanha. </h5>
            <div class="col-md-12">
                <textarea style="padding: 5px;;border-radius: 15px;width: 100%; height: 350px; resize: none;"></textarea>
            </div>

            <div class="col-md-4" style="margin-top: 25px;">
                <button type="button">Adicionar Imagem</button>
            </div>
            <div class="col-md-3" style="float:right;margin-top: 25px; text-align: right;">
                <button type="button">Enviar</button>
            </div>
        </div>
    </div>

    @component('componentes.rodape')
    @endcomponent

    @component('componentes.scripts')
    @endcomponent


</html>
