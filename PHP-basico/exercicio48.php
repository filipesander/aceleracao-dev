<?php 

$urls = [
  'https://random-data-api.com/api/stripe/random_stripe',
  'https://random-data-api.com/api/stripe/random_stripe',
  'https://random-data-api.com/api/app/random_app',
  'https://random-data-api.com/api/beer/random_beer',
  'https://random-data-api.com/api/commerce/random_commerce',
  'https://random-data-api.com/api/device/random_device',
  'https://random-data-api.com/api/subscription/random_subscription'
];



foreach($urls as $url){
  $request = file_get_contents($url);
  
  $myFile = fopen('api.txt', 'w+');
  fwrite($myFile, $request . PHP_EOL);
  fclose($myFile);

}
