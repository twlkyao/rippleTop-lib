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
 * @see <https://ripple.com/wiki/RPC_API#account_lines>
 */

// Return information about the specified account's ripple credit lines.
$resp = $ripple->account_lines(array("account" => "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"));
if ($resp['status'] != 'success') {
	// do something handle error
	var_dump($resp);
	exit;
}
var_dump($resp);

/*

array(3) {
  ["account"]=>
  string(33) "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"
  ["lines"]=>
  array(2) {
    [0]=>
    array(7) {
      ["account"]=>
      string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
      ["balance"]=>
      string(1) "0"
      ["currency"]=>
      string(3) "CNY"
      ["limit"]=>
      string(1) "0"
      ["limit_peer"]=>
      string(6) "100000"
      ["quality_in"]=>
      int(0)
      ["quality_out"]=>
      int(0)
    }
    [1]=>
    array(7) {
      ["account"]=>
      string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
      ["balance"]=>
      string(1) "0"
      ["currency"]=>
      string(3) "BTC"
      ["limit"]=>
      string(1) "0"
      ["limit_peer"]=>
      string(4) "1000"
      ["quality_in"]=>
      int(0)
      ["quality_out"]=>
      int(0)
    }
  }
  ["status"]=>
  string(7) "success"
}


 */