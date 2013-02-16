<?php 
error_reporting(E_ALL);
ini_set('display_errors',1); 

include_once 'conn.php';

// get index
$index 	= $link->real_escape_string($_REQUEST['index']);
$limit 	= 5;
$from 	= $limit * $index;
$to 	= $from + $limit;

$xml 	= new SimpleXMLElement('<xml/>');
$root 	= $xml->addChild('root');
$media 	= $root->addChild('media');

if ($result = $link->query("SELECT * FROM images LIMIT $from, $to;")) {
	while($r = $result->fetch_object()) {
		$media->addChild('id', $r->id);
		$media->addChild('title', $r->title);
		$media->addChild('url', $r->url);
		$media->addChild('category', $r->category);
	}
}

Header('Content-type: text/xml');
print($xml->asXML());
?>