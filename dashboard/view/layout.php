<!DOCTYPE html>

<html lang="pt-BR" xmlns="http://www.w3.org/1999/html">
    <head>
        <title>City Share - Dashboard</title>
    
        <meta charset="UTF-8">
        <meta name="description" content="Locação de Veículos">
        <meta name="keywords" content="City, Share, City Share, Compartilhar, Locação, Veículos, Empréstimo">
        <meta name="author" content="City Share">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="icon" href="view/img/logo_cs_ico.fw.ico" type="image/x-icon" />
    
        <!-- Estilo da página -->
        <!--<link rel="stylesheet" href="view/css/style_standard.css">-->
        <link rel="stylesheet" href="view/css/style_cms_home.css"/>
        <link rel="stylesheet" href="view/css/style_standard_dashboard.css"/>
        
        
    </head>

    <body>
        <header>
            <div id="dv-logo"> <a href="index.php?controller=dashboard&action=index"><img src="view/img/logo_city_share.png" alt="City Share" title="City Share"></a></div>
            <div id="dv-top-dashboard"> <a id="link-home" href="index.php?controller=dashboard&action=index"><img src="view/img/Home%20Filled-50.png" title="Home" alt="Home"></a> <p>City Share - Dashboard</p> <a id="link-sair"><img src="view/img/Exit%20Sign-50.png" title="Sair" alt="Sair"></a></div>
        </header>
    
        <main role="main" id="main-dash">
            <div id="dv-menu-lateral">
                <div id="dv-img-perfil"><img src="view/img/Gender%20Neutral%20User%20Filled-100.png" alt="Perfil" title="Perfil"></div>
                <h2>Nome Cliente</h2>
                
                <nav id="menu-dash">
                    <ul id="lista-menu-dash">
                        <li><img src="view/img/Edit%20Property.png" title="Icone" alt="icone"><a href="index.php?controller=dashboard&action=meusDados" title="Meus dados">Meus dados</a></li>
                        <li><img src="view/img/Pickup%20Filled.png" title="Icone" alt="icone"><a href="index.php?controller=dashboard&action=anuncios" title="Anúncios">Anúncios</a></li>
                        <li><img src="view/img/Share%20Filled.png" title="Icone" alt="icone"><a href="index.php?controller=dashboard&action=emprestimos" title="Empréstimos">Empréstimos</a></li>
                        <li><img src="view/img/Clock%20Filled.png" title="Icone" alt="icone"><a href="index.php?controller=dashboard&action=acompanhamento" title="Acompanhamento">Acompanhamento</a></li>
                        <li><img src="view/img/Historical.png" title="Icone" alt="icone"><a href="index.php?controller=dashboard&action=historico" title="Histórico">Histórico</a></li>
                    </ul>
                </nav>
            </div>
            
            <div id="dv-conteudo-dash">
                <div id="dv-center_conteudo">
                    <!-- Conteudo principal da pagina-->
                    <?php include_once ("router.php"); ?>
                </div>
            </div>
            
        </main>
    
        <footer>
            <div id="dv-center-footer"><p>Desenvolvido por SoftWhere IT Solutions - 2017</p></div>
        </footer>
    </body>
    
    
</html>