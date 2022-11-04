<?php

namespace Trexima\Issz\Model\JobOffer;

class WorkingLoad implements \JsonSerializable
{
    /**
     * Ustanovený týždenný pracovný čas v hodinách
     * @var int
     */
    protected ?int $workingWeekHours = null;

    /**
     * Rozvrhnutie pracovného času
     * @var string
     */
    protected ?string $workingTimes = null;

    /**
     * Ustanovený týždenný pracovný čas v hodinách
     *
     * @return int
     */
    public function getWorkingWeekHours(): ?int
    {
        return $this->workingWeekHours;
    }

    /**
     * Ustanovený týždenný pracovný čas v hodinách
     *
     * @param int $workingWeekHours
     *
     * @return self
     */
    public function setWorkingWeekHours(?int $workingWeekHours): self
    {
        $this->workingWeekHours = $workingWeekHours;
        return $this;
    }

    /**
     * Rozvrhnutie pracovného času
     *
     * @return string
     */
    public function getWorkingTimes(): ?string
    {
        return $this->workingTimes;
    }

    /**
     * Rozvrhnutie pracovného času
     *
     * @param string $workingTimes
     *
     * @return self
     */
    public function setWorkingTimes(?string $workingTimes): self
    {
        $this->workingTimes = $workingTimes;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'workingWeekHours' => $this->getWorkingWeekHours(),
            'workingTimes' => $this->getWorkingTimes(),
        ];
    }
}
