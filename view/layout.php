<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <title>City Share</title>

        <meta charset="UTF-8">
        <meta name="description" content="Locação de Veículos">
        <meta name="keywords" content="City, Share, City Share, Compartilhar, Locação, Veículos, Empréstimo"/>
        <meta name="author" content="City Share"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="icon" href="view/img/logo_cs_ico.fw.ico" type="image/x-icon" />

        <!-- Estilo da página -->
        <link rel="stylesheet" href="view/css/style_standard.css">
        <link rel="stylesheet" href="view/css/jquery-ui.css">
        <link rel="stylesheet" href="view/css/style_login_sup.css">

        <!-- Sript da página -->
        <script src="view/js/jquery.min.js"></script>
        <script src="view/js/jquery-ui.min.js" charset="UTF-8"></script>
        <script src="view/js/app_standard.js"></script>

    </head>

    <body>
        <!-- Area modal do login de adm do site-->
        <?php include_once("login_super_view.php");?>

        <!-- Cabeçalho da página contendo o menu superior-->
        <?php include_once("menu_superior_view.php");?>

        <!-- Conteudo principal da pagina-->
        <?php include_once ("router.php"); ?>
        
        <!-- Rodapé -->
        <?php include_once("rodape_view.php"); ?>
    </body>

    
</html>



