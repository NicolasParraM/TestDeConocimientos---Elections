<?php

require_once("./model/electionModel.php");

// Crea una instancia de la clase Election
$election = new Election();

// Obtiene todas las filas de la tabla election
$request = $election->getCounty();
$row = $election->getEnum();

preg_match_all("/'([^']+)'/", $row[0]['Type'], $enum_values);
$enum_values = $enum_values[1];

?>