<?php


require_once('class/Personne.php');
require_once('class/Conseiller.php');
require_once('class/Client.php');
require_once('class/PersonneManager.php');
require_once('class/Operation.php');

/*$persManager = PersonneManager::getInstance();
$persManager = PersonneManager::getInstance();

new PersonneManager();

$conseiller = $persManager->addConseiller("Pierre", "de Soos");
$persManager->addClient("Louis", "Fabre", $conseiller );

var_dump($persManager);*/

$operation1 = new Operation(100, "Retrait Distributeur");
var_dump($operation1);

echo "<br>";

$operation1->setMontant(-100);
var_dump($operation1);


