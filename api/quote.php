<?php
require __DIR__.'/classes/Quote.php';
require __DIR__.'/config.php';
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/09/2018
 * Time: 13:30
 */


$quote = new Quote($prices);

$quote->setWebDesign(false);

$quote->setNumberOfPages(5);
$quote->setProjectType('site web');

echo 'type de projet :'.$quote->getProjectType();
echo'<br>';
echo 'estimation : '.$quote->calculPrice();
echo '<br>';