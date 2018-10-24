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

<?php if(isset($user)): ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col" >
  <input type="hidden" name="id" value="<?php echo $user->id ?>">
  <label for="">NOM</label>
  <input type="text" name="name" value="<?php echo $user->name ?>" required>
  <label for="">PRENOM</label>
  <input type="text" name="lastname" value="<?php echo $user->lastname ?>" required>
  <label for="">AGE</label>
  <input type="number" name="age" value="<?php echo $user->age ?>" min="1" max="140">
  <label for="">MAIL</label>
  <input type="email" name="mail" value="<?php echo $user->mail ?>">
  <div class="f-row">
    <input type="submit" name="update_user" value="edit user" class="btn">
  </div>
</form>
<?php endif; ?>

</body>
</html>
