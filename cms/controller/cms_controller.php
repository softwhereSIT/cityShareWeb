<?php

/**
 * Created by PhpStorm.
 * User: JGuilherme
 * Date: 04/04/2017
 * Time: 08:58
 */
class cmsController{
    public function index(){
        require_once("view/cms_home.php");
    }

    public function auditoria(){
        //echo "<script> alert('funcionarios');</script>";
        require_once("view/auditoria_view.php");
    }

    public function fale_conosco(){
        require_once("view/fale_conosco_view.php");
    }

    public function aprovacoes(){
        require_once("view/aprovacoes_view.php");
    }

    public function marketing(){
        require_once("view/marketing_view.php");
    }

    public function relatorios(){
        require_once("view/funcionarios_view.php");
    }

    public function funcionarios(){
        require_once("view/funcionarios_view.php");
    }

    public function tarifas(){
        require_once("view/funcionarios_view.php");
    }
    
}