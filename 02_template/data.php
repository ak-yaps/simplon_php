<?php
include "libs/utility.php";

$config = (object)[];
$config->title_app = "Template I";
$config->title_home = "Home (async)";
$config->title_about = "About (sync)";
$config->title_contact = "Contact (sync/async)";

function getNames() {
    return [
        ["Ralph", 0],
        ["Seya", 1],
        ["Megamind", 0],
        ["Mario", 2],
        ["Link", 2],
        ["Totoro", 1],
        ["Guts", 1]
    ];
}

function getGenres() {
    return [
        0 => "Animé",
        1 => "Manga",
        2 => "Jeu video",
    ];
}

function setPersos($persos, $genres) {
    $users = array();
    for ($i = 0; $i < count($persos); $i += 1) {
        // count en php === persos.length en js
        $users[] = (object)[];
        // équivaut à =>
        // $users[] = new stdClass();
        $users[$i]->name = $persos[$i][0];
        $users[$i]->genre = $genres[$persos[$i][1]];
    }
    return $users;
}

function getUsers() {
    return setPersos(getNames(), getGenres());
}

function getUsersAjax() {
    $users = setPersos(getNames(), getGenres());
    echo json_encode($users);
}


if (isset($_GET["ajax"]) && $_GET["ajax"] === "persos") {
    getUsersAjax();
}
