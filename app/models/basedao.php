<?php
  namespace models;

  use Medoo\Medoo;

  class BaseDao extends Medoo {
    function __construct() {
      // Connect the database.
      $options = [
        'type' => 'mysql',
        'host' => HOST,
        'database' => DBNAME,
        'username' => USER,
        'password' => PASS,
        'prefix' => TABPREFIX
      ];
      parent::__construct($options);
    }
  }
