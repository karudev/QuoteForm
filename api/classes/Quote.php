<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/09/2018
 * Time: 13:30
 */


class Quote

{
    const WEBSITE_PROJECT_TYPE = 1;
    const EXTRANET_PROJECT_TYPE = 2;
    const ECOMMERCE_PROJECT_TYPE = 3;
    const MOBILEAPPLICATION_PROJECT_TYPE = 4;
    const WEBAPPLICATION_PROJECT_TYPE = 5;
    const ADVICETRAINING_PROJECT_TYPE = 6;
    const MISSION_PROJECT_TYPE = 7;

    const MICRO_BUSINESS_WORKFORCE = 10;
    const TPE_BUSINESS_WORKFORCE = 11;
    const PME_BUSINESS_WORKFORCE = 12;
    const BIG_BUSINESS_WORKFORCE = 13;


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

    private $priceAttendancestatistic;

    private $priceReferencingModule;

    private $priceContactForm;

    private $priceWebsiteHosting;

    private $priceSiteWeb;

    private $priceExtranet;

    private $priceEcommerce;

    private $priceWebApplication;

    private $priceMobileApplication;

    private $priceAdviceTraining;

    private $priceMission;

    private $estimation;

    private $numberOFHours;

    private $numberOFDays;

    private $workforce;

    private $ourLocal;

    private $yourLocal;

    private $teleworking;

    private $priceHonoraryRate;

    private $priceDailyRate;

    private $firstCoefficient;

    private $secondCoefficient;

    private $thirdCoefficient;


    public function Quote($prices)
    {
        $this->pricePage = $prices['page'];
        $this->priceWebDesign = $prices['webdesign'];
        $this->priceModule = $prices['module'];
        $this->priceAttendancestatistic = $prices['statistique de frequentation'];
        $this->priceReferencingModule = $prices['module de referencement'];
        $this->priceContactForm = $prices['formulaire de contact'];
        $this->priceWebsiteHosting = $prices['hebergement'];
        $this->priceHonoraryRate = $prices['tarif honaraire'];
        $this->priceDailyRate = $prices['tarif journalier'];
        $this->priceSiteWeb = $prices['projectType']['site web'];
        $this->priceExtranet = $prices['projectType']['extranet'];
        $this->priceEcommerce = $prices['projectType']['ecommerce'];
        $this->priceWebApplication = $prices['projectType']['application web'];
        $this->priceMobileApplication = $prices['projectType']['application mobile'];

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

    /**
     * @return mixed
     */
    public function getPriceWebApplication()
    {
        return $this->priceWebApplication;
    }

    /**
     * @param mixed $priceWebApplication
     */
    public function setPriceWebApplication($priceWebApplication)
    {
        $this->priceWebApplication = $priceWebApplication;
    }

    /**
     * @return mixed
     */
    public function getPriceMobileApplication()
    {
        return $this->priceMobileApplication;
    }

    /**
     * @param mixed $priceMobileApplication
     */
    public function setPriceMobileApplication($priceMobileApplication)
    {
        $this->priceMobileApplication = $priceMobileApplication;
    }

    /**
     * @return mixed
     */
    public function getPriceAttendancestatistic()
    {
        return $this->priceAttendancestatistic;
    }

    /**
     * @param mixed $priceAttendancestatistic
     */
    public function setPriceAttendancestatistic($priceAttendancestatistic)
    {
        $this->priceAttendancestatistic = $priceAttendancestatistic;
    }

    /**
     * @return mixed
     */
    public function getPriceReferencingModule()
    {
        return $this->priceReferencingModule;
    }

    /**
     * @param mixed $priceReferencingModule
     */
    public function setPriceReferencingModule($priceReferencingModule)
    {
        $this->priceReferencingModule = $priceReferencingModule;
    }

    /**
     * @return mixed
     */
    public function getPriceContactForm()
    {
        return $this->priceContactForm;
    }

    /**
     * @param mixed $priceContactForm
     */
    public function setPriceContactForm($priceContactForm)
    {
        $this->priceContactForm = $priceContactForm;
    }

    /**
     * @return mixed
     */
    public function getPriceWebsiteHosting()
    {
        return $this->priceWebsiteHosting;
    }

    /**
     * @param mixed $priceWebsiteHosting
     */
    public function setPriceWebsiteHosting($priceWebsiteHosting)
    {
        $this->priceWebsiteHosting = $priceWebsiteHosting;
    }


    /**
     * @return mixed
     */
    public function getNumberOFHours()
    {
        return $this->numberOFHours;
    }

    /**
     * @param mixed $numberOFHours
     */
    public function setNumberOFHours($numberOFHours)
    {
        $this->numberOFHours = $numberOFHours;
    }

    /**
     * @return mixed
     */
    public function getNumberOFDays()
    {
        return $this->numberOFDays;
    }

    /**
     * @param mixed $numberOFDays
     */
    public function setNumberOFDays($numberOFDays)
    {
        $this->numberOFDays = $numberOFDays;
    }

    /**
     * @return mixed
     */
    public function getWorkforce()
    {
        return $this->workforce;
    }

    /**
     * @param mixed $workforce
     */
    public function setWorkforce($workforce)
    {
        $this->workforce = $workforce;
    }

    /**
     * @return mixed
     */
    public function getOurLocal()
    {
        return $this->ourLocal;
    }

    /**
     * @param mixed $ourLocal
     */
    public function setOurLocal($ourLocal)
    {
        $this->ourLocal = $ourLocal;
    }

    /**
     * @return mixed
     */
    public function getYourLocal()
    {
        return $this->yourLocal;
    }

    /**
     * @param mixed $yourLocal
     */
    public function setYourLocal($yourLocal)
    {
        $this->yourLocal = $yourLocal;
    }

    /**
     * @return mixed
     */
    public function getTeleworking()
    {
        return $this->teleworking;
    }

    /**
     * @param mixed $teleworking
     */
    public function setTeleworking($teleworking)
    {
        $this->teleworking = $teleworking;
    }

    /**
     * @return mixed
     */
    public function getFirstCoefficient()
    {
        return $this->firstCoefficient;
    }

    /**
     * @param mixed $firstCoefficient
     */
    public function setFirstCoefficient($firstCoefficient)
    {
        $this->firstCoefficient = $firstCoefficient;
    }

    /**
     * @return mixed
     */
    public function getSecondCoefficient()
    {
        return $this->secondCoefficient;
    }

    /**
     * @param mixed $secondCoefficient
     */
    public function setSecondCoefficient($secondCoefficient)
    {
        $this->secondCoefficient = $secondCoefficient;
    }

    /**
     * @return mixed
     */
    public function getThirdCoefficient()
    {
        return $this->thirdCoefficient;
    }

    /**
     * @param mixed $thirdCoefficient
     */
    public function setThirdCoefficient($thirdCoefficient)
    {
        $this->thirdCoefficient = $thirdCoefficient;
    }

    /**
     * @return mixed
     */
    public function getPriceHonoraryRate()
    {
        return $this->priceHonoraryRate;
    }

    /**
     * @param mixed $priceHonoraryRate
     */
    public function setPriceHonoraryRate($priceHonoraryRate)
    {
        $this->priceHonoraryRate = $priceHonoraryRate;
    }

    /**
     * @return mixed
     */
    public function getPriceDailyRate()
    {
        return $this->priceDailyRate;
    }

    /**
     * @param mixed $priceDailyRate
     */
    public function setPriceDailyRate($priceDailyRate)
    {
        $this->priceDailyRate = $priceDailyRate;
    }


    /**
     * @return mixed
     */
    public function getPriceAdviceTraining()
    {
        return $this->priceAdviceTraining;
    }

    /**
     * @param mixed $priceAdviceTraining
     */
    public function setPriceAdviceTraining($priceAdviceTraining)
    {
        $this->priceAdviceTraining = $priceAdviceTraining;
    }

    /**
     * @return mixed
     */
    public function getPriceMission()
    {
        return $this->priceMission;
    }

    /**
     * @param mixed $priceMission
     */
    public function setPriceMission($priceMission)
    {
        $this->priceMission = $priceMission;
    }


    public function calculPrice()

    {

        if ($this->projectType == self::WEBSITE_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceSiteWeb;
        } elseif ($this->projectType == self::EXTRANET_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceExtranet;
        } elseif ($this->projectType == self::ECOMMERCE_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceEcommerce;
        } elseif ($this->projectType == self::WEBAPPLICATION_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceWebApplication;
        } elseif ($this->projectType == self::MOBILEAPPLICATION_PROJECT_TYPE) {
            $this->estimation = $this->estimation + $this->priceMobileApplication;
        }
        if ($this->webdesign == 1) {
            $this->estimation = $this->estimation + $this->priceWebDesign;
        }
        if ($this->attendanceStatistic == 1) {
            $this->estimation = $this->estimation + $this->priceAttendancestatistic;
        }
        if ($this->referencingModule == 1) {
            $this->estimation = $this->estimation + $this->priceReferencingModule;
        }
        if ($this->contactForm == 1) {
            $this->estimation = $this->estimation + $this->priceContactForm;
        }
        if ($this->websiteHosting == 1) {
            $this->estimation = $this->estimation + $this->priceWebsiteHosting;
        }
        if ($this->numberOfModules > 0) {
            $this->estimation = $this->estimation + $this->numberOfModules * $this->priceModule;
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