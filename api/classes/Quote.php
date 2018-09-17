<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/09/2018
 * Time: 13:30
 */
require '/var/www/html/api/config.php';

class Quote

{
    const WEBSITE_PROJECT_TYPE = 1;
    const EXTRANET_PROJECT_TYPE = 2;
    const ECOMMERCE_PROJECT_TYPE = 3;

    private $projectType;

    private $webdesign;

    private $numberOfPages;

    private $numberOfModules;

    private $websiteHosting;

    private $attendanceStatistic;

    private $referencingModule;

    private $contactForm;

    private $companyName;

    private $mobile;

    private $email;

    private $pricePage;

    private $priceWebDesign;

    private $priceModule;

    private $priceSiteWeb;

    private $priceExtranet;

    private $priceEcommerce;

    private $estimation;


    public function Quote($prices)
    {
        $this->pricePage = $prices['page'];
        $this->priceWebDesign = $prices['webdesign'];
        $this->priceModule = $prices['module'];
        $this->priceSiteWeb = $prices['projectType']['site web'];
        $this->priceExtranet = $prices['projectType']['extranet'];
        $this->priceEcommerce = $prices['projectType']['ecommerce'];
    }

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
    public function getWebdesign()
    {
        return $this->webdesign;
    }

    /**
     * @param mixed $webdesign
     */
    public function setWebdesign($webdesign)
    {
        $this->webdesign = $webdesign;
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

    /**
     * @return mixed
     */
    public function getPricePage()
    {
        return $this->pricePage;
    }

    /**
     * @param mixed $pricePage
     */
    public function setPricePage($pricePage)
    {
        $this->pricePage = $pricePage;
    }


    /**
     * @return mixed
     */
    public function getEstimation()
    {
        return $this->estimation;
    }

    /**
     * @param mixed $estimation
     */
    public function setEstimation($estimation)
    {
        $this->estimation = $estimation;
    }


    public function calculPrice()

    {

        if ($this->projectType == self::WEBSITE_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceSiteWeb;
        } elseif ($this->projectType == self::EXTRANET_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceExtranet;
        } elseif ($this->projectType == self::ECOMMERCE_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceEcommerce;
        }
        if ($this->webdesign == true) {
            $this->estimation = $this->estimation + $this->priceWebDesign;
        }
        if ($this->numberOfPages > 0) {
            $this->estimation = $this->estimation + ($this->numberOfPages * $this->pricePage);
        }
        $this->estimation = array(
            'minAmount' => $this->estimation - 1000,
            'maxAmount' => $this->estimation + 2000,
        );
        return $this->estimation;

    }
}