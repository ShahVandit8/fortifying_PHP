<?php

// User input (email address)
$email = "yorkstudent@yorku.ca";

// Regex pattern for validating email addresses
$email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

// Validate email using preg_match()
if (preg_match($email_pattern, $email)) {
    echo "Valid email address: $email";
} else {
    echo "Invalid email address: $email";
}

// This can be implemented whenever we are execpting input from user

?>
