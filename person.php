<?php header('Content-Type: application/xml');
$xml = new SimpleXMLElement('<persons/>');
$person = $xml->addChild('person');
$person->addChild('id', 1);
$person->addChild('name', 'Wida Monica');
$person->addChild('age', 19);
$address = $person->addChild('address');
$address->addChild('street', 'Jalan ABC');
$address->addChild('city', 'Muncar');
$hobbies = $person->addChild('hobbies');
$hobbies->addChild('hobby', 'Videografer');
$hobbies->addChild('hobby', 'Fotografer');
echo $xml->asXML();
?>
