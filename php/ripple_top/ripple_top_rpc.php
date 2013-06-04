<?php
/**
 * ripple RPC API
 * 
 * @copyright rippleTop.com
 * @author rippletop@gmail.com
 * @since 2013-06
 */


class RippleTopRpcClient {

	private $url;      // server url, example: http://s1.ripple.com:51234
	private $ch;       // cUrl Handler
	private $timeout;  // timeout seconds
	private $userpwd;  // username & passwd, example:  username:password

	public function __construct($url, $userpwd='', $timeout=5) {
		$this->url     = $url;
		$this->timeout = $timeout;
		if (!empty($userpwd)) {
			$this->userpwd = $userpwd;
		}
		
		$this->ch = curl_init($this->url);
		curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array(
				'Content-type: application/json'
		));
		if (!empty($this->userpwd)) {
			curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($this->ch, CURLOPT_USERPWD, $this->userpwd);
		}
	}
	
	public function __call($method, $params) {
		if (is_array($params)) {
			$params = array_values($params);  // no keys
		}
		$request = array(
				'method' => $method,
				'params' => $params,
		);
		$request = json_encode($request);

		// performs HTTP POST
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);

		$response = curl_exec($this->ch);
		if ($response === false) {
			throw new Exception('curl_exec error: ' . curl_error($this->ch));
		}
		$response = json_decode($response, true);
		return $response['result'];
	}


	public function __destruct() {
		if ($this->ch) {
			curl_close($this->ch);
		}
	}
	
} /* /rippleTopRpcClient */



