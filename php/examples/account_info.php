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
 * @see <https://ripple.com/wiki/RPC_API#account_info>
 */
$resp = $ripple->account_info(array("account" => "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"));
if ($resp['status'] != 'success') {
	// do something handle error
	var_dump($resp);
	exit;
}
var_dump($resp);

/*

array(3) {
  ["account_data"]=>
  array(9) {
    ["Account"]=>
    string(33) "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"
    ["Balance"]=>
    string(9) "999999980"
    ["Flags"]=>
    int(0)
    ["LedgerEntryType"]=>
    string(11) "AccountRoot"
    ["OwnerCount"]=>
    int(0)
    ["PreviousTxnID"]=>
    string(64) "5A83332FB8F52F6EBD346B173F6CDD637FA07E6ED237728FE134A01BDE7A1676"
    ["PreviousTxnLgrSeq"]=>
    int(920552)
    ["Sequence"]=>
    int(3)
    ["index"]=>
    string(64) "C17F830DF64A096A42BABAFE9FD96D5D861B7E6C6A0DBF223416B0D46F49C296"
  }
  ["ledger_current_index"]=>
  int(921153)
  ["status"]=>
  string(7) "success"
}

*/