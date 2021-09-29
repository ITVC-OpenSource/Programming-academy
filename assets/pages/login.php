<?php
include(__DIR__ . '/header.php');
?>
<form class="form-control login-form text-seconderay" action="logina.php" method="post">
  <div dir="rtl" class="input-group" data-why="uname">
    <span class="input-group-text text-secondary" id="basic-addon1">نام کاربری:</span>
    <input name="uname" dir="ltr" type="text" class="form-control" autocomplete="off">
  </div>
  <div dir="rtl" class="input-group" data-why="passw">
    <span class="input-group-text text-secondary" id="basic-addon2">رمزعبور:</span>
    <input name="passw" dir="ltr" type="text" class="form-control" autocomplete="off">
  </div>
  <div class="text-center sub-btn">
    <button type="submit" name="login" id="send" class="btn btn-primary">ورود</button>
  </div>
</form>
<script>
$("#send").click(() => {
  $(".sub-btn").html('<button class="btn btn-primary" type="button" disabled><span class="spinner-grow spinner-grow-sm" style="margin-left: 5px;" role="status" aria-hidden="true"></span>در حال بارگذاری...</button>');
});
$("form").on("submit" , (e) => {
  e.preventDefault();
});
</script>
