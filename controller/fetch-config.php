<?php
$lang_url = '?lang=';

$strSQL = "SELECT * FROM ".$tbPrefix."config WHERE cf_key = ?";
$resultConfig = $db->select($strSQL, array('lang'));
if($resultConfig){
  $cfg = $resultConfig->fetch();
  $default_lang = $cfg['cf_value'];
  $lang_url = '?lang='.$default_lang;
}

if(isset($_GET['lang'])){
  if($_GET['lang']!='')
    $default_lang = $_GET['lang'];
    $lang_url = '?lang='.$default_lang;
}


// echo $_GET['lang'];

$strSQL = "SELECT * FROM ".$tbPrefix."config WHERE cf_key = ?";
$resultConfig = $db->select($strSQL, array('title'));
if($resultConfig){
  $cfg = $resultConfig->fetch();
  if($default_lang=='th')
    $default_title = $cfg['cf_value'];
  else
    $default_title = $cfg['cf_value_en'];
}

$strSQL = "SELECT * FROM ".$tbPrefix."config WHERE cf_key = ?";
$resultConfig = $db->select($strSQL, array('phone'));
if($resultConfig){
  $cfg = $resultConfig->fetch();
  if($default_lang=='th')
    $default_phone = $cfg['cf_value'];
  else
    $default_phone = $cfg['cf_value_en'];
}

$strSQL = "SELECT * FROM ".$tbPrefix."config WHERE cf_key = ?";
$resultConfig = $db->select($strSQL, array('fax'));
if($resultConfig){
  $cfg = $resultConfig->fetch();
  if($default_lang=='th')
    $default_fax = $cfg['cf_value'];
  else
    $default_fax = $cfg['cf_value_en'];
}

?>
