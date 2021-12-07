var $server = location.origin;
var api_server = $server + "/api";
var cookies = document.cookie.split("; ");
var $_COOKIE = [];
cookies.forEach((cookie) => {
    let c = cookie.split("=");
    $_COOKIE[c[0]] = c[1];
});
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
if ($_COOKIE["uname"] !==undefined || $_COOKIE["passw"] !==undefined || $_COOKIE["uname"] !=="out" || $_COOKIE["passw"] !=="out") {}else {
    if (location.pathname !=="/login/" || location.pathname !=="//login/") {
        location.pathname = "/login/";
    }
}
function splash() {
    document.body.innerHTML += "<div class='splash'><img src='assets/img/loader.svg'></div>";
}
function unsplash() {
    if (document.querySelector(".splash") !== null) {
        document.querySelector(".splash").remove();
    }
}
function Box(title , value , cls){
    $('body').css('height' , "100%");
    document.body.innerHTML += `
  <div class="${cls}" style='height: 100%;'>
  <div class='drk-bg'></div>
    <div class="modal-dialog Box" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-body p-4 text-center">
          <h5 class="mb-0">${title}</h5>
          <p class="mb-0">${value}</p>
        </div>
        <div class="modal-footer flex-nowrap p-0">
          <button onclick="unBox('${cls}');" style="width: 100%;" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>تایید</strong></button>
        </div>
      </div>
    </div>
  </div>`;
}
function noneTitleBox(value , cls){
    $('body').css('height' , "100%");
    document.body.innerHTML += `
  <div class="Box modal-dialog Box ${cls}" role="document" style='height: 100%;'>
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center">
        <p class="mb-0">${value}</p>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button onclick="unBox('${cls}');" style="width: 100%;" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>تایید</strong></button>
      </div>
    </div>
  </div>`;
}
function unBox(cls) {
    document.querySelector("." + cls).remove();
}