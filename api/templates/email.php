<?php
$projectType = $quote->getProjectType();
$numberOfPages = $quote->getNumberOfPages();
$webdesign = $quote->getWebdesign();
$numberOfModules = $quote->getNumberOfModules();
$attendanceStatistic = $quote->getAttendanceStatistic();
$referencingModule = $quote->getReferencingModule();
$contactForm = $quote->getContactForm();
$companyName = $quote->getCompanyName();
$websiteHosting = $quote->getWebsiteHosting();
$estimation = $quote->getEstimation();
$minAmount = $estimation['minAmount'];
$maxAmount = $estimation['maxAmount'];

if($webdesign == true ){
  $webdesign = 'oui';
}
if($attendanceStatistic == true ){
    $attendanceStatistic = 'oui';
}
if($referencingModule == true ){
    $referencingModule = 'oui';
}
if($contactForm == true ){
    $contactForm = 'oui';
}
if($websiteHosting == true ) {
    $websiteHosting = 'oui';
}

$html = "<p>Bonjour,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
Nombre de pages : $numberOfPages
    </li>
    <li>
webdesign : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Statistique de frequentation : $attendanceStatistic 
    </li>
    <li>
    Module de référencement : $referencingModule
    <li>
Formulaire de contact : $contactForm 
    </li>
    <li>
Société/Nom : $companyName 
    </li>
    <li>
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>
Cordialement, l'équipe karudev informatique
</p>
<p> <img src=\"../images/Karudev_logo.png\">
</p>
";