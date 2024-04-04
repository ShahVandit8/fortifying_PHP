<?php

// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Error on line $errline in $errfile<br>";
}

// Set custom error handler
set_error_handler("customErrorHandler");

// Trigger a PHP notice
echo $undefined_variable;

?>
