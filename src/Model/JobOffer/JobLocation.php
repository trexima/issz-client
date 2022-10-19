<?php

namespace Trexima\Issz\Model\JobOffer;

class JobLocation
{
    /**
     * specific code = 703, name = Slovensko, desc = Slovenská republika, name_en = Slovakia, desc_en = Slovak Republic, Alpha3 = SVK, Alpha2 = SK
     *
     * @var int
     */
    protected int $stateCodeIso3166;
    /**
     * specific code = SK0101, name = Bratislava I, desc = Okres Bratislava I, desc_en = District of Bratislava I
     *
     * @var string
     */
    protected string $lau1;
    /**
     * Lokálna štatistická územná jednotka 2
     *
     * @var string
     */
    protected string $lau2;
    /**
     * Regionálna štatistická územná jednotka 3
     *
     * @var string
     */
    protected string $nUTS3;
    /**
     * Ulica
     *
     * @var string
     */
    protected string $street;
    /**
     * Súpisné/Popisné číslo
     *
     * @var int
     */
    protected int $propertyRegistrationNumber;
    /**
     * Orientačné číslo
     *
     * @var string
     */
    protected string $orientationNumber;
    /**
     * PSČ
     *
     * @var string
     */
    protected string $postCode;

    /**
     * specific code = 703, name = Slovensko, desc = Slovenská republika, name_en = Slovakia, desc_en = Slovak Republic, Alpha3 = SVK, Alpha2 = SK
     *
     * @return int
     */
    public function getStateCodeIso3166(): int
    {
        return $this->stateCodeIso3166;
    }

    /**
     * specific code = 703, name = Slovensko, desc = Slovenská republika, name_en = Slovakia, desc_en = Slovak Republic, Alpha3 = SVK, Alpha2 = SK
     *
     * @param int $stateCodeIso3166
     *
     * @return self
     */
    public function setStateCodeIso3166(int $stateCodeIso3166): self
    {
        $this->stateCodeIso3166 = $stateCodeIso3166;
        return $this;
    }

    /**
     * specific code = SK0101, name = Bratislava I, desc = Okres Bratislava I, desc_en = District of Bratislava I
     *
     * @return string
     */
    public function getLau1(): string
    {
        return $this->lau1;
    }

    /**
     * specific code = SK0101, name = Bratislava I, desc = Okres Bratislava I, desc_en = District of Bratislava I
     *
     * @param string $lau1
     *
     * @return self
     */
    public function setLau1(string $lau1): self
    {
        $this->lau1 = $lau1;
        return $this;
    }

    /**
     * lokálna štatistická územná jednotka 2
     *
     * @return string
     */
    public function getLau2(): string
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
    public function setLau2(string $lau2): self
    {
        $this->lau2 = $lau2;
        return $this;
    }

    /**
     * Regionálna štatistická územná jednotka 3
     *
     * @return string
     */
    public function getNUTS3(): string
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
    public function setNUTS3(string $nUTS3): self
    {
        $this->nUTS3 = $nUTS3;
        return $this;
    }

    /**
     * Ulica
     *
     * @return string
     */
    public function getStreet(): string
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
    public function setStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Súpisné/Popisné číslo
     *
     * @return int
     */
    public function getPropertyRegistrationNumber(): int
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
    public function setPropertyRegistrationNumber(int $propertyRegistrationNumber): self
    {
        $this->propertyRegistrationNumber = $propertyRegistrationNumber;
        return $this;
    }

    /**
     * Orientačné číslo
     *
     * @return string
     */
    public function getOrientationNumber(): string
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
    public function setOrientationNumber(string $orientationNumber): self
    {
        $this->orientationNumber = $orientationNumber;
        return $this;
    }

    /**
     * PSČ
     *
     * @return string
     */
    public function getPostCode(): string
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
    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;
        return $this;
    }
}
