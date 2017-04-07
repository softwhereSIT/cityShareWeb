<?php


class Cliente{
    private $idCliente;
    private $nome_cliente;
    private $telefone;
    private $celular;
    private $email;
    private $senha;
    private $cpf_cnpj;
    private $numero_cartao;
    private $bandeira;
    private $validade;
    private $cvv;

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * @param mixed $nome_cliente
     */
    public function setNomeCliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * @param mixed $cpf_cnpj
     */
    public function setCpfCnpj($cpf_cnpj)
    {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getNumeroCartao()
    {
        return $this->numero_cartao;
    }

    /**
     * @param mixed $numero_cartao
     */
    public function setNumeroCartao($numero_cartao)
    {
        $this->numero_cartao = $numero_cartao;
    }

    /**
     * @return mixed
     */
    public function getBandeira()
    {
        return $this->bandeira;
    }

    /**
     * @param mixed $bandeira
     */
    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;
    }

    /**
     * @return mixed
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * @param mixed $validade
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;
    }

    /**
     * @return mixed
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param mixed $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function validarLogin(){
        echo "<script> alert('Email: ".$this->getEmail()." Senha: ".$this->getSenha()."'); </script>";
        header("Location: dashboard/index.php");

    }
}