<?php
include(__DIR__ . "/assets/php/router.php");
include(__DIR__ . "/assets/php/config.php");
$PDO = $GLOBALS['PDO'];
ROUTE::get("/" , function() {
	include(__DIR__ . "/assets/pages/index.php");
});
ROUTE::get("/login/" , function() {
	include(__DIR__ . "/assets/pages/login.php");
});
?>
