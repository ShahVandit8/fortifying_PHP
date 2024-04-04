<?php

// User's password
$user_password = "vandit_password_123";

// Hash and salt the password
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

// Store $hashed_password in the database

// Later during authentication, verify the password
$user_input_password = "vandit_password_123"; // Password entered by the user during login

if (password_verify($user_input_password, $hashed_password)) {
    // Password is correct
    echo "Password is correct";
} else {
    // Password is incorrect
    echo "Password is incorrect";
}

?>
