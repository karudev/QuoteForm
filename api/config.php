<?php


define("WEBDESIGN_PRICE", "1000");
define("PAGE_PRICE", "100");
define("MODULE_PRICE", "1000");
define("WEBSITE_PROJECT_TYPE_PRICE", "3000");
define("EXTRANET_PROJECT_TYPE_PRICE", "10000");
define("ECOMMERCE_PROJECT_TYPE_PRICE", "5000");
define("MOBILEAPPLICATION_PROJECT_TYPE_PRICE", "6000");
define("WEBAPPLICATION_PROJECT_TYPE_PRICE", "7000");

$prices = array(
    "webdesign" => WEBDESIGN_PRICE,
    "page" => PAGE_PRICE,
    "module" => MODULE_PRICE,
    "projectType" => array(
        "site web" => WEBSITE_PROJECT_TYPE_PRICE,
        "extranet" => EXTRANET_PROJECT_TYPE_PRICE,
        "ecommerce" => ECOMMERCE_PROJECT_TYPE_PRICE,
        "application mobile" => MOBILEAPPLICATION_PROJECT_TYPE_PRICE,
        "application web" => WEBAPPLICATION_PROJECT_TYPE_PRICE,
    )
);


define("SMTP_ADDRESS", 'ssl0.ovh.net');
define("SMTP_PORT", '587');
define("SMTP_USERNAME", 'dev@karudev-informatique.fr');
define("SMTP_PASSWORD", 'developpeur');
