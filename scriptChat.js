
window.onload = function() {
 FirstUpLoading();                                    //первая подгрузка Чата
}
function delTAb() {                                 //Удаляэ записи из chat
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "SQLDelTable.php";
  var as = true;
  ajax.open(method, url, as);
  ajax.send();
  FirstUpLoading();                                    //первая подгрузка Чата
}



setInterval(function(){                              //проверка на ласт сообщения в чате + передача на подгрузку чата;
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "chp1.php";
var as = true;
ajax.open(method, url, as);
ajax.send();
ajax.onreadystatechange = function () {
 if(this.readyState == 4 && this.status == 200){
   function getCookie(name) {
   let matches = document.cookie.match(new RegExp(
   "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
   return matches ? decodeURIComponent(matches[1]) : undefined;
 }
 var ds = getCookie('idmeslas');
if (ds != this.responseText) {
 AddLastMessage();
 document.cookie = "idmeslas="+this.responseText+";SameSite=Lax;";
 }else {}
}
}}, 1000);




function FirstUpLoading() {                                     //Функция первой загрузки
 var ajax = new XMLHttpRequest();
 var method = "GET";
 var url = "chp.php";
 var as = true;
 ajax.open(method, url, as);
 ajax.send();
 ajax.onreadystatechange = function () {
     if(this.readyState == 4 && this.status == 200){
     var newDiv = document.getElementById("ds");
     newDiv.innerHTML = this.responseText;
     scrooll();
   }
 }
}



 function AddLastMessage() {                         //Додаэ ласт меседж
   var ajax = new XMLHttpRequest();
   var method = "GET";
   var url = "chp2.php";
   var as = true;
   ajax.open(method, url, as);
   ajax.send();
   ajax.onreadystatechange = function () {
     if(this.readyState == 4 && this.status == 200){
           var newDiv = document.getElementById("ds");
           var Stee = document.getElementById("ds").innerHTML;
           var st = Stee + this.responseText;
           newDiv.innerHTML = st;                                        // WARNING: проблема тут, стираэ все и сама стаэ на их мисто.
           scrooll();                                                                            // Сохраняти в перемыней ласт сообщения и додавати до них нове...
     }
   }
 }







 function smsd() {
    var ts = document.getElementById("gh").value;
   if (ts == "") {

   }else if (ts == " ") {

   }else if (ts == "  ") {

   }else if (ts == "   ") {

   }else {
     document.cookie = "masage="+document.getElementById("gh").value +";SameSite=Lax;";
     ajaxphprec();
   }
 }



 function ajaxphprec() {
 var ajax = new XMLHttpRequest();
 var method = "GET";
 var url = "scriptaddmessage.php";
 var asynchronous = true;
 ajax.open(method, url, asynchronous);
 ajax.send();
 var b = "[";
 ajax.onreadystatechange = function()    {
   if (this.readyState == 4 && this.status == 200)
                                                  {
     document.getElementById("gh").value = "";
   }
  }
 }

   document.querySelector('input').addEventListener('keydown', function(e) {
     if (e.keyCode === 13) {
     smsd();
   }
   });


 function scrooll() {
   var objDiv = document.getElementById("ds");
   objDiv.scrollTop = objDiv.scrollHeight;
 }
