
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Demo</title>
</head>
<body>
<form action=//localhost/teste.php method=post>
<label for=nome>Digite seu nome</label>
<input type=text name=nome>
<br>
<input type=submit value=enviar>
</form>
<?php echo'Hello: '.htmlspecialchars($_POST["nome"]).'!';
?>
</body>
</html>

