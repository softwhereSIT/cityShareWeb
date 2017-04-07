<?php
/**
 * Created by PhpStorm.
 * User: JGuilherme
 * Date: 27/03/2017
 * Time: 10:17
 */

class SiteController{

    
    public function index(){
        require_once("view/home.php");
    }

    public function sete_motivos(){
        require_once("view/sete_motivos_view.php");
    }

	public function parceiros(){
        require_once("view/parceiros_view.php");
    }    
    
    public function sobre_nos(){
        require_once("view/sobre_nos_view.php");
    }

    public function fac(){
        require_once("view/duvidas_frequentes_view.php");
    }

    public function fale_conosco(){
        require_once("view/fale_conosco_view.php");
    }

    public function login_superintendencia(){

		$email = $_POST['in-sup-email'];
        $senha = $_POST['in-sup-senha'];
        echo $email."<br>";
        echo $senha;

        //echo "<script> alert('Email: ".$email." Senha: ".$senha."'); </script>";

        require_once("model/funcionario_class.php");

        $funcionario = new Funcionario();
        $funcionario->setEmail($email);
        $funcionario->setSenha($senha);
        
        $funcionario->validarLogin();
    }

    public function login_cliente(){
        $email = $_POST['in-entrar-email'];
        $senha = $_POST['in-entrar-senha'];

        require_once("model/cliente_class.php");

        $cliente = new Cliente();
        $cliente->setEmail($email);
        $cliente->setSenha($senha);
        
        $cliente->validarLogin();
    }
}