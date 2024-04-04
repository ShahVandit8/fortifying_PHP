<?php

// Log a message to a file
$error_message = "An error occurred: Unable to connect to the database";
$error_type = E_USER_ERROR; // Error type (user-generated error)
$error_log_file = "error.log"; // Destination file path

// Log the error to the file
error_log($error_message, $error_type, $error_log_file);

?>
