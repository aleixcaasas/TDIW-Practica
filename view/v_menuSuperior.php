<div id="capçalera">
    <header style="grid-area: info_superior">
        <p>Pàgina web creada per Aleix Casas Barco (1604174) i Èric Subirana Garcia (1603465) - Tecnologies de Desenvolupament d'Internet i Web 2022-23</p>
    </header>

    <div class="menu_complert">
        <section class="logo_inici" style="grid-area: logo_inici">
            <a href="../r_pagina_principal.php"> <img src="img/logo.png" height="95px"/></a>
        </section>

        <section>
            <nav class="menu">
                <ul class="menu_categories" style="grid-area: menu_categories">

                    <li class="categoria" href="index.php?action=categoria">
                        <a>CATEGORIES</a>
                    </li>

                </ul>
            </nav>
        </section>

        <section class="menu_superior" > <!--style="grid-area: menu_superior" style="grid-area: categories"!-->
            <form class="menu_buscar" style="grid-area: menu_buscar">
                <input class="barra_buscar" type="text" placeholder="¿Qué producto quieres buscar?">
                <input type="button" class="boto_buscar" value="BUSCAR">
            </form>
        </section>

        <section class="menu_user">
            <ul id="llista" class="etiqueta_categoria">

                <li id="amaga"><a href="/index.php?accio=login">Ingresar</a></li>
                <li id="amaga"><a href="/index.php?accio=registre">Registro</a></li>
                <li id="amaga"><a href="/index.php">Mi Cuenta</a></li>
            </ul>
                <img src="../img/icons/user_icon.png" id="button-hide-elements" height="50" width="auto">
                <img src="../img/icons/shopping_icon.png" id="button-hide-elements" height="50" width="auto">
                <script type="text/javascript">
                    $(document).ready(function (){
                        $('#llista li').hide();
                        $('#button-hide-elements').click(function (){
                            $('#llista li#amaga').toggle('slow');
                        });

                    });
                </script>

        </section>

    </div>
</div>



