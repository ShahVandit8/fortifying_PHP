<?php

// Encrypted data received over HTTPS - Taking data from previous example
$encrypted_data_base64 = "encrypted_data_here";

// Decode the base64-encoded encrypted data
$encrypted_data = base64_decode($encrypted_data_base64);

// Decrypt the data using the same encryption key and IV
$decrypted_data = openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
echo "Decrypted Data: $decrypted_data";

//Output= Decrypted Data: YorkU Sensitive Student Information

?>
