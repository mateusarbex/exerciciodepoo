<?php
include_once 'operario.php';
$operario = new Operario("Marcos", "marcos@hotmail.com", "Rua B", 3000, 0.2);
$operario->setValorProducao(500);
echo '</br>', $operario->calcularSalario();
