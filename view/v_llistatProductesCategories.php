<section id="categoria" class="<?php echo $productes[0][id]?>" style="grid-area: destacados" >
    <ul>
        <h2> <?php echo $productes[0][nomc]?> </h2>
        <div>
            <?php foreach($productes as $seleccion): ?>
                <li id="pr_<?php echo $seleccion['idp']?>" >
                    <img src="<?php echo $seleccion['imatge']?>"height="250px">
                    <p class="etiqueta_categoria"> <?php echo $seleccion['nom'] ?> </p>
                </li>
            <?php endforeach; ?>
        </div>
    </ul>
</section>

