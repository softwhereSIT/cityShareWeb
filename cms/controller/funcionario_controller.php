<?php

/**
 * Created by PhpStorm.
 * User: J. Guilherme
 * Date: 05/04/2017
 * Time: 23:50
 */
class FuncionarioController
{
    public function add_funcionario(){
        require_once("view/addfuncionario_view.php");
    }

    public function listarFuncionarios(){
        require_once ("../model/funcionario_class.php");
    }
    
    public function novoFuncionario(){
        $nome = $_POST['in-nome'];
        $rg = $_POST['in-rg'];
        $cpf = $_POST['in-cpf'];
        $cargo = $_POST['in-cargo'];
        $email = $_POST['in-email'];
        $senha = $_POST['in-senha'];
        $nascimento = $_POST['in-dtnasc'];
        $admissao = $_POST['in-dtadm'];

        require_once ("../model/funcionario_class.php");
        $funcionario = new Funcionario();

        $funcionario->setNomeFunc($nome);
        $funcionario->setRg($rg);
        $funcionario->setCpf($cpf);
        $funcionario->setIdCargos($cargo);
        $funcionario->setEmail($email);
        $funcionario->setSenha($senha);
        $funcionario->setDataNascimento($nascimento);
        $funcionario->setDataAdmissao($admissao);

        $funcionario->addFuncionario();
    }

    public function removerFuncionario(){
        $id = $_GET['id'];
        require_once ("../model/funcionario_class.php");
        $funcionario = new Funcionario();
        $funcionario->excluirFuncionario($id);
    }
}