<?php

class Circulo
{
    private $raio;
    private $cor;
    private $preenchimento;

    public function __construct($raio, $cor, $preenchimento)
    {
        $this->raio = $raio;
        $this->cor = $cor;
        $this->preenchimento = $preenchimento;
    }

    public function getArea()
    {
        return 3.14 * ($this->raio * $this->raio);
    }
    public function getPerimetro()
    {
        return 3.14 * (2 * $this->raio);
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
