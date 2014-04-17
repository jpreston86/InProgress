<?php
    $accessCode = 3667;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Keypad</title>
	<link rel="stylesheet" href="css/keypad.css">
    <script>
    var submit = false;
    var testCode = '<?php echo $accessCode; ?>';
    var status = "";

    function addCode(key){
        var code = document.forms[0].code;
        if(code.value.length < 4){
            code.value = code.value + key;
        }
        while (submit != false){
            if(code.value.length == 4){
                if(code.value == testCode){
                    document.getElementById("message").style.display = "block";
                    setTimeout(submitForm,1000);
                    status = "success";
                    window.location.href = "results.php?status=" + status;
                }   
                else
                    document.getElementById("message").style.display = "block";
                    setTimeout(submitForm,1000);
                    status = "tryagain";
                    window.location.href = "http://localhost/Keypad/results.php?status=" + status;
            }
        }

    }

    function submitForm(){
        document.forms[0].submit();
        submit = true;
    }

    function emptyCode(){
        document.forms[0].code.value = "";
    }

</script>
</head>
<body onload="emptyCode();" onload="actionSet();">


<form id="kp" action="results.php" method="post">
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
    <tr>
    	<td></td>
    	<td onclick="submitForm(1000);">Enter</td>
    	<td></td>
    </tr>
</table>
<input type="text" name="code" value="" maxlength="4" class="display" readonly="readonly" />
<p id="message">ACCESSING...</p>
</form>
<script type="text/javascript">document.write(status);</script>
</body>
</html>
