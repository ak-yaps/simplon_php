<?php include("inc/head.php"); ?>

<div id="app" class="page">
    <h1 class="title"><?php echo $config->title_about ?></h1>
    <p class="intro">
        Sur cette page, on récupère les infos depuis PHP. Cette procédure est effectuée de manière synchrone : à chaque rechargement, les données sont téléchargées depuis le serveur et affichées au moment du "paint" de la page par le navigateur.
    </p>
    <div id="personnages">
        <h2 class="title">Listes des personnages</h2>
        <ul class="list persos">
        <?php foreach(getUsers() as $key => $perso) {
            echo "<li class=\"perso\">
                    <span class=\"name\">$perso->name</span>
                    <span class=\"genre\">$perso->genre</span>
                </li>";
        } ?>
    </div>
    </ul>
</div>

<?php include("inc/footer.php") ?>
