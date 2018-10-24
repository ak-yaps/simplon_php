<?php include("inc/head.php");
debug(getUsers());
// $persos = getUsers();
?>


<div id="app">
    <h1 class="title"><?php echo $config->title_syncro ?></h1>
    <p>
Sur cette page, on récupère les informations depuis PHP.
Cette prcédure est effectuée de manière synchrone :  au chargement de la page, les données sont téléchargés depuis le serveur et afficher au moment du "paint" de la page par le navigateur.
    </p>
    <h2 class="title">Liste des personnages</h2>
    <ul class="list persos">
      <?php foreach (getUsers() as $key => $perso){
        //($persos as $key => $perso)
        // debug($key);
        // debug($perso);
        echo "<li class=\"perso\">
              <span>$perso->name</span>
              <span>$perso->genre</span>
              </li>";
      }
      ?>

    </ul>

    <!-- <div id="controls_1" class="controls">
        <input class="input" type="text">
        <input id="get_data_php" class="btn" type="submit" value="get data php">
        <input id="get_data_api" class="btn" type="submit" value="get data api">
        <input id="" class="btn" type="submit" value="post php">
    </div> -->

</div>

<?php include("inc/footer.php") ?>
