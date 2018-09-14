<?php
require __DIR__.'/classes/Quote.php';
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/09/2018
 * Time: 13:30
 */


$quote = new Quote();
$quote->setProjectType('karudev');
$quote->setNumberOfpages(10);

echo 'test';
echo $quote->getProjectType();
