<?php

/**
 * Created by PhpStorm.
 * User: JGuilherme
 * Date: 29/03/2017
 * Time: 07:57
 */
class Funcionario{
    private $idFuncionario;
    private $nome_func;
    private $rg;
    private $cpf;
    private $data_nascimento;
    private $data_admissao;
    private $idCargos;
    private $senha;
    private $email;
    public $listaDeFuncionario = [];
    
    public function __construct(){
        /*require_once('bd_class.php');
        $conexao_bd = new Mysql_db();
        $conexao_bd->Conectar();*/
    }
    
    /*Id do Funcionario*/
    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }
    
    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    /*CPF do Funcionario*/
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /*Data de nasc. do Funcionario*/
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
    
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /*Data de admissao do Funcionario*/
    public function getDataAdmissao()
    {
        return $this->data_admissao;
    }
    
    public function setDataAdmissao($data_admissao)
    {
        $this->data_admissao = $data_admissao;
    }

    /*Cargo do Funcionario*/
    public function getIdCargos()
    {
        return $this->idCargos;
    }
    
    public function setIdCargos($idCargos)
    {
        $this->idCargos = $idCargos;
    }

    /*Senha do Funcionario*/
    public function getSenha()
    {
        return $this->senha;
    }
    
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /*Email do Funcionario*/
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /*RG do Funcionario*/
    public function setRg($rg)
    {
        $this->rg = $rg;
    }
    
    public function getRg()
    {
        return $this->rg;
    }

    /*Nome do Funcionario*/
    public function setNomeFunc($nome_func)
    {
        $this->nome_func = $nome_func;
    }
    
    public function getNomeFunc()
    {
        return $this->nome_func;
    }
    
    
    /*Métodos da Classe*/
    
    public function validarLogin(){
        echo("<script> alert('Class Email: ".$this->getEmail()." Senha: ".$this->getSenha()."'); </script>");
        header("Location: cms/index.php");
		/*$sql = mysql_query("call ValidarLogin($email, $senha);");
        $log=0;
        while ($row = mysql_fetch_array($sql)){
            $log ++;
        }

        if($log == 1){*/
            //Se o acesso ao usuario for concedido
        /*}*/
    }
    
    public function listarFuncionario(){
        $listafuncionarios = [];
        $db = Db::getInstance();
        $sttm = $db->query('call listarFuncionarios()');
        //$sttm->execute();

        foreach($sttm->fetchAll() as $funcionario) {
            $listafuncionarios[] = new Funcionario($this->setIdFuncionario($funcionario['idFuncionario']),$this->setNomeFunc($funcionario['nome_func']), $this->setRg($funcionario['rg']), $this->setCpf($funcionario['cpf']), $this->setDataNascimento($funcionario['data_nascimento']), $this->setDataAdmissao($funcionario['data_admissao']), $this->setIdCargos($funcionario['idCargos']), $this->setSenha($funcionario['senha']), $this->setEmail($funcionario['email']));
        }
        //echo "<script> alert('".print_r($listaFuncionarios)."');</script>";
        
        return $listafuncionarios;

        /*$listafuncionarios = new ArrayObject();
        $registro="";
        while ($registro = $sttm->fetchAll()){
            $funcionario = new Funcionario();
            $funcionario->setIdFuncionario($registro['idFuncionario']);
            $funcionario->setNomeFunc($registro['nome_func']);
            $funcionario->setRg($registro['rg']);
            $funcionario->setCpf($registro['cpf']);
            $funcionario->setDataNascimento($registro['data_nascimento']);
            $funcionario->setDataAdmissao($registro['data_admissao']);
            $funcionario->setIdCargos($registro['idCargos']);
            $funcionario->setEmail($registro['email']);
            $funcionario->setSenha($registro['senha']);

            $listafuncionarios->append($funcionario);

            return $listafuncionarios;
        }*/


    }
    
    public function addFuncionario(){

        try{
            //Chamamos os metodo estático da classe db
            $db = Db::getInstance();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Chamamos a procedure e atribuimos seus valorem em ordem numerica
            $stmt = $db->prepare("CALL addFuncionario(?,?,?,?,?,?,?,?)");
            $stmt->bindParam(1, $this->getNomeFunc());
            $stmt->bindParam(2, $this->getRg());
            $stmt->bindParam(3, $this->getCpf());
            $stmt->bindParam(4, $this->getDataNascimento());
            $stmt->bindParam(5, $this->getDataAdmissao());
            $stmt->bindParam(6, $this->getIdCargos());
            $stmt->bindParam(7, $this->getSenha());
            $stmt->bindParam(8, $this->getEmail());

            // call the stored procedure
            $stmt->execute();
            echo "<script> alert('Funcionario Inserido com sucesso!');</script>";
            // Redirecionando para area de funcionarios
            header("Location: index.php?controller=cms&action=funcionarios");

        }catch (PDOException $e){
            //Caso ocorra algum erro
            echo "<script> alert('Erro ao inserir!');</script>";
        }
    }
    
    public function editarFuncionario(){
        echo "<script> alert('Editar Funcionario!');</script>";

    }
    
    public function excluirFuncionario($id){
        $db = Db::getInstance();
        $sttm = $db->prepare('call removerFuncionarios(?)');
        $sttm->bindParam(1, $id);
        $sttm->execute();
        echo "<script> alert('Excluído com sucesso!');</script>";

    }
    
}