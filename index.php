<?php
require_once 'vendor/autoload.php';

//$manager = new TranslateManager\One();
//echo $manager->getVariable();
$manager = new \TranslateManager\Manager();

$adapterGoogle = new \TranslateManager\AdapterGoogle();

$manager->setAdapter($adapterGoogle);

$translate = $manager->translate('text one');
echo $translate;





//$object->percent = 0;
//echo $object->calculate();