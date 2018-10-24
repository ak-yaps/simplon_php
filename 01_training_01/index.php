<?php
echo "hello world";
echo "<p>".(123 + 23)."</p>";
echo "<p>retrouvez la documentation du langage sur <a href='http://php.net/docs.php' target='_blank'> ce site </a></p>";
echo "<br>";
//*************************************************************
// les types de données:
// http://php.net/manual/fr/language.types.php
//
// Boolean
// Entiers
// Décimaux
// String
// Tableaux
// Objets
// Null
// Ressources
//
// *************************************************************
// NOTE :
// le point virgule marquant la fin d'une instruction est OBLIGATOIRE!
//
// **************************************************************
// VARIABLES :

$bool = true || false;
$str = 'string';
$int = 100;
$dec = 1.1;
$arr = array(1,2,3,4); // [val1, val2, val3]
$arr_multi_dimension = array(
  "cle_1" => "hello",
  "cle_2" => "world",
  "cle_3" => "PHP",
  "cle_4" => "재"
);

$obj = new stdClass();
$obj->prop1 = "Yo";
$obj->prop2 = "Annyeong";
$obj->prop3 = array("yes", "papa","!");
$vide = null;

// ****************************************************************************

// différences entre guillemets doubles et simples
$v1 = "interprétée";
$v2 = "non interprétée";
echo "avec guillemets doubles, une variable est $v1<br>";
echo 'avec guillemets simples, une variable est $v2<br>';

// échapper un caractère
$ma_phrase = 'je suis un texte contenant une apostrophe t\'as vu<br>';
echo $ma_phrase;

// ****************************************************************************
// Constantes

define("c1", "je suis la constant c1");
define('foo', 'foo');
define("bar", "bar");
echo "***************************************";
echo "valeur des constantes => <br>";
echo "<ul>";
echo "<li>".c1."</li>";
echo "<li>".foo."</li>";
echo "<li>".bar."</li>";
echo "</ul>";
echo "<hr>";

// *****************************************************************************
// outil de débogage
//
// void var_dump
// mixed print_r
//
// TD1 => utiliser print_r et/ou var_dump pour afficher le type des variables déclarées ce dessus
//
// ****************************************************************************
// LES CONDITIONS




?>
