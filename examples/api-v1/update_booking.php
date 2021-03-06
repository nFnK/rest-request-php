<?php

// Useful resources:
//
// http://www.php.net/manual/en/function.json-decode.php
// http://www.php.net/manual/en/language.types.array.php

require_once '../../class/RestRequest.php';
// require_once '../class/JSON_support.php'; // Only required if using the PHP4 version

$api_token = 'YOUR_API_TOKEN'; // can be found in your profile: https://www.bookingsync.com/en/profile#api_token
$booking_id = 'YOUR_BOOKING_ID';

// Update a booking: http://www.bookingsync.com/en/documentation/api/bookings#bookings-update
$request = new RestRequest('https://www.bookingsync.com/bookings/' . $booking_id . '.json', 'PUT',
  array("booking" => array(
    "booked" => 1,
    "tentative_expires_at" => '',
  )));
$request->setApiToken($api_token);
$request->execute();

// echo '<pre>' . print_r($request, true) . '</pre>';
var_dump($request->getDecodedResponse());
?>
