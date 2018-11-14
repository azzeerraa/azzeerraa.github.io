var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function(){
  modal.style.display = "block";
}
span.onclick = function(){
  modal.style.display = "none";
}
window.onclock = function(event){
  if(event.target == modal){
    modal.style.display = "none";
  }
}

var p = document.createElement('p');
p.innerHTML = 'Пример елемента';
p.classList.add('main','green');

document.body.appendChild(p);
