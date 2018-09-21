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
$numberOFHours = $quote->getNumberOFHours();
$ourLocal = $quote->getOurLocal();
$numberOFDays = $quote->getNumberOFDays();
$teleworking = $quote->getTeleworking();
$workforce = $quote->getWorkforce();
$minAmount = $estimation['minAmount'];
$maxAmount = $estimation['maxAmount'];
$maxAmount = number_format ($maxAmount,2,',',' ');
$minAmount = number_format ($minAmount,2,',',' ');


if ($webdesign == 1) {
    $webdesign = 'oui';
}
else{
    $webdesign = 'non';
}
if ($attendanceStatistic == 1) {
    $attendanceStatistic = 'oui';
}
else{
    $attendanceStatistic = 'non';
}
if ($referencingModule == 1) {
    $referencingModule = 'oui';
}
else{
    $referencingModule = 'non';
}
if ($contactForm == 1) {
    $contactForm = 'oui';
}
else{
    $contactForm = 'non';
}
if ($websiteHosting == 1) {
    $websiteHosting = 'oui';
}
else{
    $websiteHosting = 'non';
}
if ($ourLocal == 1) {
    $ourLocal = 'oui';
}
else{
    $ourLocal = 'non';
}
if ($teleworking == 1) {
    $teleworking = 'oui';
}
else{
    $teleworking = 'non';
}

if ($workforce == 10) {
    $workforce = '1 à 9';
}
elseif($workforce == 11){
    $workforce = '10 à 49';
}
elseif($workforce == 12){
    $workforce = '50 à 249';
}
elseif ($workforce == 13){
    $workforce = 'plus de 250';
}

if ($projectType == 1) {
    $projectType = 'site web';
    $body = "<p>Bonjour $companyName,</p>
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
Webdesign sur mesure  : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Statistiques de frequentation : $attendanceStatistic 
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
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>

<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 2) {
    $projectType = 'extranet/intranet';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
Webdesign sur mesure : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>

<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 3) {
    $projectType = 'e-commerce';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
Webdesign sur mesure : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Statistiques de frequentation : $attendanceStatistic 
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
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>
<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 4) {
    $projectType = 'application mobile';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
    <li>
Webdesign sur mesure : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Formulaire de contact : $contactForm 
    </li>
</ul>
</p>
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>
<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
} elseif ($projectType == 5) {
    $projectType = 'application web';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
 
    <li>
Webdesign sur mesure : $webdesign 
    </li>
    <li>
Nombre de modules sur mesure supplémentaire : $numberOfModules
    </li>
    <li>
Hébergement du site et DNS généré par Karudev : $websiteHosting
    </li>
</ul>
</p>
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>
<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
}
elseif($projectType == 6){
    $projectType = 'conseil formation';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
 
    <li>
 Nombre d'heures : $numberOFHours
    </li>
    <li>
Dans les locaux de Karudev : $ourLocal
    </li>
    <li>
Effectif : $workforce
    </li>
</ul>
</p>
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>
<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
}
elseif($projectType == 7){
    $projectType = 'Mission en régie';
    $body = "<p>Bonjour $companyName,</p>
<p>
Vous trouverez votre estimation :
<ul>
    <li>
Type de projet : $projectType
    </li>
 
    <li>
 Nombre de jours : $numberOFDays
    </li>
    <li>
Télétravail : $teleworking
    </li>
    <li>
Effectif : $workforce
    </li>
</ul>
</p>
La fourchette de prix de votre projet est estimée entre <b> $minAmount € </b>  et <b>$maxAmount € </b>.
<p>Notre directeur technique prendra contact avec vous dans un délais de 24h maximum.</p>
<p>Cordialement,<p>
 <p>L'équipe Karudev Informatique</p>
 
<p>
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-dolyveen.png' alt=\"logo\" width='232px' height='150px' />
<img src='http://karudev-informatique.fr/wp-content/uploads/2018/09/Carte-de-visite-EXE2.png' alt=\"logo\"  width='232px' height='150px'/>

</p>
";
}

$html = $body;