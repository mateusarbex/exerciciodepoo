<?php
class Agenda
{
    public $contatos = array();
    private $temp;
    public function __construct()
    {
        $this->contatos = array();
    }
    public function insertContato($contato)
    {
        array_push($this->contatos, $contato);
    }
    public function getContatos()
    {
        return $this->contatos;
    }
    public function searchContato($search)
    {
        foreach ($this->contatos as $contato) {
            if (get_class($search) == "PessoaFisica") {
                if ($search->getCpf() == $contato->getCpf() || $search->getNome() == $contato->getNome()) {
                    return $contato;
                }
            } else {
                if ($search->getCnpj() == $contato->getCnpj() || $search->getNome() == $contato->getNome()) {
                    return $contato;
                }
            }
        }
    }
    private function remove($array)
    {
        if ($array->getNome() == $this->temp->getNome()) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function deleteContato($search)
    {
        $this->temp = $search;
        $this->contatos = array_filter($this->contatos, array($this, "remove"));
        $this->temp = NULL;
    }
    private function sort($a, $b)
    {
        if (get_class($a) == get_class($b)) {
            if (get_class($a) == "PessoaFisica") {
                return $a->getCpf() > $b->getCpf() ? 1 : -1;
            } else {
                return $a->getCnpj() > $b->getCnpj() ? 1 : -1;
            }
        }
        if (get_class($a) == "PessoaFisica" && get_class($b) == "PessoaJuridica") {
            return -1;
        } else {
            return 1;
        }
    }
    public function sortContatos()
    {
        usort($this->contatos, array($this, "sort"));
    }
}
