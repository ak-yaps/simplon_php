<?php

/**
 * Fonction de debug provoquant la fin du programme
 *
 * Affiche un print_r ou var_dump formaté sur une valeur ou expression
 *
 * @since 0.1
 * @param  mixed  $val  valeur ou expression à deboguer
 * @param  integer $mode [description]
 * @return void    RAS
 */
function debug($val, $mode = 0) {
    echo '<pre style="background:#' . substr(md5(rand()), 0, 6) . '">';
    if ($mode === 1) {
        var_dump($val);
    } else {
        print_r($val);
    }
    echo "</pre>";
}

/**
 * Fonction de debug provoquant la fin du programme
 *
 * Affiche un print_r ou var_dump formaté sur une valeur ou expression
 * puis lance une instruction exit
 *
 * @since 0.1
 * @param  mixed   $val  valeur ou expression à deboguer
 * @param  integer   $mode si précisé, lance var_dump, sinon print_r
 * @return void    RAS
 */
function debugX($val, $mode = 0) {
    echo '<pre style="background:#' . substr(md5(rand()), 0, 6) . '">';
    if ($mode === 1) {
        var_dump($val);
    } else {
        print_r($val);
    }
    echo "</pre>";
    exit;
}
