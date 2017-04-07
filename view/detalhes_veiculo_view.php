<?php
function starRate(){
    for($cont = 0; $cont < 5; $cont++){
        ?>
        <svg class="svg-star-rate" height="32" viewBox="0 0 18 18" width="32" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z"/>
            <path d="M0 0h18v18H0z" fill="none"/>
        </svg>
    <?php } }?>

<section id="sec-det-veicluo">
    <span id="spn-det_veiculo-fechar">x</span>
    <div id="dv-det_veiculo">
        <span id="spn-box_det_veiculo-fechar">x</span>
        <h2>Nome do veículo - Detalhes</h2>

        <div id="dv-img-veiculo">
            <img src="view/img/car_0.png" alt="veiculo" title="Veiculo"/>
        </div>
        
        <!-- Atributos do veículo -->
        <div id="dv-attr-veiculo">
            <div id="dv-avaliacao-veiculo">
                <?php starRate();?>
            </div>
        </div>
            
    </div>

</section>