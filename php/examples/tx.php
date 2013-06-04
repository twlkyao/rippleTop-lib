<?php
/**
 * rippleTop lib
 *
 * @copyright rippleTop.com
 * @author rippletop@gmail.com
 * @since 2013-06
 */
require dirname(__FILE__).'/test_common.php';


$resp = $ripple->tx(array(
		"transaction" => "7B242CC8C65690CF8C95C03880E07AB5BEF84BF727AB8E39A7BC1F6CA4E633AA",
));
if ($resp['status'] != 'success') {
	// do something handle error
	var_dump($resp);
	exit;
}
var_dump($resp);

/*

array(16) {
  ["Account"]=>
  string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
  ["Amount"]=>
  array(3) {
    ["currency"]=>
    string(3) "CNY"
    ["issuer"]=>
    string(33) "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"
    ["value"]=>
    string(5) "50000"
  }
  ["Destination"]=>
  string(33) "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"
  ["Fee"]=>
  string(2) "10"
  ["Flags"]=>
  int(0)
  ["SendMax"]=>
  array(3) {
    ["currency"]=>
    string(3) "CNY"
    ["issuer"]=>
    string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
    ["value"]=>
    string(5) "50500"
  }
  ["Sequence"]=>
  int(31)
  ["SigningPubKey"]=>
  string(66) "03C96A276026F95BDDF3167DDC2D33A4DB2B246D9AA31BD3291B361372ADF327ED"
  ["TransactionType"]=>
  string(7) "Payment"
  ["TxnSignature"]=>
  string(142) "3045022036D9DF8B19C1EE785EF14C91747271AACD80982811FE1F8EAF94606AB2E7D32702210083B2AE17AA5D2543369AB1617739010554BB0AAD6FB748DEA691441E8FB9B1E5"
  ["hash"]=>
  string(64) "7B242CC8C65690CF8C95C03880E07AB5BEF84BF727AB8E39A7BC1F6CA4E633AA"
  ["inLedger"]=>
  int(920566)
  ["ledger_index"]=>
  int(920566)
  ["meta"]=>
  array(3) {
    ["AffectedNodes"]=>
    array(2) {
      [0]=>
      array(1) {
        ["ModifiedNode"]=>
        array(6) {
          ["FinalFields"]=>
          array(6) {
            ["Balance"]=>
            array(3) {
              ["currency"]=>
              string(3) "CNY"
              ["issuer"]=>
              string(26) "rrrrrrrrrrrrrrrrrrrrBZbvji"
              ["value"]=>
              string(1) "0"
            }
            ["Flags"]=>
            int(131072)
            ["HighLimit"]=>
            array(3) {
              ["currency"]=>
              string(3) "CNY"
              ["issuer"]=>
              string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
              ["value"]=>
              string(6) "100000"
            }
            ["HighNode"]=>
            string(16) "0000000000000000"
            ["LowLimit"]=>
            array(3) {
              ["currency"]=>
              string(3) "CNY"
              ["issuer"]=>
              string(33) "rvFbbjmy7SbNzXafkzHrWwwkTyS6fQAYF"
              ["value"]=>
              string(1) "0"
            }
            ["LowNode"]=>
            string(16) "0000000000000000"
          }
          ["LedgerEntryType"]=>
          string(11) "RippleState"
          ["LedgerIndex"]=>
          string(64) "6957FF68FD68B72E7DD5476FD1EB7DA3E1C95D68809EA7D3F01F0B1AD8345E00"
          ["PreviousFields"]=>
          array(1) {
            ["Balance"]=>
            array(3) {
              ["currency"]=>
              string(3) "CNY"
              ["issuer"]=>
              string(26) "rrrrrrrrrrrrrrrrrrrrBZbvji"
              ["value"]=>
              string(6) "-50000"
            }
          }
          ["PreviousTxnID"]=>
          string(64) "5A83332FB8F52F6EBD346B173F6CDD637FA07E6ED237728FE134A01BDE7A1676"
          ["PreviousTxnLgrSeq"]=>
          int(920552)
        }
      }
      [1]=>
      array(1) {
        ["ModifiedNode"]=>
        array(6) {
          ["FinalFields"]=>
          array(5) {
            ["Account"]=>
            string(34) "rsKn8hGfNDAVuEdZ3NHXUqqZzp8uDiLUK9"
            ["Balance"]=>
            string(10) "4612999690"
            ["Flags"]=>
            int(0)
            ["OwnerCount"]=>
            int(9)
            ["Sequence"]=>
            int(32)
          }
          ["LedgerEntryType"]=>
          string(11) "AccountRoot"
          ["LedgerIndex"]=>
          string(64) "B25F6246C137A61B15CD4A9BD358DE11E3B2473BEA7EEE8E160BD48792283D34"
          ["PreviousFields"]=>
          array(2) {
            ["Balance"]=>
            string(10) "4612999700"
            ["Sequence"]=>
            int(31)
          }
          ["PreviousTxnID"]=>
          string(64) "4D06919EC6FBC0BA8B9EE55602F25FEB5F460D2431D6B87DDA45884A5634313D"
          ["PreviousTxnLgrSeq"]=>
          int(920550)
        }
      }
    }
    ["TransactionIndex"]=>
    int(0)
    ["TransactionResult"]=>
    string(10) "tesSUCCESS"
  }
  ["status"]=>
  string(7) "success"
  ["validated"]=>
  bool(true)
}

 */