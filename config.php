<?php

// this of course should NOT be checked in
// I'm leaving it in the repo for an example

return [
  'database' => [
    'name' => 'laracastsTodo',
    'username' => 'root',
    'password' => '',
    'connection' => 'mysql:host=localhost;port=3306',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
