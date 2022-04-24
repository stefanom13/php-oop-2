<?php

require_once __DIR__ . '/models/Utente.php';
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/carrello.php';
require_once __DIR__ . '/models/ospite.php';
require_once __DIR__ . '/models/CreditCard.php';

$prodotto1 = new prodotto(
    'Medicinale',
    'Collare',
    'Antiparassitario',
    'Seresto',
    39.70
  );
  $prodotto2 = new prodotto(
    'Cibo',
    'Chicken lovely',
    'Crocchette',
    'Foodlovedog',
    22.50
  );
  $prodotto3 = new prodotto(
    'Cuccia',
    'Cuccia Small',
    'Cuccia cani taglia s',
    'CaniAmici',
    30.00
  );
  $prodotto4 = new prodotto(
    'Cuccia',
    'Cuccia Large',
    'Cuccia cani taglia m/l',
    'CaniAmici',
    49.90
  );
  $prodotto5 = new prodotto(
    'Cibo',
    'Fish lovely',
    'Crocchette',
    'Foodlovedog',
    22.00
  );
  var_dump($prodotto1, $prodotto2, $prodotto3, $prodotto4,$prodotto5);

  $carrello1 = new carrello(
    [],
    '',
    ''
  );
  $carrello1->addProdotti($prodotto2);
  $carrello1->addProdotti($prodotto4);
  $carrello1->addProdotti($prodotto4);
  $carrello1->addProdotti($prodotto5);
  $carrello1->calcTot();
  $carrello1->countTotProdotti();


$carrello2 = new carrello(
    [],
    '',
    ''
  );
  $carrello2->addProdotti($prodotto2);
  $carrello2->addProdotti($prodotto1);
  $carrello2->addProdotti($prodotto3);
  $carrello2->addProdotti($prodotto5);
  $carrello2->calcTot();
  $carrello2->countTotProdotti();

//   var_dump($carrello2);

$card1 = new CreditCard(
    1234567890981312,
    '',
    187
  );
  $card1->setScadenza('01-24');
  $card2 = new CreditCard(
    9873981321765341,
    '07-24',
    976,
  );

  $user1 = new Utente(
    'Franco',
    'Rossi',
    'Francorossi@gmail.com',
    'Libidine23',
    'via Ezio Scida 32',
    '1234567890',
    $card1,
    $carrello1,
  );
  $user1->getSconto();
  var_dump($user1);

  $ospite1 = new ospite(
    'Giovanni',
    'Grigi',
    'ggrigio@gmail.com',
    'Via dei conquistatori 22',
    '3468748872',
    $card2,
    $carrello2,
  );

  
  var_dump($ospite1);

?>