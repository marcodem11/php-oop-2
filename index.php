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

var_dump($prodotto1, $prodotto2, $prodotto3);


$carrello1 = new carrello(
    [],
    '',
    ''
  );
  $carrello1->addProdotti($prodotto1);
  $carrello1->addProdotti($prodotto2);
  $carrello1->addProdotti($prodotto4);
  $carrello1->addProdotti($prodotto4);
  $carrello1->calcTot();
  $carrello1->countTotProdotti();
  
  $carrello2 = new carrello(
    [],
    '',
    ''
  );
  $carrello2->addProdotti($prodotto3);
  $carrello2->addProdotti($prodotto2);
  $carrello2->addProdotti($prodotto4);
  $carrello2->calcTot();
  $carrello2->countTotProdotti();
  
  // CREDITCARD
  
  $card1 = new creditCard(
    1234567890123456,
    '12-22',
    333
  );
  $card2 = new creditCard(
    9871231317653421,
    '05-25',
    123,
  );
  

$user1 = new user(
    'Marco',
    'Verdi',
    'marco.verdi@gmail.com',
    'marcoverdi',
    'Piazza Fontana',
    '12345678901',
    $card1,
    $carrello1,
  );
  $user1->getSconto();
  
  var_dump($user1); 

  $ospite1 = new ospite(
    'Michele',
    'Morrone',
    'mick.morrow@gmail.com',
    'Via Giovanni 2',
    '3457869987',
    $card2,
    $carrello2,
  );
  // $ospite1->addCreditCard(123456789, date('m-y'), 123);
  
  var_dump($ospite1); 

  