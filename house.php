<?php

$ch = curl_init();
$url = "https://www.potterapi.com/v1/sortingHat"
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

$send = array("blocks" => array("type" => "section", "text" => "Your house is:" . $response));
