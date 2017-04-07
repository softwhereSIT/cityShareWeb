<?php

/**
 * Created by PhpStorm.
 * User: J. Guilherme
 * Date: 05/04/2017
 * Time: 23:50
 */

//Redirecionamento e métodos da área de marketing do conteudo

class MarketingController
{
    function alimentacao(){
        require_once ("view/alimentacao_cms_view.php");
    }

    function sete_motivos(){
        require_once ("view/add_beneficios_view.php");
    }

    
}