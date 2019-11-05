<?php

class Quadrado
{
    private $lado;
    private $cor;
    private $preenchimento;

    public function __construct($lado, $cor, $preenchimento)
    {
        $this->lado = $lado;
        $this->cor = $cor;
        $this->preenchimento = $preenchimento;
    }

    public function getArea()
    {
        return $this->lado * $this->lado;
    }

    public function getPerimetro()
    {
        return 4 * $this->lado;
    }
    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of preenchimento
     */
    public function getPreenchimento()
    {
        return $this->preenchimento;
    }

    /**
     * Set the value of preenchimento
     *
     * @return  self
     */
    public function setPreenchimento($preenchimento)
    {
        $this->preenchimento = $preenchimento;

        return $this;
    }
}
