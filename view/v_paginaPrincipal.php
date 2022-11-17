<div class="llistat" id="a">
</div>


<div id="categoria" style="grid-area: destacados">
    <?php include_once __DIR__. "/../controller/c_llistarCategories.php"; ?>
</div>


<div class="fotosInici" >
    <div class="fila">
        <div class="columna">
            <img src="../img/inicial_barça.png" width="750" height="450">
        </div>
        <div class="columna">
            <img src="../img/inicial_madrid.jpg" width="750" height="450">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <img src="../img/inicial_city.jpg" width="750" height="450">
        </div>
        <div class="columna">
            <img src="../img/inicial_psg.jpg" width="750" height="450">
        </div>
    </div>
</div>


<div id="productesXCategoria" style="grid-area: destacados">
    <?php include_once __DIR__.'/../controller/c_productes_categories.php'; ?>

</div>


<div id="detall_producte">
    <?php //include_once __DIR__.'/../controller/c_productes.php'; ?>
</div>

<script>
    $(document).ready(function(){

        $("#categoria").hide();
        $(".fotosInici").show();
        $(".1").hide();
        $(".2").hide();
        $(".3").hide();

        $(".categoria").click(function(){
            $("#categoria").toggle('slow');
            $(".fotosInici").show();
            $(".1").hide();
            $(".2").hide();
            $(".3").hide();
        });

        $("#1").click(function(){
            $(".fotosInici").hide('slow');
            $(".1").show('slow');
            $(".2").hide('slow');
            $(".3").hide('slow');
        });

        $("#2").click(function(){
            $("#categoria").show('slow');
            $(".fotosInici").hide('slow');
            $(".1").hide('slow');
            $(".2").show('slow');
            $(".3").hide('slow');
        });

        $("#3").click(function(){
            $("#categoria").show('slow');
            $(".fotosInici").hide('slow');
            $(".1").hide('slow');
            $(".2").hide('slow');
            $(".3").show('slow');
        });

        $("#pr_1").click(function (){
            $("#detall_producte").show('slow').load("/../index.php?accio=producte&id=1");
            $(".1").hide();
            $("#1, #2, #3").click(function (){
                $("#detall_producte").hide('slow');
            });
            $("#1").click(function (){
                $(".1").show('slow');
            });
        });

        $("#pr_2").click(function (){
            $("#detall_producte").show('slow').load("/../index.php?accio=producte&id=2");
            $(".1").hide();
            $("#1, #2, #3").click(function (){
                $("#detall_producte").hide('slow');
            });
            $("#2").click(function (){
                $(".2").show('slow');
            });
        });

    });
</script>


</head>
<body>

