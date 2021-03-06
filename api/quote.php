<?php

//require __DIR__. '/../../../../wp-config.php';
require __DIR__ . '/classes/Quote.php';
require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/classes/Mail.php';


$projecttype = $_POST['projectType'];
$webdesign = (int)$_POST['webdesign'];
$numberofpages = (int)$_POST['numberOfPages'];
$numberofmodules = (int)$_POST['numberOfModules'];
$websitehosting = (int)$_POST['websiteHosting'];
$attendancestatistic = (int)$_POST['attendanceStatistic'];
$referencingmodule = (int)$_POST['referencingModule'];
$contactform = (int)$_POST['contactForm'];
$companyname = $_POST['companyName'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$numberofhours = (int)$_POST['numberOfHours'];
$numberofdays = (int)$_POST['numberOFDays'];
$ourlocal = (int)$_POST['ourLocal'];
$workforce = (int)$_POST['workforce'];
$teleworking = (int)$_POST['teleworking'];


$quote = new Quote($prices);
$quote->setWebdesign($webdesign);
$quote->setNumberOfPages($numberofpages);
$quote->setNumberOfModules($numberofmodules);
$quote->setWebsiteHosting($websitehosting);
$quote->setAttendanceStatistic($attendancestatistic);
$quote->setReferencingModule($referencingmodule);
$quote->setContactForm($contactform);
$quote->setCompanyName($companyname);
$quote->setMobile($mobile);
$quote->setNumberOFHours($numberofhours);
$quote->setNumberOFDays($numberofdays);
$quote->setOurLocal($ourlocal);
$quote->setWorkforce($workforce);
$quote->setTeleworking($teleworking);

$errors = array(
    'projet' => "Veuillez renseigner un type de projet",
    'email' => 'cette email est incorrect'
);

if (!empty($projecttype)) {
    $quote->setProjectType($projecttype);
} else {
    echo $errors['projet'];
}

if (!empty($email)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $quote->setEmail($email);
    } else {
        echo $errors['email'];
    }
} else {
    echo $errors['email'] = "Veuillez renseigner un email";

}

$amount = $quote->calculPrice();

header('Content-type: application/json');
$estimation = array(
    'minAmount' => $amount['minAmount'],
    'maxAmount' => $amount['maxAmount']
);
echo json_encode($estimation);

$mail = new Mail($quote, SMTP_ADDRESS, SMTP_PORT, SMTP_USERNAME, SMTP_PASSWORD);
$mail->send($quote);

echo '<br>';
echo "Type de projet : " . $projecttype;
echo '<br>';
echo "Webdesign sur mesure : " . $webdesign;
echo '<br>';
echo "Nombre de pages : " . $numberofpages;
echo '<br>';
echo "Nombre de modules sur mesure supplémentaire : " . $numberofmodules;
echo '<br>';
echo "Hébergement du site et DNS géneré par Karudev : " . $websitehosting;
echo '<br>';
echo "Statistique de frequentation : " . $attendancestatistic;
echo '<br>';
echo "Module de référencement : " . $referencingmodule;
echo '<br>';
echo "Formulaire de contact : " . $contactform;
echo '<br>';
echo "Société/Nom: " . $companyname;
echo '<br>';
echo "Tel : " . $mobile;
echo '<br>';
echo "Email : " . $email;
echo '<br>';
echo "nombre d'heures : " . $numberofhours;
echo '<br>';
echo "Dans les locaux de Karudev : " . $ourlocal;
echo '<br>';
echo "Effectif : " . $workforce;
echo '<br>';
echo "nombres de jours : " . $numberofdays;
echo '<br>';
echo "teletravail : " . $teleworking;
echo '<br>';







