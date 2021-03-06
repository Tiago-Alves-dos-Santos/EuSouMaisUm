<div class="fundo-sidemenu"></div>
<div class="fundo"></div>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark-scroll">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo-navbar.png') }}" class="img-fluid" />
        </a>
        <button id="side-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-expanded="true" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item" id="inicio">
          <a class="nav-link" href="{{ route('homepage') }}">Inicio <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://bloco6.mcolins.com.br/form_tbprojeto/form_tbprojeto.php">Criar Campanha</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://bloco6.mcolins.com.br/form_pessoa/form_pessoa.php">Cadastrar Pessoa</a>
      </li>
        <li class="nav-item" id="depoimentos">
          {{-- {{ route('view.depoimento') }} --}}
        <a class="nav-link" href="{{route('view.sobre-nos')}}">Sobre</a>
        </li>
        {{--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Associar-se
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Criar Conta</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Outros</a>
          </div>
        </li>  --}}
      </ul>

    </div>
    </div>
  </nav>


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

<script>
    let id = $('body').attr('id');
    for (const element of document.getElementsByTagName('li')) {
        if (element.id == id) {
            element.classList.add('active');
        }
    }
</script>
