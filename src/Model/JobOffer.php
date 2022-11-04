<?php

namespace Trexima\Issz\Model;

use DateTime;
use Trexima\Issz\Model\JobOffer\Accomodation;
use Trexima\Issz\Model\JobOffer\JobLocation;
use Trexima\Issz\Model\JobOffer\Location;
use Trexima\Issz\Model\JobOffer\RequiredKnowledge;
use Trexima\Issz\Model\JobOffer\RequiredQalification;
use Trexima\Issz\Model\JobOffer\WorkingLoad;

class JobOffer implements \JsonSerializable
{
    /**
     * pracovná pozícia podľa kódu SK ISCO – 08
     *
     * @var string $SKISCO08
     */
    protected ?string $SKISCO08 = null;

    /**
     * IČO Zamestnávateľa
     *
     * @var string
     */
    protected ?string $legalID = null;

    /**
     * Uvádza sa plný názov právnickej osoby. Obsahuje celý názov v jednom reťazci, so všetkými časťami
     * v správnom poradí, čo znamená na správnom mieste. Oddelenie častí sa uvádza pomocou prázdneho znaku.
     * Uvádza sa vrátane typových označení organizácie ako a.s. a podobne.
     *
     * @var string
     */
    protected ?string $name = null;

    /**
     * Url pracovnej ponuky na externom portáli
     *
     * @var string
     */
    protected ?string $url = null;

    /**
     * Adresa zamestnávateľa
     *
     * @var Location
     */
    protected ?Location $location = null;

    /**
     * Názov pracovnej pozície
     *
     * @var string
     */
    protected ?string $positionName = null;

    /**
     * Prevažujúca činnosť zamestnávateľa
     *
     * @var string
     */
    protected ?string $sKNACE = null;

    /**
     * Popis práce
     *
     * @var string
     */
    protected ?string $jobDescription = null;

    /**
     * Adresa miesta výkonu práce
     *
     * @var JobLocation
     */
    protected ?JobLocation $jobLocation = null;

    /**
     * - 524801 Voľné pracovné miesto v podnikateľskej sfére
     * - 524803 Voľné pracovné miesto vo verejnom záujme
     * - 524802 Štátnozamestnanecké voľné pracovné miesto
     *
     * @var string
     */
    protected ?string $jobCategory = null;

    /**
     * Počet voľných pracovných miest
     *
     * @var int
     */
    protected ?int $jobPositionCount = null;

    /**
     * Základná zložka mzdy (výška v EUR). Ak nie je možné uviesť, potom zadať 0,-EUR a povinne uviesť
     * Platové podmienky so sumou
     *
     * @var float
     */
    protected ?float $baseSalary = null;

    /**
     * Platové podmienky. Povinné! ak je Základná zložka mzdy 0,-EUR
     *
     * @var string
     */
    protected ?string $salaryTerms = null;

    /**
     * Požadovaný deň nástupu do práce
     *
     * @var DateTime
     */
    protected ?DateTime $startingDay = null;

    /**
     * Pracovná oblasť – kód, ak je pracovná pozícia v inom SK NACE ako prevažujúca činnosť zamestnávateľa
     *
     * @var string
     */
    protected ?string $positionSKNACE = null;

    /**
     * Ustanovený týždenný pracovný čas v hodinách a rozvrhnutie pracovného času
     *
     * @var WorkingLoad
     */
    protected ?WorkingLoad $workingLoad = null;

    /**
     * Údaj o tom, či je práca vykonávaná na zmeny a zmennosť
     * - 501701 jednozmenná
     * - 501710 dohodou
     * - 501703 trojzmenná
     * - 501705 štvorzmenná
     * - 501706 nepretržitá
     * - 501707 turnusová
     * - 501708 delené zmeny
     * - 501702 dvojzmenná
     * - 501799 iná
     * - 501709 pružná
     *
     * @var string
     */
    protected ?string $workingShifts = null;

    /**
     * 501601 - Pracovný pomer na neurčitý čas
     * 501602 - Pracovný pomer na určitú dobu
     * 501603 - Pracovný pomer na kratší pracovný čas
     * 501604 - Domácka práca a telepráca
     * 501607 - Dohoda o pracovnej činnosti
     * 501608 - Delené pracovné miesto
     * 501609 - Pracovná zmluva so žiakom strednej odbornej školy alebo so žiakom odborného učilišťa
     * 501610 - Dobrovoľnícka práca
     * 501611 - Dohoda o vykonaní práce
     * 501612 - Práca na živnosť
     * 501613 - Dohoda o brigádnickej práci študentov
     *
     * @var string
     */
    protected ?string $employmentRelationship = null;

    /**
     * Údaj o tom, či je pracovné miesto vhodné pre absolventa
     *
     * @var bool
     */
    protected ?bool $graduateAvailability = null;

    /**
     * Údaj o tom, či je pracovné miesto vhodné pre občana so zdravotným postihnutím
     *
     * @var bool
     */
    protected ?bool $disabledAvailability = null;

    /**
     * údaj o tom, či má zamestnávateľ záujem obsadiť voľné pracovné miesto štátnym príslušníkom tretej krajiny
     *
     * @var bool
     */
    protected ?bool $foreignerAvailability = null;

    /**
     * Požadovaná kvalifikácia
     *
     * @var RequiredQalification
     */
    protected ?RequiredQalification $requiredQalification = null;

    /**
     * Požadovaná prax v rokoch
     *
     * @var int
     */
    protected ?int $requiredExperience = null;

    /**
     * Požadované znalosti potrebné na výkon práce
     *
     * @var RequiredKnowledge
     */
    protected ?RequiredKnowledge $requiredKnoledges = null;

    /**
     * Benefity poskytované zamestnávateľom
     *
     * @var string
     */
    protected ?string $benefits = null;

    /**
     * Možnosť ubytovania (hradené ubytovanie / zabezpečené ubytovanie)
     *
     * @var Accomodation
     */
    protected ?Accomodation $accomodation = null;

    /**
     * Obsadzovanie voľných pracovných miest vlastnou formou
     *
     * @var bool
     */
    protected ?bool $selfFiling = null;

    /**
     * ID voľného pracovného miesta portálu
     *
     * @var string
     */
    protected ?string $externalID = null;

    /**
     * Dátum a čas zmeny
     *
     * @var DateTime
     */
    protected ?DateTime $changedDate = null;

    /**
     * IČO Zamestnávateľa
     *
     * @return string
     */
    public function getLegalID(): ?string
    {
        return $this->legalID;
    }

    /**
     * IČO Zamestnávateľa
     *
     * @param string $legalID
     *
     * @return self
     */
    public function setLegalID(?string $legalID): self
    {
        $this->legalID = $legalID;
        return $this;
    }

    /**
     * Uvádza sa plný názov právnickej osoby. Obsahuje celý názov v jednom reťazci, so všetkými časťami v správnom
     * poradí, čo znamená na správnom mieste. Oddelenie častí sa uvádza pomocou prázdneho znaku. Uvádza sa vrátane
     * typových označení organizácie ako a.s. a podobne.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Uvádza sa plný názov právnickej osoby. Obsahuje celý názov v jednom reťazci, so všetkými časťami v správnom
     * poradí, čo znamená na správnom mieste. Oddelenie častí sa uvádza pomocou prázdneho znaku. Uvádza sa vrátane
     * typových označení organizácie ako a.s. a podobne.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Url pracovnej ponuky na externom portáli
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Url pracovnej ponuky na externom portáli
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adresa zamestnávateľa
     *
     * @return Location
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Adresa zamestnávateľa
     *
     * @param Location $location
     *
     * @return self
     */
    public function setLocation(?Location $location): self
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Názov pracovnej pozície
     *
     * @return string
     */
    public function getPositionName(): ?string
    {
        return $this->positionName;
    }

    /**
     * Názov pracovnej pozície
     *
     * @param string $positionName
     *
     * @return self
     */
    public function setPositionName(?string $positionName): self
    {
        $this->positionName = $positionName;
        return $this;
    }

    /**
     * Prevažujúca činnosť zamestnávateľa
     *
     * @return string
     */
    public function getSKNACE(): ?string
    {
        return $this->sKNACE;
    }

    /**
     * prevažujúca činnosť zamestnávateľa
     *
     * @param string $sKNACE
     *
     * @return self
     */
    public function setSKNACE(?string $sKNACE): self
    {
        $this->sKNACE = $sKNACE;
        return $this;
    }

    /**
     * popis práce
     *
     * @return string
     */
    public function getJobDescription(): ?string
    {
        return $this->jobDescription;
    }

    /**
     * popis práce
     *
     * @param string $jobDescription
     *
     * @return self
     */
    public function setJobDescription(?string $jobDescription): self
    {
        $this->jobDescription = $jobDescription;
        return $this;
    }

    /**
     * Adresa miesta výkonu práce
     *
     * @return ?JobLocation
     */
    public function getJobLocation(): ?JobLocation
    {
        return $this->jobLocation;
    }

    /**
     * adresa miesta výkonu práce
     *
     * @param JobLocation $jobLocation
     *
     * @return self
     */
    public function setJobLocation(?JobLocation $jobLocation): self
    {
        $this->jobLocation = $jobLocation;
        return $this;
    }

    /**
     * - 524801 Voľné pracovné miesto v podnikateľskej sfére
     * - 524803 Voľné pracovné miesto vo verejnom záujme
     * - 524802 Štátnozamestnanecké voľné pracovné miesto
     *
     * @return string
     */
    public function getJobCategory(): ?string
    {
        return $this->jobCategory;
    }

    /**
     * - 524801 Voľné pracovné miesto v podnikateľskej sfére
     * - 524803 Voľné pracovné miesto vo verejnom záujme
     * - 524802 Štátnozamestnanecké voľné pracovné miesto
     *
     * @param string $jobCategory
     *
     * @return self
     */
    public function setJobCategory(?string $jobCategory): self
    {
        $this->jobCategory = $jobCategory;
        return $this;
    }

    /**
     * Počet voľných pracovných miest
     *
     * @return int
     */
    public function getJobPositionCount(): ?int
    {
        return $this->jobPositionCount;
    }

    /**
     * Počet voľných pracovných miest
     *
     * @param int $jobPositionCount
     *
     * @return self
     */
    public function setJobPositionCount(?int $jobPositionCount): self
    {
        $this->jobPositionCount = $jobPositionCount;
        return $this;
    }

    /**
     * Základná zložka mzdy (výška v EUR)
     *
     * @return float
     */
    public function getBaseSalary(): ?float
    {
        return $this->baseSalary;
    }

    /**
     * Základná zložka mzdy (výška v EUR)
     *
     * @param float $baseSalary
     *
     * @return self
     */
    public function setBaseSalary(?float $baseSalary): self
    {
        $this->baseSalary = $baseSalary;
        return $this;
    }

    /**
     * Platové podmienky. Povinné! ak je Základná zložka mzdy 0,-EUR
     *
     * @return string
     */
    public function getSalaryTerms(): ?string
    {
        return $this->salaryTerms;
    }

    /**
     * Platové podmienky. Povinné! ak je Základná zložka mzdy 0,-EUR
     *
     * @param string $salaryTerms
     *
     * @return self
     */
    public function setSalaryTerms(?string $salaryTerms): self
    {
        $this->salaryTerms = $salaryTerms;
        return $this;
    }

    /**
     * požadovaný deň nástupu do práce
     *
     * @return DateTime
     */
    public function getStartingDay(): ?DateTime
    {
        return $this->startingDay;
    }

    /**
     * požadovaný deň nástupu do práce
     *
     * @param DateTime $startingDay
     *
     * @return self
     */
    public function setStartingDay(?DateTime $startingDay): self
    {
        $this->startingDay = $startingDay;
        return $this;
    }

    /**
     * pracovná oblasť – kód, ak je pracovná pozícia v inom SK NACE ako prevažujúca činnosť zamestnávateľa
     *
     * @return string
     */
    public function getPositionSKNACE(): ?string
    {
        return $this->positionSKNACE;
    }

    /**
     * pracovná oblasť – kód, ak je pracovná pozícia v inom SK NACE ako prevažujúca činnosť zamestnávateľa
     *
     * @param string $positionSKNACE
     *
     * @return self
     */
    public function setPositionSKNACE(?string $positionSKNACE): self
    {
        $this->positionSKNACE = $positionSKNACE;
        return $this;
    }

    /**
     * ustanovený týždenný pracovný čas v hodinách a rozvrhnutie pracovného času
     *
     * @return ?WorkingLoad
     */
    public function getWorkingLoad(): ?WorkingLoad
    {
        return $this->workingLoad;
    }

    /**
     * ustanovený týždenný pracovný čas v hodinách a rozvrhnutie pracovného času
     *
     * @param WorkingLoad $workingLoad
     *
     * @return self
     */
    public function setWorkingLoad(?WorkingLoad $workingLoad): self
    {
        $this->workingLoad = $workingLoad;
        return $this;
    }

    /**
     * údaj o tom, či je práca vykonávaná na zmeny a zmennosť
     * - 501701 jednozmenná
     * - 501710 dohodou
     * - 501703 trojzmenná
     * - 501705 štvorzmenná
     * - 501706 nepretržitá
     * - 501707 turnusová
     * - 501708 delené zmeny
     * - 501702 dvojzmenná
     * - 501799 iná
     * - 501709 pružná
     *
     * @return string
     */
    public function getWorkingShifts(): ?string
    {
        return $this->workingShifts;
    }

    /**
     * údaj o tom, či je práca vykonávaná na zmeny a zmennosť
     * - 501701 jednozmenná
     * - 501710 dohodou
     * - 501703 trojzmenná
     * - 501705 štvorzmenná
     * - 501706 nepretržitá
     * - 501707 turnusová
     * - 501708 delené zmeny
     * - 501702 dvojzmenná
     * - 501799 iná
     * - 501709 pružná
     *
     * @param string $workingShifts
     *
     * @return self
     */
    public function setWorkingShifts(?string $workingShifts): self
    {
        $this->workingShifts = $workingShifts;
        return $this;
    }

    /**
     * 501601 - Pracovný pomer na neurčitý čas
     * 501602 - Pracovný pomer na určitú dobu
     * 501603 - Pracovný pomer na kratší pracovný čas
     * 501604 - Domácka práca a telepráca
     * 501607 - Dohoda o pracovnej činnosti
     * 501608 - Delené pracovné miesto
     * 501609 - Pracovná zmluva so žiakom strednej odbornej školy alebo so žiadkom odborného učilišťa
     * 501610 - Dobrovoľnícka práca
     * 501611 - Dohoda o vykonaní práce
     * 501612 - Práca na živnosť
     * 501613 - Dohoda o brigádnickej práci študentov
     *
     * @return string
     */
    public function getEmploymentRelationship(): ?string
    {
        return $this->employmentRelationship;
    }

    /**
     * 501601 - Pracovný pomer na neurčitý čas
     * 501602 - Pracovný pomer na určitú dobu
     * 501603 - Pracovný pomer na kratší pracovný čas
     * 501604 - Domácka práca a telepráca
     * 501607 - Dohoda o pracovnej činnosti
     * 501608 - Delené pracovné miesto
     * 501609 - Pracovná zmluva so žiakom strednej odbornej školy alebo so žiadkom odborného učilišťa
     * 501610 - Dobrovoľnícka práca
     * 501611 - Dohoda o vykonaní práce
     * 501612 - Práca na živnosť
     * 501613 - Dohoda o brigádnickej práci študentov
     *
     * @param string $employmentRelationship
     *
     * @return self
     */
    public function setEmploymentRelationship(?string $employmentRelationship): self
    {
        $this->employmentRelationship = $employmentRelationship;
        return $this;
    }

    /**
     * údaj o tom, či je pracovné miesto vhodné pre absolventa
     *
     * @return bool
     */
    public function getGraduateAvailability(): ?bool
    {
        return $this->graduateAvailability;
    }

    /**
     * údaj o tom, či je pracovné miesto vhodné pre absolventa
     *
     * @param bool $graduateAvailability
     *
     * @return self
     */
    public function setGraduateAvailability(?bool $graduateAvailability): self
    {
        $this->graduateAvailability = $graduateAvailability;
        return $this;
    }

    /**
     * údaj o tom, či je pracovné miesto vhodné pre občana so zdravotným postihnutím
     *
     * @return bool
     */
    public function getDisabledAvailability(): ?bool
    {
        return $this->disabledAvailability;
    }

    /**
     * údaj o tom, či je pracovné miesto vhodné pre občana so zdravotným postihnutím
     *
     * @param bool $disabledAvailability
     *
     * @return self
     */
    public function setDisabledAvailability(?bool $disabledAvailability): self
    {
        $this->disabledAvailability = $disabledAvailability;
        return $this;
    }

    /**
     * údaj o tom, či má zamestnávateľ záujem obsadiť voľné pracovné miesto štátnym príslušníkom tretej krajiny
     *
     * @return bool
     */
    public function getForeignerAvailability(): ?bool
    {
        return $this->foreignerAvailability;
    }

    /**
     * údaj o tom, či má zamestnávateľ záujem obsadiť voľné pracovné miesto štátnym príslušníkom tretej krajiny
     *
     * @param bool $foreignerAvailability
     *
     * @return self
     */
    public function setForeignerAvailability(?bool $foreignerAvailability): self
    {
        $this->foreignerAvailability = $foreignerAvailability;
        return $this;
    }

    /**
     * požadovaná kvalifikácia
     *
     * @return JobOfferRequiredQalification
     */
    public function getRequiredQalification(): ?JobOfferRequiredQalification
    {
        return $this->requiredQalification;
    }

    /**
     * požadovaná kvalifikácia
     *
     * @param JobOfferRequiredQalification $requiredQalification
     *
     * @return self
     */
    public function setRequiredQalification(?JobOfferRequiredQalification $requiredQalification): self
    {
        $this->requiredQalification = $requiredQalification;
        return $this;
    }

    /**
     * požadovaná prax v rokoch
     *
     * @return int
     */
    public function getRequiredExperience(): ?int
    {
        return $this->requiredExperience;
    }

    /**
     * požadovaná prax v rokoch
     *
     * @param int $requiredExperience
     *
     * @return self
     */
    public function setRequiredExperience(?int $requiredExperience): self
    {
        $this->requiredExperience = $requiredExperience;
        return $this;
    }

    /**
     * požadované znalosti potrebné na výkon práce
     *
     * @return JobOfferRequiredKnowledge
     */
    public function getRequiredKnoledges(): ?JobOfferRequiredKnowledge
    {
        return $this->requiredKnoledges;
    }

    /**
     * požadované znalosti potrebné na výkon práce
     *
     * @param JobOfferRequiredKnowledge $requiredKnoledges
     *
     * @return self
     */
    public function setRequiredKnoledges(?JobOfferRequiredKnowledge $requiredKnoledges): self
    {
        $this->requiredKnoledges = $requiredKnoledges;
        return $this;
    }

    /**
     * benefity poskytované zamestnávateľom
     *
     * @return string
     */
    public function getBenefits(): ?string
    {
        return $this->benefits;
    }

    /**
     * benefity poskytované zamestnávateľom
     *
     * @param string $benefits
     *
     * @return self
     */
    public function setBenefits(?string $benefits): self
    {
        $this->benefits = $benefits;
        return $this;
    }

    /**
     * možnosť ubytovania (hradené ubytovanie / zabezpečené ubytovanie)
     *
     * @return JobOfferAccomodation
     */
    public function getAccomodation(): ?JobOfferAccomodation
    {
        return $this->accomodation;
    }

    /**
     * možnosť ubytovania (hradené ubytovanie / zabezpečené ubytovanie)
     *
     * @param JobOfferAccomodation $accomodation
     *
     * @return self
     */
    public function setAccomodation(?JobOfferAccomodation $accomodation): self
    {
        $this->accomodation = $accomodation;
        return $this;
    }

    /**
     * obsadzovanie voľných pracovných miest vlastnou formou
     *
     * @return bool
     */
    public function getSelfFiling(): ?bool
    {
        return $this->selfFiling;
    }

    /**
     * obsadzovanie voľných pracovných miest vlastnou formou
     *
     * @param bool $selfFiling
     *
     * @return self
     */
    public function setSelfFiling(?bool $selfFiling): self
    {
        $this->selfFiling = $selfFiling;
        return $this;
    }

    /**
     * ID voľného pracovného miesta portálu
     *
     * @return string
     */
    public function getExternalID(): ?string
    {
        return $this->externalID;
    }

    /**
     * ID voľného pracovného miesta portálu
     *
     * @param string $externalID
     *
     * @return self
     */
    public function setExternalID(?string $externalID): self
    {
        $this->externalID = $externalID;
        return $this;
    }

    /**
     * dátum a čas zmeny
     *
     * @return DateTime
     */
    public function getChangedDate(): ?DateTime
    {
        return $this->changedDate;
    }

    /**
     * dátum a čas zmeny
     *
     * @param DateTime $changedDate
     *
     * @return self
     */
    public function setChangedDate(?DateTime $changedDate): self
    {
        $this->changedDate = $changedDate;
        return $this;
    }

    /**
     * pracovná pozícia podľa kódu SK ISCO – 08
     *
     * @return string
     */
    public function getSKISCO08(): ?string
    {
        return $this->SKISCO08;
    }

    /**
     * pracovná pozícia podľa kódu SK ISCO – 08
     *
     * @param string $SKISCO08
     *
     * @return self
     */
    public function setSKISCO08(?string $SKISCO08): self
    {
        $this->SKISCO08 = $SKISCO08;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'legalID' => $this->getLegalID(),
            'name' => $this->getName(),
            'url' => $this->getUrl(),
            'location' => $this->getLocation(),
            'positionName' => $this->getPositionName(),
            'SKISCO-08' => $this->getSKISCO08(),
            'SK-NACE' => $this->getSKNACE(),
            'jobDescription' => $this->getJobDescription(),
            'jobLocation' => $this->getJobLocation(),
            'jobCategory' => $this->getJobCategory(),
            'jobPositionCount' => $this->getJobPositionCount(),
            'baseSalary' => $this->getBaseSalary(),
            'salaryTerms' => $this->getSalaryTerms(),
            'startingDate' => $this->getStartingDay(),
            'position-SK-NACE' => $this->getPositionSKNACE(),
            'workingLoad' => $this->getWorkingLoad(),
            'workingShifts' => $this->getWorkingShifts(),
            'employmentRelationship' => $this->getEmploymentRelationship(),
            'graduateAvailability' => $this->getGraduateAvailability(),
            'disabledAvailability' => $this->getDisabledAvailability(),
            'foreignerAvailability' => $this->getForeignerAvailability(),
            'requiredQalification' => $this->getRequiredQalification(),
            'requiredExperience' => $this->getRequiredExperience(),
            'requiredKnoledges' => $this->getRequiredKnoledges(),
            'benefits' => $this->getBenefits(),
            'accomodation' => $this->getAccomodation(),
            'selfFiling' => $this->getSelfFiling(),
            'externalID' => $this->getExternalID(),
            'changedDate' => $this->getChangedDate(),
        ];
    }
}
