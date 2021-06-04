<?php

function get_data($url) {
  global $key, $subdomain, $bearer;

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $headers = [
    'X-Auth-API-Key: ' . $key,
    'X-Auth-Subdomain: ' . $subdomain,
    'Authorization: Bearer ' . $bearer,
    'accept: application/json'
  ];
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $output = curl_exec($ch);

  curl_close($ch);

  return $output;
}
