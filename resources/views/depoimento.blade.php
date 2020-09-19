<html lang="pt-br">

@component('componentes.cabecalho')

@endcomponent


<body class="primary-color" id="depoimentos">

    @component('componentes.menu')
    @endcomponent
    <div class="container" style="background-color: aquamarine;border-radius: 15px;">
        <h1 class="title-container">Depoimentos</h1>
        <div class="jumbotron">
            <h2>Depoimento 1</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/1280x720/3da2d1/FFFFFF?text=16:9" alt="imagem" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend augue eget felis accumsan, id egestas augue laoreet. Etiam bibendum lectus enim, eget facilisis sapien laoreet eget. Praesent vel urna congue, tincidunt justo sit amet, fermentum urna. Phasellus vel arcu ut leo aliquet ullamcorper sed ut neque. Quisque efficitur metus id sapien blandit, id varius tellus interdum. Pellentesque ante elit, placerat vel urna non, dictum sollicitudin purus. Nullam sit amet feugiat eros, at porta sapien. Fusce pretium erat ut metus tincidunt, ac cursus lectus feugiat.
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <h2>Depoimento 2</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/1280x720/3da2d1/FFFFFF?text=16:9" alt="imagem" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend augue eget felis accumsan, id egestas augue laoreet. Etiam bibendum lectus enim, eget facilisis sapien laoreet eget. Praesent vel urna congue, tincidunt justo sit amet, fermentum urna. Phasellus vel arcu ut leo aliquet ullamcorper sed ut neque. Quisque efficitur metus id sapien blandit, id varius tellus interdum. Pellentesque ante elit, placerat vel urna non, dictum sollicitudin purus. Nullam sit amet feugiat eros, at porta sapien. Fusce pretium erat ut metus tincidunt, ac cursus lectus feugiat.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer font-small blue pt-4">
        <div class="footer-copyright text-center py-3">
            Copyright &copy; <a style="color: white;" href="/"> DoeMais</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    @component('componentes.scripts')

    @endcomponent


</body>

</html>
