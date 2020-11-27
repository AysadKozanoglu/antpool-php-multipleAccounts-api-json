# antpool-php-api for multiple Accounts 

![picture](https://github.com/AysadKozanoglu/antpool-php-multipleAccounts-api-json/blob/master/screencast_cli/antpool_api_php_multipool_json_output_example.png)


# Initial Setup

Get files from Github repository

    $ git clone https://github.com/AysadKozanoglu/antpool-php-multipleAccounts-api-json.git
    $ cd antpool-php-multipleAccounts-api-json

Create you own config file and add antpool API access credentials

    $ cp config.sample.php config.php
    $ vim config.php



Enter your API Access Details (config.php)
<pre>
        public $pools           = array( 0 =>   array(  "username"      => 'YOUR_ANTPOOL_ACCOUNT',
                                                        "api_key"       => 'YOUR_API_SECRET',
                                                        "api_secret"    => 'YOUR_API_SECRET'
                                                ),
                                         1 =>   array(  "username"       => 'YOUR_ANTPOOL_ACCOUNT',
                                                        "api_key"        => 'YOUR_API_SECRET',
                                                        "api_secret"     => 'YOUR_API_SECRET'
                                                )
                                );

</pre>
	
_Username must be your Username, NOT your Account Email_   	   	

# How to use
Execute the file "antpool.php".

json output
<pre>
    php antpool.php
</pre>

pretty json output
<pre>
   php antpool.php | python -m json.tool
</pre>

Variable $currency can be: "BTC, LTC, ETH, ZEC" (default ist BTC)

Examples:
- Pool Stats
    - $ant->get('poolStats', $currency = 'BTC');
- Account balance
    - $ant->get('account', $currency = 'BTC');
- Hashrate
    - $ant->get('hashrate'); 
- Workers Hashrate
    - $ant->get('workers', $currency = 'BTC');
- Paymanet History
    - $ant->get('paymentHistory', $currency = 'BTC');

$ant->get() return a JSON decoded PHP array.  



# Current Limitations
antpool api rule max 600 requests / 10min

# Contributors 
Ryan Oliver (https://github.com/xslugx)

Aysad Kozanoglu (https://github.com/AysadKozanoglu)

