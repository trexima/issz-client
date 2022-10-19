<?php

namespace Trexima\Issz\Client;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ISSZClient extends Client
{
    private array $authOptions = [];

    public function __construct($cert, $key, $passphrase)
    {
        $this->authOptions = [
            'cert' => [realpath($cert), $passphrase],
            'ssl_key' => [realpath($key), $passphrase]
        ];
        parent::__construct();
    }

    public function postBatch($uri, array $options = []): ResponseInterface
    {
        $options = array_merge($options, $this->authOptions);
        return parent::post($uri, $options);
    }

    public function get($uri, array $options = []): ResponseInterface
    {
        $options = array_merge($options, $this->authOptions);
        return parent::get($uri, $options);
    }
}
