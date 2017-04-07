<?php
/**
 * Created by PhpStorm.
 * User: JGuilherme
 * Date: 31/03/2017
 * Time: 08:43
 */

class DashboardController{
    public function index(){
        require_once("view/home.php");

    }

    public function meusDados(){
        require_once("view/meusDados_view.php");

    }

    public function anuncios(){
        require_once("view/anuncios_view.php");

    }

    public function emprestimos(){
        require_once("view/emprestimos_view.php");

    }

    public function acompanhamento(){
        require_once("view/acompanhamento_view.php");
    }

    public function historico(){
        require_once("view/historico_view.php");

    }

}

?>