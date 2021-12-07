<?php
if (!isset($_SESSION)) {
    session_start();
}
$server = "http://localhost:8080";
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ms-main-source-db";
$PDO = new PDO("mysql:host=$dbh;dbname=$dbn" , $dbu , $dbp);
if (!$PDO) {
    die("Error in load files!\nPlease try again later!");
} else {
    $user_data = $PDO->query("SELECT * FROM `users` WHERE `uname` = '" . $_COOKIE['uname'] . "' AND `passw` = '" . $_COOKIE['passw'] . "'")->fetch(PDO::FETCH_ASSOC);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>لیموناد</title>
<link rel="icon" href="/favicon.ico">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/bootstrap-icons.min.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/fontawesome-all.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/material.min.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/style.min.css">
<base href="<?php echo $server; ?>">
<script src="<?php echo $server; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $server; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $server; ?>/assets/js/app.js"></script>
<script src="<?php echo $server; ?>/assets/js/material.min.js"></script>
</head>
