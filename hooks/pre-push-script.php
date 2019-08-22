<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Smsapi\Client\SmsapiHttpClient;
use Smsapi\Client\Feature\Sms\Bag\SendSmsBag;

$apiToken = ''; //paste your token
$phoneNumber = ""; // enter your phone number
$message = "FEEL THE PUSH POWER!"; //write your message

$sms = SendSmsBag::withMessage($phoneNumber, $message);

$service = (new SmsapiHttpClient())->smsapiPlService($apiToken);
$service->smsFeature()->sendSms($sms);