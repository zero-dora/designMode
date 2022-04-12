<?php
namespace Creational\Cloneable;

/**
 * 工作经历类
 */
class WorkExperience
{
    private string $workData;
    private string $company;

    /**
     * @return string
     */
    public function getWorkData(): string
    {
        return $this->workData;
    }

    /**
     * @param string $workData
     */
    public function setWorkData(string $workData): void
    {
        $this->workData = $workData;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company): void
    {
        $this->company = $company;
    }
}