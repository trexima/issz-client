# ISSZ client
ISSZ Client - service for sending data to sluzbyzamestnanosti.sk system.

## Installation
Installation with Composer:
```
composer require trexima/issz-client
```

## Example usage
```
<?php

require __DIR__.'/../vendor/autoload.php';

use Trexima\Issz\Service\ISSZService;
use Trexima\Issz\Client\ISSZClient;

$isszClient = new ISSZClient(
    __DIR__ . '/var/cert.pem',
    __DIR__ . '/var/key.pem',
    'passphrase');

use Ramsey\Uuid\Uuid;
$uuid = Uuid::uuid4();

// fill mandatory information
$offer = new \Trexima\Issz\Model\JobOffer();

$offer->setSKISCO08('5120000');
$offer->setBaseSalary(880.25);
$offer->setEmploymentRelationship('501601');
$offer->setExternalID('41561dsa56156');
$offer->setJobCategory('524802');
$offer->setJobDescription('Nejaky test popis');
$offer->setJobPositionCount(2);
$offer->setLegalID('31364381');
$offer->setPositionName('Nazov pracovnej pozicie');
$offer->setUrl('nejaka url');

$workingLoad = new \Trexima\Issz\Model\JobOffer\WorkingLoad();
$workingLoad->setWorkingWeekHours(1000);
$offer->setWorkingLoad($workingLoad);

$offers = [];
$offers[] = $offer;

$isszService = new ISSZService($isszClient);

$errors = $isszService->getValidator()->validate($offers);

if (count($errors) > 0) {
    throw new \Symfony\Component\Validator\Exception\ValidationFailedException($offers, $errors);
}

try {
    $response = $isszService->postBatch('https://apitest.mpsvr.gov.sk/api/sz/pracovne-ponuky/import/', $uuid, $offers);
    echo $response->getStatusCode();
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getResponse()->getBody();
}
```

## Access to OpenAPI
```
<?php

require __DIR__.'/../vendor/autoload.php';

use Trexima\Issz\Service\ISSZService;
use Trexima\Issz\Client\ISSZClient;

$isszClient = new ISSZClient(
    __DIR__ . '/var/cert.pem',
    __DIR__ . '/var/key.pem',
    'passphrase');

$isszService = new ISSZService($isszClient);

try {
    $response = $isszService->getOpenApi('https://apitest.mpsvr.gov.sk/api/sz/pracovne-ponuky/import/openapi.json');
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getResponse()->getBody();
}
```

## Check Batch status
```
<?php

require __DIR__.'/../vendor/autoload.php';

use Trexima\Issz\Service\ISSZService;
use Trexima\Issz\Client\ISSZClient;

$isszClient = new ISSZClient(
    __DIR__ . '/var/cert.pem',
    __DIR__ . '/var/key.pem',
    'passphrase');

$isszService = new ISSZService($isszClient);

$uuid = 'c2f4f292-7c25-46ec-8f25-c57a5236af5d';
try {
    $response = $isszService->getBatch('https://apitest.mpsvr.gov.sk/api/sz/pracovne-ponuky/import/', $uuid);
    $output = json_decode($response->getBody()->getContents());
    echo $output->importStatus;
    echo implode("\n", $output->links);
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getResponse()->getBody();
}
```

## Check status of individual record
```
<?php

require __DIR__.'/../vendor/autoload.php';

use Trexima\Issz\Service\ISSZService;
use Trexima\Issz\Client\ISSZClient;

$isszClient = new ISSZClient(
    __DIR__ . '/var/cert.pem',
    __DIR__ . '/var/key.pem',
    'passphrase');

$isszService = new ISSZService($isszClient);

$array = [
    '/pracovne-ponuky/import/fc3749f8-750d-481d-bf20-02d7ddac5dd4/stav',
];

try {
    foreach ($array as $item) {
        $response = $isszService->getExternalKey('https://apitest.mpsvr.gov.sk/api/sz'.$item);
        $output = json_decode($response->getBody()->getContents());
        print_r($output);
    }
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getResponse()->getBody();
}
```
