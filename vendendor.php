<?php
require 'empregado.php';
class Vendendor extends Empregado
{
    private $comissao;
    private $valorVenda;

    public function __construct($nome, $email, $endereco, $salario, $comissao)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->salario = $salario;
        $this->comissao = $comissao;
        $this->cargo = "Vendendor";
    }
    public function calcularSalario()
    {
        return $this->salario + ($this->valorVenda * $this->comissao);
    }

    /**
     * Get the value of valorVenda
     */
    public function getValorVenda()
    {
        return $this->valorVenda;
    }

    /**
     * Set the value of valorVenda
     *
     * @return  self
     */
    public function setValorVenda($valorVenda)
    {
        $this->valorVenda = $valorVenda;

        return $this;
    }
}
