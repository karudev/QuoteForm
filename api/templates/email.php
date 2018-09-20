<?php
$projectType = $quote->getProjectType();
$numberOfPages = $quote->getNumberOfPages() | number_format (2,',',' ');
$webdesign = $quote->getWebdesign();
$numberOfModules = $quote->getNumberOfModules() | number_format (2,',',' ');
$attendanceStatistic = $quote->getAttendanceStatistic();
$referencingModule = $quote->getReferencingModule();
$contactForm = $quote->getContactForm();
$companyName = $quote->getCompanyName();
$websiteHosting = $quote->getWebsiteHosting();
$estimation = $quote->getEstimation();
$minAmount = $estimation['minAmount']| number_format (2,',',' ');
$maxAmount = $estimation['maxAmount']| number_format (2,',',' ');


if ($webdesign == true) {
    $webdesign = 'oui';
}
if ($attendanceStatistic == true) {
    $attendanceStatistic = 'oui';
}
if ($referencingModule == true) {
    $referencingModule = 'oui';
}
if ($contactForm == true) {
    $contactForm = 'oui';
}
if ($websiteHosting == true) {
    $websiteHosting = 'oui';
}

if ($projectType == 1) {
    $projectType = 'site web';
    $body = "<p>Bonjour, $companyName</p>
<p>
Vous trouverez, votre estimation :
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
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>

<p>Cordialement,<p>
 <p>L'équipe karudev informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 2) {
    $projectType = 'extranet/intranet';
    $body = "<p>Bonjour, $companyName</p>
<p>
Vous trouverez, votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
webdesign : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>

<p>Cordialement,<p>
 <p>L'équipe karudev informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 3) {
    $projectType = 'e-commerce';
    $body = "<p>Bonjour, $companyName</p>
<p>
Vous trouverez, votre estimation :
<ul>
    <li>
Type de projet : $projectType
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
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>

<p>Cordialement,<p>
 <p>L'équipe karudev informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 4) {
    $projectType = 'application mobile';
    $body = "<p>Bonjour, $companyName</p>
<p>
Vous trouverez, votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
webdesign : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Formulaire de contact : $contactForm 
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>

<p>Cordialement,<p>
 <p>L'équipe karudev informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 5) {
    $projectType = 'application web';
    $body = "<p>Bonjour, $companyName</p>
<p>
Vous trouverez, votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
 
    <li>
webdesign : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>

<p>Cordialement,<p>
 <p>L'équipe karudev informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
}

$html = $body;