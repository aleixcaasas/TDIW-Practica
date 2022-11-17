<?php
    include __DIR__."/../model/m_categories.php";

    $categories = getCategories();

    foreach($categories as $category):
        $productes = getProducteCategoria($category[id]);
        include __DIR__."/../view/v_llistatProductesCategories.php";
    endforeach;
?>

