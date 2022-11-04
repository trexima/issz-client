<?php

namespace Trexima\Issz\Model\JobOffer;

class RequiredKnowledge implements \JsonSerializable
{
    /**
     * Všeobecné spôsobilosti
     *
     * @var string
     */
    protected ?string $generalAbilities = null;

    /**
     * Osobnostné predpoklady
     *
     * @var string
     */
    protected ?string $personalPrerequisites = null;

    /**
     * Osvedčenia/certifikáty
     *
     * @var string
     */
    protected ?string $certification = null;

    /**
     * Vodičské oprávnenie
     *
     * @var string
     */
    protected ?string $drivingLicence = null;

    /**
     * Všeobecné spôsobilosti
     *
     * @return string
     */
    public function getGeneralAbilities(): ?string
    {
        return $this->generalAbilities;
    }

    /**
     * Všeobecné spôsobilosti
     *
     * @param string $generalAbilities
     *
     * @return self
     */
    public function setGeneralAbilities(?string $generalAbilities): self
    {
        $this->generalAbilities = $generalAbilities;
        return $this;
    }

    /**
     * Osobnostné predpoklady
     *
     * @return string
     */
    public function getPersonalPrerequisites(): ?string
    {
        return $this->personalPrerequisites;
    }

    /**
     * Osobnostné predpoklady
     *
     * @param string $personalPrerequisites
     *
     * @return self
     */
    public function setPersonalPrerequisites(?string $personalPrerequisites): self
    {
        $this->personalPrerequisites = $personalPrerequisites;
        return $this;
    }

    /**
     * Osvedčenia/certifikáty
     *
     * @return string
     */
    public function getCertification(): ?string
    {
        return $this->certification;
    }

    /**
     * Osvedčenia/certifikáty
     *
     * @param string $certification
     *
     * @return self
     */
    public function setCertification(?string $certification): self
    {
        $this->certification = $certification;
        return $this;
    }

    /**
     * Vodičské oprávnenie
     *
     * @return string
     */
    public function getDrivingLicence(): ?string
    {
        return $this->drivingLicence;
    }

    /**
     * Vodičské oprávnenie
     *
     * @param string $drivingLicence
     *
     * @return self
     */
    public function setDrivingLicence(?string $drivingLicence): self
    {
        $this->drivingLicence = $drivingLicence;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'generalAbilities' => $this->getGeneralAbilities(),
            'personalPrerequisites' => $this->getPersonalPrerequisites(),
            'certification' => $this->getCertification(),
            'drivingLicence' => $this->getDrivingLicence(),
        ];
    }
}
