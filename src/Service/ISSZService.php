<?php

namespace Trexima\Issz\Service;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Trexima\Issz\Client\ISSZClient;

class ISSZService
{
    private ISSZClient $ISSZClient;
    private ValidatorInterface $validator;
    private Serializer $serializer;

    public function __construct(ISSZClient $ISSZClient, ValidatorInterface $validator = null, SerializerInterface $serializer = null)
    {
        if (null === $validator) {
            $validator = Validation::createValidatorBuilder()
                ->addYamlMapping(realpath(__DIR__ . '/../Validator/validation.yaml'))
                ->getValidator();
        }
        if (null === $serializer) {
            $encoders = [new JsonEncoder()];
            $normalizers = [new JsonSerializableNormalizer()];
            $serializer = new Serializer($normalizers, $encoders);
        }
        $this->validator = $validator;
        $this->ISSZClient = $ISSZClient;

        $this->serializer = $serializer;
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
     * @param array $jobOffers
     * @return ResponseInterface
     */
    public function postBatch(string $uri, array $jobOffers): ResponseInterface
    {
        return $this->ISSZClient->post($uri,  ['json' => $jobOffers]);
    }

    public function commitBatch(string $uri, string $batchId): ResponseInterface
    {
        return $this->ISSZClient->post($uri.$batchId.'/prevod');
    }

    /**
     * @return Serializer
     */
    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }

    /**
     * @return ValidatorInterface
     */
    public function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }
}
