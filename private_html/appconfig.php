<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/20/2018
 * Time: 12:29 AM
 */
 require_once "dbconfig.php";
 # Define Paths
 $tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
 unset($tmp[count($tmp) - 1]);
 //define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
 //define('PUBLIC_PATH', BASE_PATH . 'public_html' . DIRECTORY_SEPARATOR);
 //define('WEB_PATH', PUBLIC_PATH);
 //define('PRIVATE_PATH', BASE_PATH . 'private_html' . DIRECTORY_SEPARATOR);
 //define('CLASS_PATH', PUBLIC_PATH . "class" . DIRECTORY_SEPARATOR);

 # Define SMARTY Paths
 //define('SMARTY_PATH', PUBLIC_PATH . 'smarty' . DIRECTORY_SEPARATOR);
 //define('SMARTY_TEMPLATES', PUBLIC_PATH . 'templates' . DIRECTORY_SEPARATOR);
 //define('SMARTY', SMARTY_PATH . 'libs' . DIRECTORY_SEPARATOR . 'Smarty.class.php');

/** -----------------------------------------------------------------------------------
 *  myAutoload is a function defined and registered with spl_autoloader_register that
 *  php will call when a not-known class is encountered.  Factories are being used in
 *  this application and are required to be inside the file of the class the
 *  Factory will build an object for. However, autoload will not function if the file
 *  name isn't the class name. Therefore this is the standard:
 *  Factories will reside at the bottom of the class for which they build objects. The
 *  file name will be the name of the class the factory will build. The Factory class
 *  will be the same with "Factory" added. Example:
 *  class Watchlist will be in the file Watchlist.class.php. The class WatchlistFactory
 *  will reside at the bottom of the same file.
 *
 *  The myAutoload function will remove the "Factory" from the class name
 *  WatchlistFactory when it is used so that the correct file will be loaded.
 *
 *  @param $class identifies the not-known class to be included.
 *
 * Taken from SymPRM
 */
function myAutoload($class) {
    $class = str_replace("Factory", "", $class);
//    echo CLASS_PATH . $class . '.class.php';
    require CLASS_PATH . "Class_" . $class . ".php";
}
spl_autoload_register('myAutoload');


 # Begin the session
 session_start();

 # Smarty setup
 require_once SMARTY;
 $smarty = new Smarty;
 $smarty -> setTemplateDir(SMARTY_TEMPLATES);
 $smarty -> setCompileDir(SMARTY_PATH . 'templates_c');
 $smarty -> setCacheDir(SMARTY_PATH . 'cache');
 $smarty -> setConfigDir(SMARTY_PATH . 'configs');

 /* DEBUG (Taken from SymPRM by Dr.Weaver) *
 echo "BASE_PATH = " . BASE_PATH . "<br>";
 echo "PUBLIC_PATH = " . PUBLIC_PATH . "<br>";
 echo "PRIVATE_PATH = " . PRIVATE_PATH . "<br>";
 echo "URL = " . URL . "<br>";
 echo "CLASS_PATH = " . CLASS_PATH . "<br>";
 echo "SMARTY_PATH = " . SMARTY_PATH . "<br>";
 echo "SMARTY_TEMPLATES = " . SMARTY_TEMPLATES . "<br>";
 echo "SMARTY = " . SMARTY . "<br>";

 if($local){
     echo "This machine is a development machine<br>";
 } else {
     echo "This machine is considered the production machine<br />";
 }
 exit();
 //   */
