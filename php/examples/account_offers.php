<?php
/**
 * rippleTop lib
 *
 * @copyright rippleTop.com
 * @author rippletop@gmail.com
 * @since 2013-06
 */
require dirname(__FILE__).'/test_common.php';

/**
 * @see <https://ripple.com/wiki/RPC_API#account_offers>
 */

// Return information about the specified account's ripple credit lines.
$resp = $ripple->account_offers(array("account" => "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"));
if ($resp['status'] != 'success') {
	// do something handle error
	var_dump($resp);
	exit;
}
var_dump($resp);


/*

array(3) {
  ["account"]=>
  string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
  ["offers"]=>
  array(1) {
    [0]=>
    array(3) {
      ["seq"]=>
      int(12)
      ["taker_gets"]=>
      string(10) "1000000000"
      ["taker_pays"]=>
      array(3) {
        ["currency"]=>
        string(3) "BTC"
        ["issuer"]=>
        string(34) "r4vW3JUQob7H6NNLzALxXMLpy6WYDUFt3q"
        ["value"]=>
        string(1) "1"
      }
    }
  }
  ["status"]=>
  string(7) "success"
}

*/
