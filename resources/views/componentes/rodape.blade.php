<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="logo"><a href=""> <img src="{{ asset('img/logo-navbar.png') }}" class="img-fluid"/> </a></h2>
            </div>
            <div class="col-sm-2">
                <h5>Inicio</h5>
                <ul>
                <li><a href="{{route('homepage')}}">Início</a></li>
                    <li><a href="{{route('view.criar_campanha')}}">Criar Campanha</a></li>
                <li><a href="{{route('view.sobre-nos')}}">Sobre</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Sobre-nós</h5>
                <ul>
                <li><a href="{{route('view.sobre-nos')}}">Informações</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Suporte</h5>
                <ul>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Telefones</a></li>
                    <li><a href="">Chat</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="social-networks">
                    <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
                <a href="">
                    <a href class="btn btn-default">Contato</a>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2020-{{ date('Y') }} Copyright - SI(6º Bloco)</p>
    </div>
</footer>
