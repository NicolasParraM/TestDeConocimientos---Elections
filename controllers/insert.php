<?php

require_once("../model/electionModel.php");

if (isset($_POST)) {
    // values
    $year = $_POST['year'];
    $votecount = $_POST['votecount'];
    $pparty = $_POST['pparty'];
    $county = $_POST['county'];

    $objElection = new Election();
    // Insert elections
    $objElection->insert($year, $votecount, $pparty, $county);
  }
  

?>