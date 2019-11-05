<?php
include_once 'vendendor.php';

$vendendor = new Vendendor("Mateus", "m@hotmail.com", "Rua A", 2000, 0.1);

$vendendor->setValorVenda(400);
echo $vendendor->calcularSalario();
