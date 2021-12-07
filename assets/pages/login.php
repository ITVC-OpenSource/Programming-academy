<body class="m-10">
    <div class="row">
      <div class="login-form text-seconderay" style="flex-direction: column;">
        <div dir="rtl" class="input-group u" data-why="uname">
          <span class="input-group-text text-secondary" id="basic-addon1"><i class="fas fa-user">&nbsp;</i>نام کاربری</span>
          <input name="uname" dir="ltr" type="text" class="form-control uname" autocomplete="off">
        </div>
        <div dir="rtl" class="input-group p" data-why="passw">
          <span class="input-group-text text-secondary" id="basic-addon2"><i class="fas fa-lock">&nbsp;</i>گذرواژه</span>
          <input name="passw" dir="ltr" type="password" class="form-control passw" autocomplete="off">
        </div>
        <div dir="rtl" class="form-check" style="margin: 20px 5px 0 5px;display: flex;justify-content: center;">
          <input class="form-check-input rmm me-1" type="checkbox" checked disabled value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
          مرا به خاطر بسپار
          </label>
        </div>
        <div class="text-center sub-btn">
          <button type="button" name="login" id="sub" class="btn btn-primary sub">ورود</button>
        </div>
      </div>
    </div>
</body>
<script>
window.onload = () => {
    var f = () => {
        login();
        document.querySelector("#sub").addEventListener("click" , f);
    }
    document.querySelector("#sub").addEventListener("click" , f);
    function login() {
        var uname = $(".uname").val();
        var passw = $(".passw").val();
        splash();
        $.get({
            url: api_server + "/login/?u=" + uname + "&p=" + passw,
            success: (txt) => {
                unsplash();
                if (txt === "true") {
                    $(".uname").addClass("is-valid");
                    $(".passw").addClass("is-valid");
                    setCookie("uname" , uname , 365);
                    setCookie("passw" , passw , 365);
                    location.assign("/");
                } else {
                    $(".uname").addClass("is-invalid");
                    $(".passw").addClass("is-invalid");
                }
            },
            error: (error) => {
                unsplash();
                Box("خطا!" , "لطفاً بعداً دوباره امتحان کنید!" , "nok");
            }
        });
    }
}
</script>
