<?php session_start(); ?>

<div id="detallProducte">
    <h2 id="nomProd"
        style="grid-area: nomCamiseta"> <?php echo htmlentities($producte[0][nom], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </h2>
    <img id="imgProd" style="grid-area: imatgeCamiseta" src="<?php echo $producte[0][imatge] ?>" height="377"
         width="auto">
    <label id="descProd"
           style="grid-area: descripcioCamiseta"> <?php echo htmlentities($producte[0][descripcio], ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </label>
    <label id="preuProd" style="grid-area: preuCamiseta"> <?php echo $producte[0][preu] ?> </label>
    <button id="botoProd"
            style="grid-area: botoCamiseta" <?php if (isset($_SESSION['email'])) { ?> onclick="insertCart(<?php echo $producte[0][id] ?>)" <?php } ?>>
        <img src="../img/icons/shopping_icon.png">
</div>
