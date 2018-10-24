<?php include("inc/head.php") ?>

<div id="app">
    <h1 class="title"><?php echo $config->title_home ?></h1>
    <p class="intro">
        <b>Intro :</b> Modifier le CSS pour rendre le header fixe.<br><br>
        <b>TP Burger :</b> coder deux modules navbar et burger (HTML/CSS/JS). Les intégrer à votre copie du template.<br><br> Un click sur l'icône burger toggle une navigation secondaire. L'icône burger à un état actif et non-actif (JS/CSS).<br><br> Utiliser une transition CSS pour afficher/masquer l'élément. La nav contient des liens vers les pages musique et profil.<br><br> Au click, un sous programme JS s'occupe d'empêcher le comporterment par défaut.<br><br>
        <b>PS :</b> nous chargeront ces pages en AJAX.<br>
    </p>
    <b>structure des modules :</b>
    <ul>
        <li>modules/burger/burger.html</li>
        <li>modules/burger/burger.js</li>
        <li>modules/burger/burger.css</li>
        <li>modules/navbar/nav.php</li>
        <li>modules/navbar/nav.js</li>
        <li>modules/navbar/nav.css</li>
    </ul>
    <p class="intro">
        TP ajaxPageLoad: Coming soon !
    </p>

    <div id="control_ajax" class="controls">
        <input class="input" type="text">
        <input id="get_data_php" class="btn" type="submit" value="get data php">
        <input id="get_data_api" class="btn" type="submit" value="get data api">
        <input id="" class="btn" type="submit" value="post php">
    </div>

</div>

<?php include("inc/footer.php") ?>
