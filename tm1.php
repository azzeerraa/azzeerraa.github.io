<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tm1</title>
    <link rel="shortcut icon" href="icos.ico" type="image/ico">
  </head>
  <body>
    <script type="text/javascript">
      var ajax = new XMLHttpRequest();
      var method = "GET";
      var url = "tm.php";
      var as = true;

      ajax.open(method, url, as);

      ajax.send();

      ajax.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
          console.log(this.responseText);
        }
      }
    </script>
  </body>
</html>
