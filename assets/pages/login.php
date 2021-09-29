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
</form>
