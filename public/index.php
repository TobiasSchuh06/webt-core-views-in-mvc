<?php

require_once "../vendor/autoload.php";

use Tobi\WebtCoreViewsInMvc\Model\Entity\Hotel;

$file = fopen("../templates/index.html","r");

$hotel1 = new Hotel(1, "Hotel Sonnenblick", 6, "Ein idyllisches Hotel am See mit Bergblick, stilvollen Zimmern und einem luxuriösen Wellnessbereich. Perfekt für Erholung und Outdoor-Aktivitäten.");
$hotel2 = new Hotel(2, "CityLodge Metropolis", 2, "Modernes Designhotel im Stadtzentrum mit top ausgestatteten Zimmern. Ideal für Geschäftsreisende und Städtetrips.");
$hotel3 = new Hotel(3, "Strandhotel Meerblick", 20, "Direkt am Sandstrand gelegen, mit Meerblick, Spa und exzellenter Küche. Perfekt für entspannte Strandurlaube.");

$renderedTemplate = str_replace("###hotel1###", $hotel1->getName(), fread($file, filesize("../templates/index.html")));
$renderedTemplate = str_replace("###hotel2###", $hotel2->getName(), $renderedTemplate);
$renderedTemplate = str_replace("###hotel3###", $hotel3->getName(), $renderedTemplate);

$renderedTemplate = str_replace("###stars1###", $hotel1->getStars(), $renderedTemplate);
$renderedTemplate = str_replace("###stars2###", $hotel2->getStars(), $renderedTemplate);
$renderedTemplate = str_replace("###stars3###", $hotel3->getStars(), $renderedTemplate);

$renderedTemplate = str_replace("###info1###", $hotel1->getDescription(), $renderedTemplate);
$renderedTemplate = str_replace("###info2###", $hotel2->getDescription(), $renderedTemplate);
$renderedTemplate = str_replace("###info3###", $hotel3->getDescription(), $renderedTemplate);

echo $renderedTemplate;

fclose($file);
?>