<?php

// User input (email address)
$user_email = "yorkstudent @yorku.ca";

// Validate email using filter_var() with FILTER_VALIDATE_EMAIL filter
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address: $user_email";
} else {
    echo "Invalid email address: $user_email";
}

// This can be implemented whenever we are execpting input from user

?>
