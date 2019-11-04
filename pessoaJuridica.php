<?php
include_once 'pessoa.php';

class PessoaJuridica extends Pessoa
{
    private $cnpj;
    private $inscEstadual;
    private $razaoSocial;
    public function __construct($nome, $endereco, $email, $cnpj, $inscEstadual, $razaoSocial)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->cnpj = $cnpj;
        $this->inscEstadual = $inscEstadual;
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of inscEstadual
     */
    public function getinscEstadual()
    {
        return $this->inscEstadual;
    }

    /**
     * Set the value of inscEstadual
     *
     * @return  self
     */
    public function setinscEstadual($inscEstadual)
    {
        $this->inscEstadual = $inscEstadual;

        return $this;
    }

    /**
     * Get the value of razaoSocial
     */
    public function getrazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     *
     * @return  self
     */
    public function setrazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }
}
