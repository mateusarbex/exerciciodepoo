<?php

class Retangulo
{
    private $base;
    private $altura;
    private $cor;
    private $preenchimento;

    public function __construct($base, $altura, $cor, $preenchimento)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->cor = $cor;
        $this->preenchimento = $preenchimento;
    }

    public function getArea()
    {
        return $this->base * $this->altura;
    }
    public function getPerimetro()
    {
        return 2 * $this->base + 2 * $this->altura;
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
