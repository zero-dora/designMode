<?php

namespace Creational\Cloneable;

/**
 * 简历类（深拷贝）
 */
class Resume2
{
    private string $name;
    private string $sex;
    private string $age;
    private WorkExperience2 $workExperience;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->workExperience = new WorkExperience2();
    }


    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }


    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * @param string $workDate
     * @param string $company
     * @return void
     */
    public function setWorkExperience(string $workDate, string $company): void
    {
        $this->workExperience->setWorkData($workDate);
        $this->workExperience->setCompany($company);
    }

    public function display()
    {
        print_r($this->name . ' ' . $this->sex . ' ' . $this->age . "\n");
        print_r("工作经历：" . $this->workExperience->getWorkData() . " " . $this->workExperience->getWorkData() . "\n");
    }

    public function __clone(): void
    {
        $this->workExperience = clone $this->workExperience;
    }

}