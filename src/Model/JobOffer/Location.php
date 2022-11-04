<?php

namespace Trexima\Issz\Model\JobOffer;

class Location implements \JsonSerializable
{
    /**
     * Lokálna štatistická územná jednotka 2
     *
     * @var string
     */
    protected ?string $lau2 = null;

    /**
     * Regionálna štatistická územná jednotka 3
     *
     * @var string
     */
    protected ?string $nUTS3 = null;

    /**
     * Ulica
     *
     * @var string
     */
    protected ?string $street = null;

    /**
     * Súpisné/Popisné číslo
     *
     * @var int
     */
    protected ?int $propertyRegistrationNumber = null;

    /**
     * Orientačné číslo
     *
     * @var string
     */
    protected ?string $orientationNumber = null;

    /**
     * PSČ
     *
     * @var string
     */
    protected ?string $postCode = null;

    /**
     * lokálna štatistická územná jednotka 2
     *
     * @return string
     */
    public function getLau2() : ?string
    {
        return $this->lau2;
    }

    /**
     * lokálna štatistická územná jednotka 2
     *
     * @param string $lau2
     *
     * @return self
     */
    public function setLau2(?string $lau2) : self
    {
        $this->lau2 = $lau2;
        return $this;
    }

    /**
     * Regionálna štatistická územná jednotka 3
     *
     * @return string
     */
    public function getNUTS3() : ?string
    {
        return $this->nUTS3;
    }

    /**
     * Regionálna štatistická územná jednotka 3
     *
     * @param string $nUTS3
     *
     * @return self
     */
    public function setNUTS3(?string $nUTS3) : self
    {
        $this->nUTS3 = $nUTS3;
        return $this;
    }

    /**
     * Ulica
     *
     * @return string
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }

    /**
     * Ulica
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(?string $street) : self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Súpisné/Popisné číslo
     *
     * @return int
     */
    public function getPropertyRegistrationNumber() : ?int
    {
        return $this->propertyRegistrationNumber;
    }

    /**
     * Súpisné/Popisné číslo
     *
     * @param int $propertyRegistrationNumber
     *
     * @return self
     */
    public function setPropertyRegistrationNumber(?int $propertyRegistrationNumber) : self
    {
        $this->propertyRegistrationNumber = $propertyRegistrationNumber;
        return $this;
    }

    /**
     * Orientačné číslo
     *
     * @return string
     */
    public function getOrientationNumber() : ?string
    {
        return $this->orientationNumber;
    }

    /**
     * Orientačné číslo
     *
     * @param string $orientationNumber
     *
     * @return self
     */
    public function setOrientationNumber(?string $orientationNumber) : self
    {
        $this->orientationNumber = $orientationNumber;
        return $this;
    }

    /**
     * PSČ
     *
     * @return string
     */
    public function getPostCode() : ?string
    {
        return $this->postCode;
    }

    /**
     * PSČ
     *
     * @param string $postCode
     *
     * @return self
     */
    public function setPostCode(?string $postCode) : self
    {
        $this->postCode = $postCode;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'lau2' => $this->getLau2(),
            'NUTS3' => $this->getNUTS3(),
            'street' => $this->getStreet(),
            'propertyRegistrationNumber' => $this->getPropertyRegistrationNumber(),
            'orientationNumber' => $this->getOrientationNumber(),
            'postCode' => $this->getPostCode(),
        ];
    }
}