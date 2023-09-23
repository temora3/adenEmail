<?php
require 'vendor/autoload.php';

use \Firebase\JWT\JWT;

// Secret key to sign and verify JWT tokens.
$secret_key = 'xzrz nnac iguu fdmq';



    

    
    $user_info = [
        'user_email' => $details["sendToEmail"],
        
    ];

    // Set the token expiration time 
    $expiration_time = time() + 3600;

    // Create the token
    $token_payload = [
        'user' => $user_info,
        'exp' => $expiration_time,
    ];

    $token = JWT::encode($token_payload, $secret_key, 'HS256');

    echo "JWT Token: " . $token;
//  else {
//     // User does not exist or credentials are incorrect
//     echo "Authentication failed.";
// }




?>
