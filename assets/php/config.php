<?php
session_start();
$server = "http://localhost";
if (!isset($_SESSION['uname'])) {
    // header("location: " . $server . "/login/");
}
?>
<script>
var vpmeta = document.createElement("meta");
vpmeta.name = "viewport";
vpmeta.content = "width=device-width, initial-scale=1";
document.head.append(vpmeta);
var chmeta = document.createElement("meta");
chmeta.httpEquiv = "Content-Type";
chmeta.content = "text/html;charset=UTF-8";
document.head.append(chmeta);
var btslink = document.createElement("link");
btslink.rel = "stylesheet";
btslink.href = "<?php echo $server; ?>/assets/css/bootstrap.min.css";
document.head.append(btslink);
var base = document.createElement("base");
base.href = "<?php echo $server; ?>";
document.head.append(base);
var script = document.createElement("script");
script.src = "<?php echo $server; ?>/assets/js/bootstrap.min.js";
document.head.append(script);
var falink = document.createElement("link");
falink.rel = "stylesheet";
falink.href = "<?php echo $server; ?>/assets/css/all.min.css";
document.head.append(falink);
</script>