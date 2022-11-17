<?php
    // index.php

    $accio = $_GET['accio'] ?? NULL;

    switch ($accio) {
        case 'producte':
            include __DIR__.'/controller/c_productes.php';
            break;
        case 'categories':
            include __DIR__.'/controller/c_llistarCategories.php';
            break;
        case 'temporadaactual':
            include __DIR__.'/controller/c_temporada_actual.php';
            break;
        case 'login':
            include __DIR__.'/r_login.php';
            break;
        case 'registre':
            include __DIR__.'/r_registre.php';
            break;
        default:
            include __DIR__.'/r_pagina_principal.php';
            break;
    }
?>