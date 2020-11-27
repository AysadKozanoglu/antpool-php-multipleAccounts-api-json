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

// rename this file to custom.php and
// do you own stuff in this file
// we will never overrite this file

?>
<?php

$arrayData = array();

for ($a=0;$a<count($ant); $a++){
	array_push (	$arrayData, 
		 array	(	"account" 	   => $ant[$a]->get('account'), 
			  	"hashrate" 	   => $ant[$a]->get('hashrate'),
			  	"workers" 	   => $ant[$a]->get('workers'),
                          	"paymentHistory"   => $ant[$a]->get('paymentHistory'), 
                          	"poolStats" 	   => $ant[$a]->get('poolStats')
		)
	);
	$arrayOutput["pool-".$a] = $arrayData;
};

echo json_encode ($arrayOutput);

die();

?>

<!-- other Examples -->

	<?php print_r($ant->get('poolStats')); ?>
	<?php print_r($ant->get('account')); ?>
	<?php print_r($ant->get('hashrate')); ?>
	<?php print_r($ant->get('workers')); ?>
	<?php print_r($ant->get('paymentHistory')); ?>
	<?php print_r($ant->get('workers', 'BTC', 100)); ?>
	<?php print_r($ant->get('paymentHistory', 'BTC', 100)); ?>
