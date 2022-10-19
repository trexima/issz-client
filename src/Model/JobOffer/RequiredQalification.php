<?php

namespace Trexima\Issz\Model\JobOffer;

class RequiredQalification
{
    /**
     * - 109710 - Neukončené základné vzdelanie
     * - 109711 - Základné vzdelanie
     * - 109712 - Nižšie stredné odborné vzdelanie
     * - 109713 - Stredné odborné vzdelanie
     * - 109714 - Úplné stredné odborné vzdelanie
     * - 109715 - Úplné stredné všeobecné vzdelanie
     * - 109716 - Vyššie odborné vzdelanie
     * - 109717 - Vysokoškolské vzdelanie prvého stupňa
     * - 109718 - Vysokoškolské vzdelanie druhého stupňa
     * - 109719 - Vysokoškolské vzdelanie tretieho stupňa
     *
     * @var string
     */
    protected string $educationLevel;
    /**
     * Študijný odbor
     *
     * @var string
     */
    protected string $fieldOfStudy;

    /**
     * - 109710 - Neukončené základné vzdelanie
     * - 109711 - Základné vzdelanie
     * - 109712 - Nižšie stredné odborné vzdelanie
     * - 109713 - Stredné odborné vzdelanie
     * - 109714 - Úplné stredné odborné vzdelanie
     * - 109715 - Úplné stredné všeobecné vzdelanie
     * - 109716 - Vyššie odborné vzdelanie
     * - 109717 - Vysokoškolské vzdelanie prvého stupňa
     * - 109718 - Vysokoškolské vzdelanie druhého stupňa
     * - 109719 - Vysokoškolské vzdelanie tretieho stupňa
     *
     * @return string
     */
    public function getEducationLevel(): string
    {
        return $this->educationLevel;
    }

    /**
     * - 109710 - Neukončené základné vzdelanie
     * - 109711 - Základné vzdelanie
     * - 109712 - Nižšie stredné odborné vzdelanie
     * - 109713 - Stredné odborné vzdelanie
     * - 109714 - Úplné stredné odborné vzdelanie
     * - 109715 - Úplné stredné všeobecné vzdelanie
     * - 109716 - Vyššie odborné vzdelanie
     * - 109717 - Vysokoškolské vzdelanie prvého stupňa
     * - 109718 - Vysokoškolské vzdelanie druhého stupňa
     * - 109719 - Vysokoškolské vzdelanie tretieho stupňa
     *
     * @param string $educationLevel
     *
     * @return self
     */
    public function setEducationLevel(string $educationLevel): self
    {
        $this->educationLevel = $educationLevel;
        return $this;
    }

    /**
     * Študijný odbor
     *
     * @return string
     */
    public function getFieldOfStudy(): string
    {
        return $this->fieldOfStudy;
    }

    /**
     * Študijný odbor
     *
     * @param string $fieldOfStudy
     *
     * @return self
     */
    public function setFieldOfStudy(string $fieldOfStudy): self
    {
        $this->fieldOfStudy = $fieldOfStudy;
        return $this;
    }
}
