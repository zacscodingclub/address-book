<?php 
// load app files
require_once('config/config.php');
require_once('helpers/system_helper.php');

function __autoload($class_name) {
  require_once('lib/'.$class_name.'.php');
}