<?php

require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/carrello.php';
require_once __DIR__. '/user.php';

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

var_dump($prodotto1, $prodotto2, $prodotto3);

$user1 = new user(
    'Marco',
    'Verdi',
    'marco.verdi@gmail.com',
    'marcoverdi',
    'Piazza Fontana',
    '12345678901'
  );
  
  var_dump($user1); 