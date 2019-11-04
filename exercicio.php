<?php
include_once 'agenda.php';
include_once 'pessoaFisica.php';
include_once 'pessoaJuridica.php';
$contato1 = new PessoaFisica("Mateus Arbex", "Rua A", "mateusarbex@hotmail.com", 2, "27/01/95", "Solteiro");
$contato2 = new pessoaJuridica("Zé serviços", "Rua b", "zeserv@zeserv.com", 3, "2001", "Zé Serviços LTDA");
$contato3 = new PessoaFisica("Jose Ramos", "Rua c", "jramos@hotmail.com", 1, "27/01/93", "Casado");
$contato4 = new pessoaJuridica("Concreto Duro", "Rua d", "cduro@cduro.com", 4, "2002", "Concreto Duro Enterprise");
$agenda = new Agenda();
$agenda->insertContato($contato1);
$agenda->insertContato($contato2);
$agenda->insertContato($contato3);
$agenda->insertContato($contato4);
echo '<span> Contatos:';
foreach ($agenda->getContatos() as $contatos) {
    echo $contatos->getNome(), ', ';
}
echo '</span>';
echo '</br>';
echo '<div>Procurando:', $contato1->getNome(), '</div>';
$contatoProcurado = $agenda->searchContato($contato1);
echo '<div> Nome:', $contatoProcurado->getNome(), ' CPF/CNPJ:', get_class($contatoProcurado) == 'PessoaFisica' ? $contatoProcurado->getCpf() : $contatoProcurado->getCnpj;
echo '</br>';
$agenda->sortContatos();
echo $agenda->contatos[0]->getNome(), ' teste </br>';
echo '<span> Contatos:';
foreach ($agenda->getContatos() as $contatos) {
    echo $contatos->getNome(), ', ';
}
$agenda->deleteContato($contato1);
echo '</br><span> Contatos:';
foreach ($agenda->getContatos() as $contatos) {
    echo $contatos->getNome(), ', ';
}
echo '</span>';
