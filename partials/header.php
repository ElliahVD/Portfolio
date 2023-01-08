<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/index.css">
    <title>Amandine Delaire, developpeuse web</title>
    <script src="/js/home.js" defer></script>
</head>
<body onload="translate('en','lng-tag')">
<!-- HEADER -->
<nav class="navbar navbar-expand-lg  l-header ">
    <div class="container d-flex justify-content-space-between">
        <a class="navbar-brand" href="https://amandinedelaire.fr#home">Amandine Delaire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon"></div>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
            <ul class="block-lng navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger lng" id="enTranslator" href="javascript:void(0);">EN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger lng" id="frTranslator" href="javascript:void(0);">FR</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item-attr">
                    <a class="nav-link active" aria-current="page" href="#home" lng-tag="home"></a>
                </li>
                <li class="nav-item-attr">
                    <a class="nav-link " aria-current="page" href="#about" lng-tag="about"></a>
                </li>
                <li class="nav-item-attr">
                    <a class="nav-link " aria-current="page" href="#skills" lng-tag="skills"></a>
                </li>
                <li class="nav-item-attr">
                    <a class="nav-link " aria-current="page" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item-attr">
                    <a class="nav-link " aria-current="page" href="#contact" lng-tag="contact"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
