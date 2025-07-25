<?php
function encryptData($data, $key) {
    $cipher = "AES-256-CBC";
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

    $serialized = serialize($data); // Convert any data type to string
    $encrypted = openssl_encrypt($serialized, $cipher, $key, 0, $iv);

    return base64_encode($iv . $encrypted); // Combine IV and encrypted data
}

function decryptData($encryptedData, $key) {
    $cipher = "AES-256-CBC";
    $decoded = base64_decode($encryptedData);
    $ivLength = openssl_cipher_iv_length($cipher);

    $iv = substr($decoded, 0, $ivLength); // Extract IV
    $encrypted = substr($decoded, $ivLength); // Extract encrypted string

    $decrypted = openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
    return unserialize($decrypted); // Convert string back to original data type
}

// Example usage
$secretKey = "SuperSecureKey987!";
$complexData = [
    "name" => "Alice",
    "age" => 30,
    "is_admin" => true,
    "prefs" => (object)["theme" => "dark", "language" => "en"]
];

$encrypted = encryptData($complexData, $secretKey);
$decrypted = decryptData($encrypted, $secretKey);

echo "Encrypted:\n" . $encrypted . "\n\n";
echo "Decrypted:\n";
print_r($decrypted);
?>
