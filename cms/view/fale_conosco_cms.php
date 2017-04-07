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
    <link rel="stylesheet" href="css/style_faleconosco_cms.css"/>
    <link rel="stylesheet" href="css/style_standard_cms.css"/>

</head>

    <body>

        
        <section id="dv_principal">
            <?php include_once('menu_lateral_cms.php');?>
            <main>
                <div id="dv_titulo">
                    <h1>Fale Conosco</h1>
                </div>
    
                <div id="dv_busca">
                    <div class="dv_input_legenda">
                        <label for="in-busca" class="legenda"> Busca por: </label>
                    </div>
                    
                    <div class="dv_input">
                        <input type="text" name="in-busca" class="in-busca" />
                    </div>
    
                    <div class="dv_input_legenda">
                        <label for="in-busca" class="legenda"> Organizar por: </label>
                    </div>
    
                    <div class="dv_input">
                        <select name="in-select" class="in-busca">
    
    
                        </select>
                    </div>
    
                </div>
                
                <div id="dv_tabela">
                    <div id="dv_linha_dados">
                        
                        <div class="dv_dados">
                            <p class="texto"> Nome </p>
                        </div>
                        
                        <div class="dv_dados">
                            <p class="texto"> Email </p>
                        </div>
                        
                        <div class="dv_dados">
                            <p class="texto"> WhatsApp</p>
                        </div>
                        
                        <div class="dv_msg">
                            <p class="texto"> Mensagem </p>
                        </div>
                    
                        <div class="dv_opcao">
                            <p class="texto"> Opções </p>
                        </div>
                    </div>
                    
                    <!-- ***  REGISTROS DO FALE CONOSCO
                    <div id="dv_linha_dados">
                        
                        <div class="dv_dados">
                            <p class="texto"> <?php ?> </p>
                        </div>
                        
                        <div class="dv_dados">
                            <p class="texto"> <?php ?> </p>
                        </div>
                        
                        <div class="dv_dados">
                            <p class="texto"> <?php ?> </p>
                        </div>
                        
                        <div class="dv_msg">
                            <p class="texto"> <?php ?> </p>
                        </div>
                    
                        <div class="dv_opcao">
                            <p class="texto">  </p>
                        </div>
                    </div>
                    
                    -->
                </div>
            </main>
        </section> 
        <?php include_once('rodape_cms.php');?>
    </body>
</html>