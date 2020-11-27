<?php
/*!
 * @author              Aysad Kozanoglu
 * @email               ak@linuxhowto.net
 * @link                http://www.hashrate24.com
 * @link-github         https://github.com/AysadKozanoglu/antpool-php-api.git
 * @project             antpool-php-api
 * @license             MIT license
 * @changes             expanding the config.php and custom.php for multipoolsi configuration api calls 
 *                      with pretty json output
 * @example             on the cli:  $  php antpool.php | python -m json.tool
 **/


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


class ant_config {

	// antpool user settings
        public $pools           = array( 0 =>   array(  "username"      => 'YOUR_ANTPOOL_ACCOUNT',
                                                        "api_key"       => 'YOUR_API_SECRET',
                                                        "api_secret"    => 'YOUR_API_SECRET'
                                                ),
                                         1 =>   array(  "username"       => 'YOUR_ANTPOOL_ACCOUNT',
                                                        "api_key"        => 'YOUR_API_SECRET',
                                                        "api_secret"     => 'YOUR_API_SECRET'
                                                )
                                );


}
