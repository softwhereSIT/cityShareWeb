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
    <!--<link rel="stylesheet" href="view/css/style_standard.css">-->
    <link rel="stylesheet" href="css/style_addAtributos.css"/>
    <link rel="stylesheet" href="css/style_standard_cms.css"/>

</head>

<body>

<section id="dv_principal">
    <?php include_once('menu_lateral_cms.php');?>
    <main>
        <div id="dv_titulo">
            <h1>Adicionar Atributos</h1>
        </div>
        <form name="frm_cadastro_atb" method="post" action="addAtributo_view.php">
            <div id="dv_cadastro">
                <div id="dv_tabela">
                    <div class="dv_texto">
                        <label for="in-atributo" class="texto">
                            Novo Atributo
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="text" name="in-atributo" class="input">
                    </div>

                    <div id="dv_botao">

                        <input type="submit"  name="in-cadastrar" id="btn_cadastrar">

                    </div>
                </div>
            </div>
        </form>
    </main>
</section>
<?php include_once('rodape_cms.php');?>
</body>
</html>