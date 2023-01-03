<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css">
    <title>Amandine Delaire, developpeuse web</title>
</head>


<body id="page-top" onload="translate('en','lng-tag')">

<!--HEADER -->
<?php include_once 'partials/header.php' ?>

<!--- First Project -->
<div class="container figma bd-grid">


    <section class="Projet1 section" id="projet1">
        <h2 class="section-title" lng-tag="figma_title"></h2>
        <br>
        <h4 lng-tag="figma_show"></h4>
        <br>
        <h5 lng-tag="figma_zoning"></h5>
        <br>
        <img src="assets/zoning_projet1.PNG" alt="" >
        <br>
        <h5 lng-tag="figma_step"></h5>
        <br>
        <img src="assets/home_projet1.PNG" alt="">
        <br>
        <h5 lng-tag="figma_form"></h5>
        <br>
        <img src="assets/formulaire_projet1.PNG" alt="">
        <br>
        <h5 lng-tag="figma_mobil"></h5>
        <br>
        <img src="assets/responsive.PNG" alt="">
        <br>
    </section>
</div>

<!-- FOOTER -->
<?php include_once 'partials/footer.php' ?>

<script src="js/translate.js"></script>
<script src="js/index.js"></script>
</body>
</html>