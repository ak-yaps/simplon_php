<?php
/*
les injections SQL @Computerphile :
https://www.youtube.com/watch?v=jKylhJt
 */
include "utility.php";

$db = connectDB("localhost", "test", "root","");

if (isset($_GET["get_users"])) {
  $sql = "SELECT * FROM users";
  $exec = $db->query($sql);
  $users = $exec->fetchAll(PDO::FETCH_OBJ);
}

if (isset($_GET["id"])) {
  $user = getUser($_GET["id"]);
}

if (isset($_POST["update_user"])) {}

if (isset($_POST["delete_users"]) &&
  isset($_POST["delete_user_ids"]) &&
  count($_POST["delete_user_ids"])) {
    deleteUser();
  }

if (isset($_POST["create_user"])) {
  createUser();
}

function getUser($id) {
  global $db;

  $sql = "SELECT * FROM users WHERE id = :id";
  $statement = $db->prepare($sql);
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $check = $statement->execute();
  return $statement->fetch(PDO::FETCH_OBJ);
}
function getUsers() {
  $sql = "SELECT * FROM users";
}
function deleteUser() {
  global $db;

    foreach ($_POST["delete_user_ids"] as $id) {
      $sql = "DELETE FROM users WHERE id = :id";
      $statement = $db->prepare($sql);
      $statement->bindParam(":id", $id, PDO::PARAM_INT);
      $res = $statement->execute();
      $msg_crud = ($res === true) ? "suppression ok" : "soucis suppression";
    }
}

function createUser() {
  global $db;
  $sql = "INSERT INTO users (name, lastname, mail, age)
  VALUES (:name, :lastname, :mail, :age)";

  $age = (int)$_POST["age"];
  $age = $_POST["age"] !== "" ? $_POST["age"] : null;
  $mail = $_POST["mail"] !== "" ? $_POST["mail"] : null;

  $statement = $db->prepare($sql);
  $statement->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
  $statement->bindParam(":lastname", $_POST["lastname"], PDO::PARAM_STR);
  $statement->bindParam(":mail", $mail, PDO::PARAM_STR);
  $statement->bindParam(":age", $age, PDO::PARAM_STR);
  $res = $statement->execute();
  $msg_crud = ($res === true) ? "insertion ok" : "soucis à l'insertion";
}
function updateUser() {
  global $db;

  $sql = "UPDATE users SET lastname = :lastname, name = :name, age = :age, mail = :mail WHERE id = /id";

  $age = $_POST["age"] !== "" ? (int)$_POST["age"] : null;
  $mail = $_POST["mail"] !== "" ? $_POST["mail"] : null;

  $statement = $db->prepare($sql);
  $statement->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
  $statement->bindParam(":lastname", $_POST["lastname"], PDO::PARAM_STR);
  $statement->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
  $statement->bindParam(":mail", $_POST["mail"], PDO::PARAM_STR);
  $statement->bindParam(":age", $_POST["age"], PDO::PARAM_INT);
  $check = $statement->execute();
  header("Location: index.php");
}
 ?>
