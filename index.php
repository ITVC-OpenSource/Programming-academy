<?php
include(__DIR__ . "/assets/php/router.php");
include(__DIR__ . "/assets/php/config.php");
ROUTE::get("/login/" , function(){
  include(__DIR__ . "/assets/pages/login.php");
});
?>
