<head>
    {{-- Configurações da pagina  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Fim configurações da pagina  --}}
    {{-- titulo da pagina  --}}
    <title>Eu sou mais um</title>
    {{--  animate css  --}}
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.in.css"/>
    {{-- bootstrap cdn  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- css da pagina  --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/componentes/menu.css') }}"/>
    {{-- Jquery 3.5.1 versao comprimida  --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    {{-- conteudo dinamico de cabeçalho  --}}
    {{$slot}}
    <script src="{{asset('js/main.js')}}"></script>
</head>
