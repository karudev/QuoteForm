<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/09/2018
 * Time: 13:30
 */

class Quote

{

private $projectType;

private $webDesign;

private $numberOfPages;

private $numberOfModules;

private $websiteHosting;

private $attendanceStatistic;

private $referencingModule;

private $contactForm;

private $companyName;

private $mobile;

private $email;


    /**
     * @return mixed
     */
    public function getProjectType()
    {
        return $this->projectType;
    }

    /**
     * @param mixed $projectType
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;
    }

    /**
     * @return mixed
     */
    public function getWebDesign()
    {
        return $this->webDesign;
    }

    /**
     * @param mixed $webDesign
     */
    public function setWebDesign($webDesign)
    {
        $this->webDesign = $webDesign;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @param mixed $numberOfPages
     */
    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return mixed
     */
    public function getNumberOfModules()
    {
        return $this->numberOfModules;
    }

    /**
     * @param mixed $numberOfModules
     */
    public function setNumberOfModules($numberOfModules)
    {
        $this->numberOfModules = $numberOfModules;
    }

    /**
     * @return mixed
     */
    public function getWebsiteHosting()
    {
        return $this->websiteHosting;
    }

    /**
     * @param mixed $websiteHosting
     */
    public function setWebsiteHosting($websiteHosting)
    {
        $this->websiteHosting = $websiteHosting;
    }

    /**
     * @return mixed
     */
    public function getAttendanceStatistic()
    {
        return $this->attendanceStatistic;
    }

    /**
     * @param mixed $attendanceStatistic
     */
    public function setAttendanceStatistic($attendanceStatistic)
    {
        $this->attendanceStatistic = $attendanceStatistic;
    }

    /**
     * @return mixed
     */
    public function getReferencingModule()
    {
        return $this->referencingModule;
    }

    /**
     * @param mixed $referencingModule
     */
    public function setReferencingModule($referencingModule)
    {
        $this->referencingModule = $referencingModule;
    }

    /**
     * @return mixed
     */
    public function getContactForm()
    {
        return $this->contactForm;
    }

    /**
     * @param mixed $contactForm
     */
    public function setContactForm($contactForm)
    {
        $this->contactForm = $contactForm;
    }


    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}

