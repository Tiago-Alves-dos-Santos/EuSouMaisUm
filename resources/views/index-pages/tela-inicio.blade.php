<html lang="pt-br">

@component('componentes.cabecalho')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
@endcomponent

<body class="primary-color" id="inicio">

    @component('componentes.menu')
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://source.unsplash.com/random/542x320" alt="img1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-md-6">
                <img src="https://source.unsplash.com/random/542x321" alt="img2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">
            Copyright &copy; <a style="color: white;" href="/"> DoeMais</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    @component('componentes.modal', ['id' => 'modalLogin', 'titulo' => 'Login'])
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

    @component('componentes.scripts')
    @endcomponent

</body>

</html>
