<html lang="pt-br">

@component('componentes.cabecalho')

@endcomponent


<body class="" id="depoimentos">

    @component('componentes.menu')
    @endcomponent
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-md-6">
                <h1>Depoimentos</h1>
            </div>
            <div class="col-md-6 d-flex flex-row flex-wrap align-content-center justify-content-lg-end">
                <a href="/novo_depoimento" class="btn btn-azul">Adicionar+</a>
            </div>
            <div class="col-md-12">
                <div style="background-color: rgb(20, 69, 155); width: 100%; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2 mb-2">
            @for($i = 0; $i < 2; $i++)
                <div class="col-md-12">
                    @component('componentes.card_header')
                        
                    @endcomponent
                </div>
            @endfor
        </div>
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Navegação de página exemplo">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Próximo</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
    @component('componentes.scripts')

    @endcomponent


</body>

</html>
