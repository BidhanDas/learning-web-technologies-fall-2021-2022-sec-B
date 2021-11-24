<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
</head>
<body>
  
  value 1: <input type="text" id="no1">
  value 2: <input type="text" id="no2">
  
  <button type="button" onclick="calc('add')">+</button>
  <button type="button" onclick="calc('sub')">-</button>
  <button type="button" onclick="calc('mult')">*</button>
  <button type="button" onclick="calc('div')">/</button>  <br>

  result : <span id="result"></span>

  <script>
  	function calc(reqType)
  	{
  		var xhr = new XMLHttpRequest();

  		var no1 = document.getElementById("no1").value;
  		var no2 = document.getElementById("no2").value;
  		xhr = new XMLHttpRequest();

  		var no1 = document.getElementById("no1").value;
  		var no2 = document.getElementById("no2").value;

         xhr.onreadystatechange = function(){

         	if (xhr.readyState == 4 && xhr.status == 200) {
         		document.getElementById("result").innerHTMl = responseText;
         	}
         }
         xhr.open("POST", "print.php", true);
         xhr.setRequestHeader("Content-type","application/x=www-form-urlencoded");
         xhr.send("req="+reqType+"&n1="+no1+"no2="+no2);
  	}
  </script>
</body>
</html>