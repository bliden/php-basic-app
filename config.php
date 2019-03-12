<?php

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
