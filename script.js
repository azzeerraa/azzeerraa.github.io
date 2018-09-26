function myFunction() {
  var input, filter,ul,div,div,a,i;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');
  div = ul.getElementsByTagName('div');

  for(i=0; i<div.length;i++){
    a =div[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1){
      div[i].style.display = "";
    }else {
      div[i].style.display = "none";
    }
  }
}
