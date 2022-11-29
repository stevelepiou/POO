<?php

require_once './Class/voiture.php';

$peugeot = new Car('308', 'Peugeot','grise',0,false,'diesel',130,'ne tourne pas');

$peugeot->setDemarrer(true);

echo 'la voiture a demarré : '.$peugeot->getDemarrer().' et  elle : ' . $peugeot->getVirage() . '.';


$peugeot->setCompteur(130);

echo '<br>la voiture accélère jusqu\'à : '.$peugeot->getCompteur().' km/h. et elle : ' . $peugeot->getVirage() . '.';

$peugeot->freiner(50);

$peugeot->setVirage('tourne à droite');
echo '<br>Elle freine à : '.$peugeot->getCompteur().' km/h et  elle ' . $peugeot->getVirage() . '.';;





$peugeot->setDemarrer(false);
$peugeot->setCompteur(0);

echo '<br>on arrête la voiture, le compteur tombe à :'.$peugeot->getCompteur().' km/h.';


echo'<p><hr></p>
     <p><hr></p>';



$BMW = new Car('235i','BMW','rouge',0,false,'diesel',326,'ne tourne pas');

$BMW->setDemarrer(true);

echo 'La voiture a démarré : '.$BMW->getDemarrer(). ' et elle '.$BMW->getVirage().'.';

$BMW->setCompteur(180);
$BMW->setVirage('tourne à gauche');

echo'<br>On la fait montée jusqu\'à '.$BMW->getCompteur(). ' et elle '.$BMW->getVirage().'.';

$BMW->freiner(30);

echo'<br>On freine à '.$BMW->getCompteur().' pour';

$BMW->freiner(0);
echo' tout doucement s\'arrêter et tomber à '. $BMW->getCompteur().' et mettre du '. $BMW->getCarburant().'.';


