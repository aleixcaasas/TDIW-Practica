<ul class="menu_categories" style="grid-area: menu_categories">
    <?php foreach($categories as $categoria): ?>
        <li class="linkCategoria" id="<?php echo $categoria[id]?>" href="index.php?accio=categoria=<?php echo $categoria[id] ?>">
            <a><?php echo $categoria['nom'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>