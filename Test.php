<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

Enter First Number :
<br>
<input type="text" id="Text1" name="TextBox1">
<br>Enter Second Number :
<br>
<input type="text" id="Text2" name="TextBox2">
<br>Result :
<br>
<input type="text" id="txtresult" name="TextBox3">
<br>
<input type="button" name="clickbtn" value="Display Result" onclick="sum()">

<script type="text/javascript">
    function sum() {
    	var GameOne = parseInt(document.getElementsById("Text1").value);
		var GameTwo = parseInt(document.getElementsById("Text2").value);
		var result = GameOne + GameTwo;
		document.getElementById("txtresult").value = result;
    }
    </script>

<body>
</body>
</html>