<?php

include "services/serviceMensageSection.php";
include "services/serviceValid.php";
include "services/serviceCategoryComp.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

defineCategoriaCompetidor($nome, $idade);

header ('location: index.php');
