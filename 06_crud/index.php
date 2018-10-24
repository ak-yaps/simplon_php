<?php include "crud.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD 1</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 class="title">
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>">CRUD 1</a>
</h1>
<p>
  Créer les formulaires pour ajouter des users en base.<br>
  Les valeurs sont récupérées par le serveur PHP.<br>
  La connexion à la base est assurée par un objet PDO.<br>
  Option conseillée: préparer les requêtes SQL.<br>
  Option: proposer une version asynchrone du programme.<br>
</p>

<h2 class="title">Create</h2>
<?php if (isset($msg_crud)): ?>
  <p>
    <?php echo $msg_crud; unset($msg_crud); ?>
  </p>
<?php endif; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="f-col" method="post">
  <input type="text" name="name" placeholder="NOM" value="chose">
  <input type="text" name="lastname" placeholder="PRENOM" value="chose">
  <input type="number" name="age" placeholder="AGE" value="23" min="1" max="140" class="input" value="23">
  <input type="email" name="mail" placeholder="mail" value="example@domain.com">
  <div class="f-row">
    <input type="submit" name="create_user" value="create user" class="btn">
  </div>
</form>

<hr>

<h2 class="title">Read</h2>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="f-row">
  <input type="submit" name="get_users" value="get users" class="btn">
</form>

<?php if (isset($users)): ?>

<form action="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <h2 class="title">Delete</h2>
  <table id="users" class="tabler">
    <thead>
      <tr>
    <?php foreach ((array)$users[0] as $prop=>$value) {
        echo "<th>$prop</th>";
        // partir de users[0] pour boulcer sur les propriétés du premier objet du tableau users... le soucis c'est qu'il n'y a pas de for...in en php. juste foreach. donc il faudra convertir l'objet user en array avec un cast...
        // exe (bool)0 .... false
        } ?>
        <th>update</th>
        <th><input type="submit" id="delete_user" name="delete_user" value="delete"></th>
      </tr>
        </thead>
      <tbody>
        <?php foreach($users as $user) {
          echo "<tr>";
          foreach ((array)$user as $prop=>$val) {
            $col_name = isset($val) ? $val : "N.R";
            echo "<td>" . $col_name . "</td>";
          }
          echo "<td class=\"update\">
            <a class=\"tabler-btn\" href=\"edit-user.php?id=$user->id\">edit</a>
          </td>";
          echo "<td class=\"delete\">
          <input name=\"delete_user_ids[]\" type=\"checkbox\" value=\"$user->id\"/>
          </td>";
          }
          echo "</tr>";
          ?>
      </tbody>
    </table>
  </form>
<?php endif ?>
</body>
</html>
