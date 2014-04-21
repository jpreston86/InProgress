<?php

?>
<html>
<head>
<title>Testing the DAMN Keypad</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="emptyCode();">

<script type="text/javascript">
	function addCode(key){
		var code = document.forms[0].code;
		if(code.value.length < 4){
		code.value = code.value + key;
		}
	}
	function emptyCode(){
		document.forms[0].code.value = "";
	}
</script>
	
<table id="keypad" cellpadding="5" cellspacing="3">
	<tr>
		<td onclick="addCode('1');">1</td>
		<td onclick="addCode('2');">2</td>
		<td onclick="addCode('3');">3</td>
	</tr>
	<tr>
		<td onclick="addCode('4');">4</td>
		<td onclick="addCode('5');">5</td>
		<td onclick="addCode('6');">6</td>
	</tr>
	<tr>
		<td onclick="addCode('7');">7</td>
		<td onclick="addCode('8');">8</td>
		<td onclick="addCode('9');">9</td>
	</tr>
	<tr>
		<td onclick="emptyCode();">*</td>
		<td onclick="addCode('0');">0</td>
		<td onclick="emptyCode();">#</td>
	</tr>
</table>

<form action="keypad.php" method="post">
<input id="enter" type="submit" value="Enter" /><br />
<input type="text" name="code" value="" maxlength="4" class="display" readonly="readonly" />
</form>

</body>
</html>
