<?php
class Configuration
{

  //-- Defind configuration parameter for connect database --
  public $config = array(
    'host' => 'localhost',
    'dbname' => 'nurseelder',
    'dbuser' => 'root',
    'dbpass' => '',
    'session_prefix' => 'cEda_',
    'table_prefix' => 'f3s2_',
    'salt' => 'W54mnFMEVPcHLiDQwbwG44#is0Sr*dkxX'
  );

  //-- Constructor --
  public function __construct(){
    // Code here
  }

}
