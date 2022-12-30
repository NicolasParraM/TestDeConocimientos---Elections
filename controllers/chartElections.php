<?php  

$pdo = new PDO('mysql:host=localhost;dbname=elections', 'root', '');

$sentenciaSQL= $pdo->prepare("SELECT year, political_party, SUM(vote_count) AS vote_count
FROM election GROUP BY year, political_party");
$sentenciaSQL->execute();
$election=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($election);

?>