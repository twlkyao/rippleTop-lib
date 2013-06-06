rippleTop-lib
=============

Ripple API lib create by [rippletop.com](http://rippletop.com/).

Email: <rippletop@gmail.com>

### php rpc 

#### cmd example

    php ripple.php  -m "account_info" -p '{"account":"rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"}'

output: 

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
      int(946040)
      ["status"]=>
      string(7) "success"
    }

create transaction:

    # php ripple.php -m sign -p '{"secret":"shExampleExampleExample","tx_json":{ "TransactionType" : "Payment", "Account" : "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9", "Destination" : "r4vW3JUQob7H6NNLzALxXMLpy6WYDUFt3q", "Amount" : "1000000", "Fee" : "10"}}' 
    
    # php ripple.php -m submit -p '{"tx_blob": "120000220000000024000000246140000000000F424068400000000000000A732103C96A276026F95BDDF3167DDC2D33A4DB2B246D9AA31BD3291B361372ADF327ED7446304402201289C797227F854380A5ACCC5DD8248F520BC34545E8517A56355CE4987FD11B02200547BB6BCC327C902A7E6E4D75EC148BF4768CBAC511E590D0333D132785A18D8114195BB9F3E3DB70B27F1563F7017E4ADD043DB88A8314F079001C1D1724337D11DCA1FE694BD30A5B8D9E"}'


#### example 2

See more examples: `rippleTop-lib/php/examples/`. Get *account info* example:

	<?php 
	require_once dirname(__FILE__).'/ripple_top/ripple_top_rpc.php';
	
	$ripple = new RippleTopRpcClient("http://s1.ripple.com:51234");
	$resp = $ripple->account_info(array("account" => "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"));

	if ($resp['status'] != 'success') {
		// do something handle error
		var_dump($resp);
		exit;
	}

	var_dump($resp);
	
will output:

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

