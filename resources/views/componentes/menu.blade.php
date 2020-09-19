<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="/">DoeMais</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="inicio">
                    <a class="nav-link" href="/">Início </a>
                </li>
                <li class="nav-item" id="campanhas">
                    <a class="nav-link" href="#">Campanhas</a>
                </li>
                <li class="nav-item" id="campanha">
                    <a class="nav-link" href="#">Criar campanha</a>
                </li>

                <li class="nav-item" id="depoimentos">
                    <a class="nav-link" href="/depoimentos">Depoimentos</a>
                </li>
                <li class="nav-item" id="doacoes">
                    <a class="nav-link" href="/doacoes">Doações</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modalLogin">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" >
                        Cadastre-se
                    </a>
                </li>
            </ul>



            <!-- Links -->
        </div>
        <!-- Collapsible content -->


    </nav>
    <script>
        let id = $('body').attr('id');
        for (const element of document.getElementsByTagName('li')) {
            if (element.id == id) {
                element.classList.add('active');
            }
        }
    </script>
</header>

