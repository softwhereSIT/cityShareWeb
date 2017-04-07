<link rel="stylesheet" href="view/css/style_dados_dashboard.css">

<?php
function starRate(){
    for($cont = 0; $cont < 5; $cont++){
        ?>
        <svg class="svg-star-rate" height="32" viewBox="0 0 18 18" width="32" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
            <path d="M0 0h18v18H0z" fill="none"/>
        </svg>
    <?php } }?>

<div id="dv-meusDados">
    <div id="dv-perfil">
        <div id="dv-img-perfil-config">
            <img src="view/img/Gender%20Neutral%20User%20Filled-100.png" alt="Perfil" title="Perfil">
        </div>
        <h2>Nome Cliente</h2>
        <div id="dv-minha-avaliacao">
            <?php starRate();?>
        </div>

        <button id="btn-editar">Editar</button>
    </div>
    <div id="dv-dados">
        <h3>Dados</h3>

        <h4>Nome completo: <span>Nome</span></h4>
        <h4>E-mail: <span>email@emial.com</span></h4>
        <h4>Telefone: <span>11 1111-1111</span></h4>
        <h4>Celular: <span>11 11111-1111</span></h4>
        <h4>Endereço: <span>Rua <?php echo "Logradouro, nº 0 - CEP - Bairro, Cidade-UF"; ?></span></h4>

        <h3>Gerenciar conta</h3>

        <h4>Cartão de Crédito: <span>XXXX-XXXX-XXXX-XXXX</span></h4>


    </div>
</div>