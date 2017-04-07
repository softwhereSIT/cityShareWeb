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

    <link rel="stylesheet" href="css/style_cat_especificos.css"/>
    <link rel="stylesheet" href="css/style_standard_cms.css"/>

</head>
<body>

<section id="dv_principal">
    <?php include_once('menu_lateral_cms.php');?>
    <main>
        <div id="dv_titulo">
            <h1> Adicionar os Atributos Especificos de cada Categoria </h1>
        </div>
        <form name="frm_cat_atributo" method="post" action="categoria_especificos.php.php">
            <div id="dv_cadastro">
                <div id="dv_tabela">


                    <div class="dv_texto">
                        <label for="in-cargo" class="texto">
                            Categoria
                        </label>
                    </div>
                    <div class="dv_input">
                        <select name="in-cargo" class="input">
                            <option>Selecione a Categoria</option>
                        </select>
                    </div>

                    <div id="dv_atributos_texto">
                        <label for="in-atributo" class="legenda_atributos">
                            Atributos Específicos
                        </label>
                    </div>

                    <div class="dv_check">

                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>
                    </div>
                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>
                    </div>
                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                    <div class="dv_check">
                        <input type="checkbox" name="in-cat_atributo" />
                        <label for="in-cat_atributo" class="texto_atributo">
                            Quantidade de Rodas
                        </label>

                    </div>

                </div>
                <input type="submit" name="btn-cadastrar" class="botao" value="Cadastrar">
                <a href=""> <p> Visualizar Cadastros</p></a>
            </div>
        </form>
    </main>
</section>
<?php include_once('rodape_cms.php');?>
</body>
</html>