<?php

$conn = mysqli_connect('localhost', 'root', '', 'elections');

// JSON
$data = file_get_contents('elections.json');
$elections = json_decode($data, true);

// Prepare insert statement
$stmt = mysqli_prepare($conn, "INSERT INTO election (year, vote_count, political_party, code_county_id) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'iisi', $year, $voteCount, $politicalParty, $codeCountyId);

// Initialize counter
$counter = 0;

// Start transaction
mysqli_begin_transaction($conn);

foreach ($elections as $election) {
  // Insert democrat
  $year = $election['year'];
  $voteCount = $election['democrat'];
  $politicalParty = 'democrat';
  $codeCountyId = $election['codecounty'];
  mysqli_stmt_execute($stmt);
  $counter++;

  // Insert republic
  $voteCount = $election['republic'];
  $politicalParty = 'republic';
  mysqli_stmt_execute($stmt);
  $counter++;

  // Insert other
  $voteCount = $election['other'];
  $politicalParty = 'other';
  mysqli_stmt_execute($stmt);
  $counter++;
}

// Commit transaction
mysqli_commit($conn);

// Print message
echo "Inserted $counter records successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);



?>