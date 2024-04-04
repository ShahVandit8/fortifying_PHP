<?php

// Data to be encrypted
$data = "YorkU Sensitive Student Information";

// Encryption key and initialization vector (IV)
$key = openssl_random_pseudo_bytes(32); // 256-bit key
$iv = openssl_random_pseudo_bytes(16); // 128-bit IV

// Encrypt the data using AES encryption algorithm (256-bit key) and CBC mode
$encrypted_data = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

// Base64 encode the encrypted data for safe transmission
$encrypted_data_base64 = base64_encode($encrypted_data);

// Transmit $encrypted_data_base64 over HTTPS
echo "Encrypted Data: $encrypted_data_base64";

?>
