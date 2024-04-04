<?php

// Assuming $mysqli is your database connection

$input = "Neel's SQL injection attempt";
$secure_input = $mysqli->real_escape_string($input);

$query = "SELECT * FROM users WHERE name='$secure_input'";

?>
