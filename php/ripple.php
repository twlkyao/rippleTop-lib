#! /usr/bin/env php
<?php
/**
 * rippleTop lib
 *
 * @copyright rippleTop.com
 * @author rippletop@gmail.com
 * @since 2013-06
 */

require_once dirname(__FILE__).'/ripple_top/ripple_top_rpc.php';

$options = getopt('s:m:p:');
if (empty($options)) {
	echo "
usage: php {$_SERVER['PHP_SELF']} -s \"http://s1.ripple.com:51234\" -m \"account_info\" -p '{\"account\":\"rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF\"}'
	";
	exit;
}

// args
$server = !empty($options['s']) ? $options['s'] : "http://s1.ripple.com:51234";
$method = $options['m'];
$params = $options['p'];


// ripple rpc client
$ripple = new RippleTopRpcClient($server);

$resp = $ripple->$method(json_decode($params, 1));

if ($resp['status'] != 'success') {
	// do something handle error
	echo "\033[31m============ Requset ERROR: ============\n";
	var_dump($resp);
	echo "\033[0m";
	exit;
}

var_dump($resp);

