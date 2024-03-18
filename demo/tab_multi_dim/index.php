<?php

$users = [ // dimension 1
  'john' => [ // dimension 2
    'name' => 'John',
    'age' => 35,
    'addresses' => [ // dimension 3
      '1 rue de paris',
      '4 rue de strasbourg'
    ]
    ],
  'mary' => [ // dimension 2
    'name' => 'Mary',
    'age' => 23
  ]
];

$addr1 = $users['john']['addresses'][0];
echo 'Première adresse de john '.$addr1;
