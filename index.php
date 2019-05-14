<?php
ini_set('display_errors','1');

require 'vendor/autoload.php';
use GuzzleHttp\Promise;
use GuzzleHttp\Pool;
use GuzzleHttp\Clinet;


$client = new \GuzzleHttp\Client(
	[
		'cookies' => true,
		'base_uri' => 'https://www.yahoo.co.jp',
		'headers' => [
			'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; rv:38.0) Gecko/20100101 Firefox/38.0',
		]
	]
);

$response = $client->request('GET', 'https://www.yahoo.co.jp');

echo $res->getStatusCode();