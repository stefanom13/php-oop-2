<?php

require_once __DIR__ . '/Utente.php';

$Utente1 = new Utente('gianni','antonino','via pippo 23');

echo $Utente1->getNome();


?>