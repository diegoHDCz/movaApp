<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>Plasmators assimilant in audax hamburgum! Sunt animalises perdere teres, altus calceuses. </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="Blue"/>
    <meta charset="UTF-8"/>
    <meta name="description" content="Camerarius, raptus devatios inciviliter anhelare de festus, clemens luna. "/>
    <meta name="author" itemprop="MMPX"/>

    <!-- Adicionar Favicon em todas as versões -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- Tags facebook -->
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:url" content="virundum"/>
    <meta property="og:title"
          content="Vortexs sunt byssuss de placidus visus. Potus diligenter ducunt ad alter navis. ">
    <meta property="og:site_name" content="Candidatus ">
    <meta property="og:description"
          content="Ubi est albus pars? Cum mortem favere, omnes habitioes promissio grandis, dexter elevatuses. ">
    <meta property="og:type" content="website"/>

    <!-- Links & Scripts -->
    <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    @toastr_css


    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="16x16" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="32x32" type="image/svg">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.svg')}}" sizes="48x48" type="image/svg">

    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="384x384" href="{{asset('images/Frame.svg')}}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('images/Frame.svg')}}">

    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('lightbox/css/lightbox.css')}}"/>
</head>
<body>
<nav>
    <div class="main-wrapper">
        <div class="flex-container">

            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">

    </ul>
</div>

@yield('content')



<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
</script>
</html>

