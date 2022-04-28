<?php

require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/ospite.php';
require_once __DIR__. '/user.php';
require_once __DIR__. '/carrello.php';

$prodotto1 = new prodotto(
  'Medicinale',
  'Collare antizecche',
  'Antizecche',
  'Dogsafe',
  39.70
);
$prodotto2 = new prodotto(
  'Cibo',
  'Dog Nutrition',
  'Croccantini',
  'Atom',
  17.50
);
$prodotto3 = new prodotto(
  'Cuccia',
  'Cuccia Ripiegabile',
  'Cuccia morbida',
  'LoveDog',
  31.50
);

// USER

$user1 = new user(
    'Marco',
    'Verdi',
    'marco.verdi@gmail.com',
    'marcoverdi',
    'Piazza Fontana',
    '12345678901',
    '2938492923845820',
    '12/25',
    933
  );
  
  var_dump($user1); 

  $ospite1 = new ospite(
    'Michele',
    'Morrone',
    'mick.morrow@gmail.com',
    'Via Giovanni 2',
    '3457869987',
    '2938492923845820',
    '12/25',
    933
  );
  
  var_dump($ospite1); 

  $carrello1 = new carrello(
    [],
    0,
    0
  );
  $carrello1->addProdotti($prodotto1);
  $carrello1->addProdotti($prodotto2);
  $carrello1->addProdotti($prodotto4);
  $carrello1->addProdotti($prodotto4);
  $carrello1->calcTot();
  $carrello1->countTotProdotti();
  
  var_dump($carrello1);