<?php
// proxy.php

// Set the Salesforce API endpoint
$apiEndpoint = "https://power-business-6195--deepcloud.sandbox.my.salesforce-sites.com/ANAX/services/apexrest/MarketingFactory/CreateLead";

// Get POST data from the client
// $postData = file_get_contents("php://input");


$postData=json_encode($_POST);
// echo $postData;die;
// Set up cURL to make a request to Salesforce
$ch = curl_init($apiEndpoint);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($postData),
]);

// Execute cURL and get the response
$response = curl_exec($ch);

// Set the appropriate headers for CORS
header("Access-Control-Allow-Origin: https://anaxdevelopments.com");
header("Content-Type: application/json");

// Output the Salesforce response


$responseBack = json_decode($response, true);

if(!empty($responseBack['statusCode']) && $responseBack['statusCode']==500){

    echo json_encode(['status' => 'error']);
}else{
    echo json_encode(['status' => 'success']);
}


curl_close($ch);
?>
