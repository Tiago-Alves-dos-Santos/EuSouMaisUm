<html lang="pt-br">

@component('componentes.cabecalho')

@endcomponent


<body class="primary-color" id="criar-campanha">

    @component('componentes.menu')
    @endcomponent
            <div class="criar-campanha mg-pct" style="min-height:600px; background-color: white; padding: 50px">
                <div class="container-fluid">
                    <div class="item-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center text-black my-5">
                                    <h1 class="titulo-criarcampanha"> Qualquer Título</h1>
                                    <div class="my-4 mx-5">
                                        <div class="text-center text-black my-5">
                                            <h3>Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip
                                                ex ea commodo consequat. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt
                                                ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip
                                                ex ea commodo consequat.</h3>
                                        </div>
                                    </div>
                                    <a type="button" href="http://bloco6.mcolins.com.br/form_tbprojeto/form_tbprojeto.php" class="btsubmeter-campanha">Submeter Campanha</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @component('componentes.modal', ['id' => 'modalcriar-campanha', 'titulo' => 'Login'])
            <form action="" method="Post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira o email">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            @endcomponent
    @component('componentes.rodape')

    @endcomponent
    <!-- Footer -->

    @component('componentes.scripts')

    @endcomponent


</body>

</html>
