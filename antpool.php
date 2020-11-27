<?php
//
// @author              Aysad Kozanoglu
// @email               ak@linuxhowto.net
// @link                https://linuxhowto.net
// @project             antpool-php-api
// @licence             MIT licence
//

/*!
 * @author		Sebastian Lutz
 * @copyright	Baebeca Solutions - Lutz
 * @email		lutz@baebeca.de
 * @pgp			0x5AD0240C
 * @link		https://www.baebeca.de
 * @link-github	https://github.com/Elompenta/antpool-php-api
 * @customer	-
 * @project		antpool-php-api
 * @license		GNU GENERAL PUBLIC LICENSE Version 2
 **/

// load classes
error_reporting(E_ALL);
require_once(__DIR__.'/classes/antpool.php');

// check if custom config file exist
if (file_exists(__DIR__.'/config.php')) {
	require_once(__DIR__.'/config.php');
} else {
	exit('config.php not found');
}

// init antpool class
$ant_config = new ant_config();

for ($i=0; $i<count($ant_config->pools);$i++){
//print_r($ant_config->pools);
        $ant[$i]  = new antpool($ant_config->pools[$i]["username"], $ant_config->pools[$i]["api_key"], $ant_config->pools[$i]["api_secret"]);
//	echo $ant_config->pools[$i]["username"];
}


// check if custom.php exist and execute
if (file_exists(__DIR__.'/api.php')) {
	require_once(__DIR__.'/api.php');
} else {
	echo "api.php error not found";
}

unset($ant);
