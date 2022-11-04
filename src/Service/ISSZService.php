<?php

namespace Trexima\Issz\Service;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Trexima\Issz\Client\ISSZClient;

class ISSZService
{
    private ISSZClient $ISSZClient;
    private ValidatorInterface $validator;

    public function __construct(ISSZClient $ISSZClient, ValidatorInterface $validator = null)
    {
        if (null === $validator) {
            $validator = Validation::createValidatorBuilder()
                ->addYamlMapping(realpath(__DIR__ . '/../Validator/validation.yaml'))
                ->getValidator();
        }
        $this->validator = $validator;
        $this->ISSZClient = $ISSZClient;
    }

    /**
     * @throws GuzzleException
     */
    public function getOpenApi($uri): string
    {
        $response = $this->ISSZClient->get($uri);
        return $response->getBody()->getContents();
    }

    /**
     * @param string $uri
     * @param string $batchId
     * @param array $jobOffers
     * @return ResponseInterface
     */
    public function postBatch(string $uri, string $batchId, array $jobOffers): ResponseInterface
    {
        return $this->ISSZClient->post($uri.$batchId,  ['json' => $jobOffers]);
    }

    /**
     * @param string $uri
     * @param string $batchId
     * @return ResponseInterface
     */
    public function commitBatch(string $uri, string $batchId): ResponseInterface
    {
        return $this->ISSZClient->post($uri.$batchId.'/prevod');
    }

    /**
     * @param string $uri
     * @param string $batchId
     * @return ResponseInterface
     */
    public function getBatch(string $uri, string $batchId): ResponseInterface
    {
        return $this->ISSZClient->get($uri.$batchId);
    }

    /**
     * @param string $uri
     * @return ResponseInterface
     */
    public function getExternalKey(string $uri): ResponseInterface
    {
        return $this->ISSZClient->get($uri);
    }

    /**
     * @return ValidatorInterface
     */
    public function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }
}
