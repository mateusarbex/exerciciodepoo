<?php
include_once 'pessoa.php';

class PessoaFisica extends Pessoa
{
    private $cpf;
    private $dataNasc;
    private $estadoCivil;
    public function __construct($nome, $endereco, $email, $cpf, $dataNasc, $estadoCivil)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of dataNasc
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * Set the value of dataNasc
     *
     * @return  self
     */
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    /**
     * Get the value of estadoCivil
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set the value of estadoCivil
     *
     * @return  self
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }
}
