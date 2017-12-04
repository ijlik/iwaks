<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Iwaks Me", "no-relpay@iwaks.me");
$subject = "Testing Mail server from Iwaks.me";
$to = new SendGrid\Email("Adi Nugroho", "ijlik.k5s@gmail.com");
$content = new SendGrid\Content("text/plain", "ini adalah isi email dari sendgird");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();