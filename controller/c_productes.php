<?php
    include_once __DIR__.'/../model/m_categories.php';
    $id = $_GET['id'];
    $productes = getProducteId($id);
    //var_dump($productes);
    include_once __DIR__.'/../view/v_productes.php';
?>