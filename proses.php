<?php
require("routeros_api.class.php");
$API = new RouterosAPI();
$API->debug = false;
$API->port = 8728;


$userprofile = "/ip/hotspot/user/profile/print";
$interface = "/interface/print";

if($API->connect("wifizidan.ddns.net", "admin", "sentinel")){
	$comm = $API->comm($interface);
	echo json_encode($comm);
}