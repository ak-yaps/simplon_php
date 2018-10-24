<?php

include_once dirname(__FILE__) . "./../../libs/utility.php";
include_once dirname(__FILE__) . "./../users/users-model.php";

$db = connectDB("127.0.0.1", "test", "root", "");

// $ids est un tableau contenant l'id de chaque facture à supprimer
function deleteBills($ids) {
    global $db;

$sql = "DELETE FROM bills where id = :id_bill";
$query = $db->prepare($sql);
$res = [];

forEach($ids as $id) {
  $query->bindParam("id_bill", $id, PDO::PARAM_INT);
  $tmp = $query->execute();
  $res[] = (object)[
    "status" => $tmp,
    "id" => $id
  ];
}
return $res;
}

// insère une nouvelle ligne de facture avec les infos du post
function createBill() {
    global $db;
    $sql = "INSERT INTO bills (id_user, total, created_at) VALUES (:id_user, :total, :created_at)";

    $query = $db->prepare($sql);
    $query->bindParam(":id_user", $_POST["id_user"], PDO::PARAM_STR);
    $query->bindParam(":total", $_POST["total"], PDO::PARAM_INT);
    $query->bindParam(":created_at", $_POST["created_at"], PDO::PARAM_STR);
    $res = $query->execute();
    return $db->lastInsertId();
}

// sélectionne une ligne de bills correspondant à l'id passé en paramètre
function getBill($id) {
    global $db;
    $sql = "SELECT * FROM bills WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->bindParam(":id", $id, PDO::PARAM_INT);
    $status = $statement->execute();
    $bill = $statement->fetch(PDO::FETCH_OBJ);
    //récupérer les informations de l'use facturé...
    $bill->user = getUser($bill->id_user);
    return $bill;
}

// récupère toutes les lignes de bills
function getBills() {
    global $db;
    $sql = "SELECT * FROM bills";
    $statement = $db->query($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

function updateBill($id_bill, $total, $updated_at) {
  global $db;
  $sql = "UPDATE bills SET total = :total, created_at = :upated_at WHERE id = :id";

  $id_bill = (int)$id_bill;

  $query = $db->prepare($sql);
  $query->bindParam(":id", $id_bill, PDO::PARAM_INT);
  $query->bindParam(":total", $total, PDO::PARAM_STR);
  $query->bindParam(":updated_at", $updated_at, PDO::PARAM_STR);

  return $query->execute();
}
