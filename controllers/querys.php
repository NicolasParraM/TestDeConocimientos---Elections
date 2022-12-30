<?php  

$pdo = new PDO('mysql:host=localhost;dbname=elections', 'root', '');


// ¿Cuál fue el año en que se realizaron más votaciones?
$sql_query = "SELECT year, sum(vote_count) AS Max_vote_count
FROM election
GROUP BY year ORDER BY Max_vote_count DESC LIMIT 1;";
$stmt = $pdo->prepare($sql_query);
$stmt->execute();

// ¿Cuál fue el condado con menos votaciones en el 2008?
$sql_query1 = "SELECT  county.code_county, county.county, SUM(vote_count) AS vote_count
FROM election
INNER JOIN county ON election.code_county_id = county.code_county
WHERE year = '2008'
GROUP BY code_county_id
ORDER BY vote_count ASC
LIMIT 1;";
$stmt1 = $pdo->prepare($sql_query1);
$stmt1->execute();

// ¿Cuáles fueron los 3 condados que tuvieron más votaciones por el partido demócrata en los años del 2000 al 2008?
$sql_query2 = "SELECT code_county_id, SUM(vote_count) as vote_count, county.county
FROM election
INNER JOIN county ON election.code_county_id = county.code_county
WHERE year BETWEEN '2000' AND '2008' AND political_party = 'democrat'
GROUP BY code_county_id
ORDER BY vote_count DESC
LIMIT 3;";
$stmt2 = $pdo->prepare($sql_query2);
$stmt2->execute();

// ¿Cuál partido tuvo menos votaciones en el rango de años de 2012 a 2016?
$sql_query3 = "SELECT political_party, SUM(vote_count) AS vote_count
FROM election
WHERE year BETWEEN '2012' AND '2016'
GROUP BY political_party
ORDER BY vote_count ASC
LIMIT 1;";
$stmt3 = $pdo->prepare($sql_query3);
$stmt3->execute();



?>