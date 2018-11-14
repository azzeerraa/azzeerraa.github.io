function datareget() {
var today = new Date();
var dd = today.getDay();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
}

if(mm<10) {
    mm = '0'+mm
}
today = dd + '/' + mm + '/' +  yyyy;
  if(dd == 1){
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin-left: 30%;color: #d72a2a;font-size: 100%;">1km</h1><img style="position:relative;width:100%;height:100%;" src="mxd/bigovadorizka.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ff6000;margin-top: 30%;font-size: 60%;">5-10kg&gt;30kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/nogi1.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ffffff;margin-top: 30%;font-size: 60%;">5-20kg&gt;60kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/ruki.png" alt=""></div><hr>');
  }
  if(dd == 3){
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin-left: 30%;color: #d72a2a;font-size: 100%;">1km</h1><img style="position:relative;width:100%;height:100%;" src="mxd/bigovadorizka.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ff6000;margin-top: 30%;font-size: 60%;">5-10kg&gt;30kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/nogi1.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ffffff;margin-top: 30%;font-size: 60%;">5-20kg&gt;60kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/ruki.png" alt=""></div><hr>');
  }
  if(dd == 5){
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin-left: 30%;color: #d72a2a;font-size: 100%;">1km</h1><img style="position:relative;width:100%;height:100%;" src="mxd/bigovadorizka.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ff6000;margin-top: 30%;font-size: 60%;">5-10kg&gt;30kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/nogi1.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute;z-index: 3;font-family: p2;margin: 15%;color: #ffffff;margin-top: 30%;font-size: 60%;">5-20kg&gt;60kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/ruki.png" alt=""></div><hr>');
  }
  if(dd == 7){
    document.write('<div id="door"><h1 style="position:absolute; font-family: p2;z-index: 3;margin-left: 30%;color: #d72a2a;font-size: 100%;">1km</h1><img style="position:relative;width:100%;height:100%;" src="mxd/bigovadorizka.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute; font-family: p2;z-index: 3;margin: 15%;color: #ff6000;margin-top: 30%;font-size: 60%;">5-10kg&gt;30kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/nogi1.jpg" alt=""></div><hr>');
    document.write('<div id="door"><h1 style="position:absolute; font-family: p2;z-index: 3;margin: 15%;color: #ffffff;margin-top: 30%;font-size: 60%;">5-20kg&gt;60kg</h1><img style="position:relative;width:100%;height:100%;" src="mxd/ruki.png" alt=""></div><hr>');
  }
  }
