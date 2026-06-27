<?php

require_once 'config.php';

function getApiData($endpoint) {
    $url = 'https://api.restcountries.com/countries/v5' . $endpoint;

    $options = [
        'http' => [
            'method' => 'GET',
            'header' => "Authorization: Bearer " . API_KEY
        ]
    ];

    $context = stream_context_create($options);
    $json = @file_get_contents($url, false, $context);

    if ($json === false) {
        return null;
    }

    return json_decode($json, true);
}