<?php

/** Prices  */
define("WEBDESIGN_PRICE", "1000");
define("PAGE_PRICE", "100");
define("MODULE_PRICE", "1000");
define("ATTENDANCESTATISTIC_PRICE", "500");
define("REFERENCINGMODULE_PRICE", "1500");
define("CONTACTFORM_PRICE", "2000");
define("WEBSITEHOSTING_PRICE", "2500");
define("HONORARYRATE_PRICE", "50");
define("DAILYRATE_PRICE", "500");


/** Prices Projects*/

define("WEBSITE_PROJECT_TYPE_PRICE", "3000");
define("EXTRANET_PROJECT_TYPE_PRICE", "10000");
define("ECOMMERCE_PROJECT_TYPE_PRICE", "5000");
define("MOBILEAPPLICATION_PROJECT_TYPE_PRICE", "6000");
define("WEBAPPLICATION_PROJECT_TYPE_PRICE", "7000");


/**Coefficient*/

define("FIRSTCOEFFICIENT", "1");
define("SECONDCOEFFICIENT", "1.1");
define("THIRDCOEFFICIENT", "1.2");
define("FOURTHCOEFFICIENT", "1.3");
define("FIFTHCOEFFICIENT", "1.5");
define("SIXTHCOEFFICIENT", "-0.20");

$prices = array(
    "webdesign" => WEBDESIGN_PRICE,
    "page" => PAGE_PRICE,
    "module" => MODULE_PRICE,
    "statistique de frequentation" => ATTENDANCESTATISTIC_PRICE,
    "module de referencement" => REFERENCINGMODULE_PRICE,
    "formulaire de contact" => CONTACTFORM_PRICE,
    "hebergement" => WEBSITEHOSTING_PRICE,
    "tarif honaraire" => HONORARYRATE_PRICE,
    "tarif journalier" => DAILYRATE_PRICE,
    "projectType" => array(
        "site web" => WEBSITE_PROJECT_TYPE_PRICE,
        "extranet" => EXTRANET_PROJECT_TYPE_PRICE,
        "ecommerce" => ECOMMERCE_PROJECT_TYPE_PRICE,
        "application mobile" => MOBILEAPPLICATION_PROJECT_TYPE_PRICE,
        "application web" => WEBAPPLICATION_PROJECT_TYPE_PRICE,
    ),
    "coefficient" => array(
        "1" => FIRSTCOEFFICIENT,
        "2" => SECONDCOEFFICIENT,
        "3" => THIRDCOEFFICIENT,
        "4" => FOURTHCOEFFICIENT,
        "5" => FIFTHCOEFFICIENT,
        "6" => SIXTHCOEFFICIENT,

    )

);


/** SMTP */
define("SMTP_ADDRESS", 'ssl0.ovh.net');
define("SMTP_PORT", '587');
define("SMTP_USERNAME", 'dev@karudev-informatique.fr');
define("SMTP_PASSWORD", 'developpeur');

/** Mail */
define('SENDER', 's.renault@karudev-informatique.fr');
