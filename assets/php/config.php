<?php
session_start();
$server = "http://localhost";
if (!isset($_SESSION['uname'])) {
    // header("location: " . $server . "/login/");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $server; ?>/assets/css/all.min.css">
<base href="<?php echo $server; ?>">
<script src="<?php echo $server; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $server; ?>/assets/js/jquery.min.js"></script>
</head>
