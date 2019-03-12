<?php

class Connection 
{
  static function make($config)
  {
    try {
      // return new PDO('mysql:host=localhost;port=3306;dbname=laracastsTodo', 'root', '');
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}