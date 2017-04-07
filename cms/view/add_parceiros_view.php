    <!DOCTYPE html>

    <html lang="pt-BR" xmlns="http://www.w3.org/1999/html">
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
        <link rel="stylesheet" href="css/style_add_parceiros.css"/>
        <link rel="stylesheet" href="css/style_standard_cms.css"/>
        <link rel="stylesheet" href="css/style_standard_menu_cms.css"/>

    </head>

    <body>
    <section id="dv_principal">
        <?php include_once('menu_lateral_cms.php');?>
        <main>

            <?php include_once('menu_cms.php');?>
            <div id="dv-central">

                <div class="dv-txt-class">Add.Parceiros </div>
                <form>
                    <div id="dv-preencher">
                        <input type="text" name="nome_beneficio"  placeholder="Nome Do Benefício" size="30" value="">
                        <textarea rows="8" cols="40" maxlength="500000" placeholder="Descrição" name="sobrefilme" value=""></textarea>
                        <input type="file" name="flefoto"/>
                        <input type="submit" name="btn_enviar" value="ENVIAR">
                </form>
            </div>
            </div>
        </main>
    </section>
    <?php include_once('rodape_cms.php');?>
    </body>
    </html>