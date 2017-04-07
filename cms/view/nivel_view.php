<!DOCTYPE html>

<html lang="pt-BR" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>City Share</title>

    <meta charset="UTF-8">
    <meta name="description" content="Locação de Veículos">
    <meta name="keywords" content="City, Share, City Share, Compartilhar, Locação, Veículos, Empréstimo">
    <meta name="author" content="City Share">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Estilo da página -->

    <link rel="stylesheet" href="css/style_nivel.css"/>
    <link rel="stylesheet" href="css/style_standard_cms.css"/>
    <link rel="stylesheet" href="css/style_standard_menu_cms.css"/>

</head>
<body>

<section id="dv_principal">
    <?php include_once('menu_lateral_cms.php');?>
    <main>
        <?php include_once('menu_cms.php');?>
        <form name="frm_registros_nivel" method="post" action="nivel_view.php">

            <div id="dv_registros">
                <div id="dv_titulo_botao">

                    <h2 id="titulo"> Nivel </h2>

                    <div id="dv_botao">

                        <a href="addNivel_view.php"> <img src="img/add.png"> <a/>

                    </div>

                    <div>
                        <div id="dv_tabela">

                            <div id="dv_linha_dados">

                                <div class="dv_dados">
                                    <p class="texto"> Nivel </p>
                                </div>

                                <div class="dv_opcao">
                                    <p class="texto"> Opções </p>
                                </div>


                            </div>

                            <!--  *** Registros
                             <div id="dv_linha_dados">

                                <div class="dv_dados">
                                    <p class="texto">  </p>
                                </div>

                                <div class="dv_opcao">
                                    <p class="texto">  </p>
                                </div>
                             -->
                        </div>
                    </div>
        </form>
    </main>
</section>
<?php include_once('rodape_cms.php');?>
</body>
</html>