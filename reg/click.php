<?php

function fetchSubId($token) {
	$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	$ipArray = explode(',', $ip);
	$firstIp = trim($ipArray[0]);
	$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? urlencode($_SERVER['HTTP_USER_AGENT']) : 'empty';
	$url = "https://trckit.net/click_api/v3?token={$token}&info=1&ip={$firstIp}&user_agent={$user_agent}";

	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);

	$response = curl_exec($curl);

	curl_close($curl);

	$data = json_decode($response, true);

	if (isset($data['info']['sub_id'])) {
		return $data['info']['sub_id'];
	} else {
		return false;
	}
}
