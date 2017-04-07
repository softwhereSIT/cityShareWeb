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

        <link rel="stylesheet" href="css/style_standard_cms.css"/>
        <!-- Estilo da página -->

    </head>
    <body>
        <section id="dv_principal">
            <?php include_once('menu_lateral_cms.php');?>
            <main>
                <?php require_once("router.php");?>
            </main>
        </section>

            <?php include_once('rodape_cms.php');?>
    </body>
</html>