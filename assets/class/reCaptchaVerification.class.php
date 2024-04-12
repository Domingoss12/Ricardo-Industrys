<?php

function reCAPTCHA_Validation($requeste)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => [
            'secret' => '6LedhbgpAAAAAM26Y6XB6ny6BiF_W0723ELCJ2pe',
            'response' => $requeste ?? ''
        ]
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $responseArray = json_decode($response, true);

    $sucsess = $responseArray['success'] ?? false;

    if ($sucsess == true) {
        return "true";
    } else {
        return "false ";
    }
}
