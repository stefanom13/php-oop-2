<?php

require_once __DIR__ . '/Utente.php';
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/carrello.php';

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

?>