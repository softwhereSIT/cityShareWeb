<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <title>City Share</title>

        <meta charset="UTF-8">
        <meta name="description" content="Locação de Veículos">
        <meta name="keywords" content="City, Share, City Share, Compartilhar, Locação, Veículos, Empréstimo"/>
        <meta name="author" content="City Share"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Estilo da página -->
        <link rel="stylesheet" href="view/css/style_standard.css">
        <link rel="stylesheet" href="view/css/style_home.css">
        <link rel="stylesheet" href="view/css/jquery-ui.css">
        <link rel="stylesheet" href="view/css/style_login_sup.css">
        <link rel="stylesheet" href="view/css/style_termos.css">
        <link rel="stylesheet" href="view/css/style_detalhes_veiculo.css">
        <link rel="stylesheet" href="view/css/style_detalhes_anuncuante.css">


        <!-- Sript da página -->
        <script src="view/js/jquery.min.js"></script>
        <script src="view/js/jquery-ui.min.js" charset="UTF-8"></script>
        <script src="view/js/app.js"></script>


    </head>

    <body>
        <!-- Area modal do login de adm do site-->
        <?php include_once("login_super_view.php");?>

        <!-- Area modal destinada aos termos de uso -->
        <?php include_once("termos_aceite_view.php"); ?>

        <!-- Area destinada ao detalhamento do veiculo -->
        <?php include_once("detalhes_veiculo_view.php"); ?>

        <!-- Cabeçalho da página contendo o menu superior-->
        <?php include_once("menu_superior_view.php");?>



        <!-- Slideshow localizado abaixo do menu-->
        <section id="sec-slider">
            <div id="dv-slider">
                <div id="dv-slider-next-prev">
                    <img id="img-prev" src="view/img/prev-next.png" alt="Voltar" title="Voltar"/>
                    <img id="img-next" src="view/img/prev-next.png" alt="Avançar" title="Avançar"/>
                </div>
                <div id="dv-borda-triangular">

                </div>
            </div>

            <!-- Area de cadastro -->
            <div id="dv-login-cadastro">
                <div id="dv-form-login-cadastro">
                    <div id="dv-form-conteudo">
                        <div id="dv-form-entrar">
                            <h2>ENTRAR</h2>
                            <form name="frm-entrar" method="post" action="router.php">
                            <div class="in-campos">
                                <div class="in-2-campos">
                                    <label for="in-entrar-email">E-MAIL</label>
                                    <input type="email" name="in-entrar-email" id="in-entrar-email" class="in-entrar" placeholder="E-mail">
                                </div>
                                <div class="in-2-campos">
                                    <label for="in-entrar-senha">SENHA</label>
                                    <input type="password" name="in-entrar-senha" id="in-entrar-senha" class="in-entrar" placeholder="Senha" minlength="8">
                                </div>
                            </div>

                                <input type="submit" id="btn-entrar" name="btn-entrar" value="ENTRAR" class="in-entrar">
                            </form>

                            <h2>OU</h2>
                            <h2>CADASTRE-SE</h2>
                        </div>

                        <div id="dv-form-cadastrar">
                            <form name="frm-cadastrar" method="post" action="router.php">
                                <div id="dv-frm-cadastrar-1" class="dv-frm-cadastrar">
                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                        <label for="in-cpf">PESSOA FÍSICA</label>
                                            <input type="radio" name="in-cpf_cnpj" id="in-cpf" value="cpf" class="cpf-cnpj">
                                            </div>
                                        <div class="in-2-campos">
                                            <label for="in-cnpj">PESSOA JURÍDICA</label>
                                            <input type="radio" name="in-cpf_cnpj" id="in-cnpj" value="cnpj" class="cpf-cnpj">
                                        </div>
                                    </div>
                                    <label for="in-cad-nome">NOME</label>
                                    <input type="text" name="in-cad-nome" id="in-cad-nome" class="in-entrar" placeholder="Nome Completo" minlength="4" title="Insira o seu nome completo!">

                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <label for="in-cad-senha">SENHA</label>
                                            <input type="password" name="in-cad-senha" id="in-cad-senha" class="in-entrar" placeholder="Senha" minlength="8" title="Digite uma senha com o mínimo de 8 caracteres">
                                        </div>

                                        <div class="in-2-campos">
                                            <label for="in-cad-conf-senha">CONFIRMAR SENHA</label>
                                            <input type="password" name="in-cad-conf-senha" id="in-cad-conf-senha" class="in-entrar" placeholder="Confirmar Senha" minlength="8" title="Confirme sua senha!">
                                        </div>
                                    </div>

                                    <div class="in-campos">
                                        <label for="in-cad-email">E-MAIL</label>
                                        <input type="email" name="in-cad-email" id="in-cad-email" class="in-entrar" placeholder="E-mail" title="Insira o seu endereço de e-mail!">
                                    </div>
                                    <input type="button" name="btn-continuar1" id="btn-continuar1" value="Continuar >>" class="in-entrar btn-avancar">
                                </div>

                                <div id="dv-frm-cadastrar-2" class="dv-frm-cadastrar">
                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <label for="in-tel">*TELEFONE</label>
                                            <input type="text" name="in-tel" id="in-tel" placeholder="(XX)XXXX-XXXX" maxlength="10" class="in-entrar" title="Insira o seu número de Celular!" required>
                                        </div>
                                        <div class="in-2-campos">
                                            <label for="in-cel">*CELULAR</label>
                                            <input type="text" name="in-cel" id="in-cel" placeholder="(XX)XXXXX-XXXX" maxlength="11" class="in-entrar" title="Insira o seu número de Telefone!" required>
                                        </div>
                                    </div>

                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <input type="button" class="btn-prev-next btn-voltar" value="<< Voltar">
                                        </div>
                                        <div class="in-2-campos">
                                            <input type="button" id="btn-continuar2" class="btn-prev-next btn-avancar" value="Continuar >>">
                                        </div>
                                    </div>
                                </div>

                                <div id="dv-frm-cadastrar-3" class="dv-frm-cadastrar">
                                    <div class="in-campos">
                                        <div class="in-3-campos">
                                            <label for="in-cep">*CEP</label>
                                            <input type="text" class="in-entrar" minlength="8" maxlength="8" name="in-cep" id="in-cep" title="O CEP deve conter 8 digitos!" required>
                                        </div>

                                        <div class="in-3-campos">
                                            <label for="in-num">*NUMERO</label>
                                            <input type="text" class="in-entrar" maxlength="9" name="in-num" id="in-num" title="Digite o número de correspondência!" required>
                                        </div>

                                        <div class="in-3-campos">
                                            <label for="in-complemento">COMPLEMENTO</label>
                                            <input type="text" class="in-entrar" maxlength="9" name="in-complemento" id="in-complemento">
                                        </div>

                                    </div>

                                    <div class="in-campos">
                                            <label for="in-logradouro">LOGRADOURO</label>
                                            <input type="text" class="in-unico" name="in-logradouro" id="in-logradouro" disabled>
                                    </div>

                                    <div class="in-campos">
                                        <label for="in-bairro">BAIRRO</label>
                                        <input type="text" class="in-unico" name="in-bairro" id="in-bairro" disabled>
                                    </div>

                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <label for="in-cidade">CIDADE</label>
                                            <input type="text" class="in-default" name="in-cidade" id="in-cidade" disabled>
                                        </div>
                                        <div class="in-2-campos">
                                            <label for="in-uf">UF</label>
                                            <input type="text" class="in-default" name="in-uf" id="in-uf" disabled>
                                        </div>

                                    </div>

                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <input type="button" class="btn-prev-next btn-voltar" value="<< Voltar">
                                        </div>
                                        <div class="in-2-campos">
                                            <input type="button" id="btn-continuar3" class="btn-prev-next btn-avancar" value="Continuar >>">
                                        </div>
                                    </div>
                                </div>

                                <!--
                                <div id="dv-frm-cadastrar-4" class="dv-frm-cadastrar">
                                    <div class="in-campos">
                                        <div class="in-3-campos">
                                            <label id="lbl-cpf_cnpj" for="in-cpf-cnpj">CPF</label>
                                            <input type="text" class="in-entrar" minlength="8" maxlength="8" name="in-cpf_cnpj" id="in-cpf_cnpj" required>
                                        </div>

                                        <div class="in-3-campos">
                                            <label for="in-cvv">CVV</label>
                                            <input type="text" class="in-entrar" maxlength="9" name="in-cvv" id="in-cvv" required>
                                        </div>

                                        <div class="in-3-campos">
                                            <label for="in-validade">VALIDADE</label>
                                            <input type="text" class="in-entrar" maxlength="9" name="in-validade" id="in-validade" required>
                                        </div>

                                    </div>

                                    <div class="in-campos">
                                        <label for="in-logradouro">NÚMERO DO CARTÃO</label>
                                        <input type="text" class="in-unico" name="in-logradouro" id="in-logradouro" required>
                                    </div>

                                    <div class="in-campos">
                                        <div class="in-2-campos">
                                            <input type="button" class="btn-prev-next btn-voltar" value="<< Voltar">
                                        </div>
                                        <div class="in-2-campos">
                                            <input type="button" class="btn-prev-next btn-avancar" value="Continuar >>">
                                        </div>
                                    </div>
                                </div>
                                -->
                                <div class="dv-frm-cadastrar" id="dv-frm-cadastrar-5">
                                    <div id="dv-termos_acordo">
                                        <a id="link-termos_uso" href="#termos_de_acordo">*Ler termos de Acordo</a>
                                    </div>

                                    <div class="in-campos" id="dv-termo-campo">
                                        <label for="in-termos">Li e concordo com os termos de acordo!</label>
                                        <input type="checkbox" name="in-termos" id="in-termos" title="Aceite os termos para prosseguir" required>
                                    </div>

                                    <input type="submit" id="btn-cadastrar" name="btn-cadastrar" value="Cadastrar" class="in-entrar" disabled>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Área de busca-->
        <section id="sec-buscar">
            <div id="dv-buscar-bg">
                <div id="dv-buscar">

                    <div id="dv-in-buscar">
                        <h3>ONDE E QUANDO DESEJA RETIRAR?</h3>

                        <form name="frm-buscar" action="router.php" method="post">
                        <div id="dv-form-buscar" class="in-campos">
                            <div class="in-3-campos">
                                <label for="in-local">LOCAL</label>
                                <span class="icon-default">P</span>
                                <input type="text" name="in-local" id="in-local" class="in-default"/>
                            </div>

                            <div class="in-3-campos">
                                <label for="in-data">DATA</label>
                                <span class="icon-default">c</span>
                                <input type="text" name="in-data" id="in-data" class="in-default"/>
                            </div>
                            <div class="in-3-campos">
                                <input type="submit" name="bnt-buscar" id="btn-buscar" value="Buscar">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Area principal de conteúdo do site-->
        <main role="main" id="main">

            <!-- Menu de categoria localizado na lateral esquerda do conteudo principal-->
            <?php include_once("menu_categoria_view.php");?>

            <!-- Area destinada aos veiculos para locação -->
            <section id="sec-veiculos">
                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h3>Veículo</h3>
                        <h4>R$ 200,00</h4>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h4>Veículo</h4>
                        <h5>R$ 200,00</h5>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h4>Veículo</h4>
                        <h5>R$ 200,00</h5>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h4>Veículo</h4>
                        <h5>R$ 200,00</h5>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h4>Veículo</h4>
                        <h5>R$ 200,00</h5>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div class="dv-box-veiculo">
                    <div class="dv-img-box-veiculo">
                        <img src="" alt="Veiculo" title="Veículo"/>
                    </div>
                    <div>
                        <h4>Veículo</h4>
                        <h5>R$ 200,00</h5>

                        <button class="btn-detalhes">Detalhes</button>
                    </div>
                </div>

                <div id="dv-paginacao">
                    <div class="dv-paginacao"> &lt;&lt; </div>
                    <div class="dv-paginacao"> &lt; </div>
                    <div class="dv-paginacao">1</div>
                    <div class="dv-paginacao">2</div>
                    <div class="dv-paginacao">3</div>
                    <div class="dv-paginacao">4</div>
                    <div class="dv-paginacao">5</div>
                    <div class="dv-paginacao"> > </div>
                </div>
            </section>

        </main>

        <!-- Rodapé -->
        <?php include_once("rodape_view.php"); ?>
    
    </body>
</html>