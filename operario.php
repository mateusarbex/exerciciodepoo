<?php
require 'empregado.php';
class Operario extends Empregado
{
    private $comissao;
    private $valorProducao;

    public function __construct($nome, $email, $endereco, $salario, $comissao)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->salario = $salario;
        $this->comissao = $comissao;
        $this->cargo = "Operario";
    }
    public function calcularSalario()
    {
        return $this->salario + ($this->valorProducao * $this->comissao);
    }

    /**
     * Get the value of valorProducao
     */
    public function getValorProducao()
    {
        return $this->valorProducao;
    }

    /**
     * Set the value of valorProducao
     *
     * @return  self
     */
    public function setValorProducao($valorProducao)
    {
        $this->valorProducao = $valorProducao;

        return $this;
    }
}
