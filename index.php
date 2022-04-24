<?php

require_once __DIR__ . '/Utente.php';
require_once __DIR__ . '/models/prodotti.php';

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



?>