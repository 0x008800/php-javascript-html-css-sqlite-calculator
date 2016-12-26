<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		
		    function validate(mail, pass)  
    {  
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if((pass.value === "")||(mail.value === "")){
    		alert("Заполните все поля!!!");
    		return false;
    	}
    	  
    if(mail.value.match(mailformat))  
    { 
    document.form.text.focus();
    		return true;
    }  
    else  
    {  
    alert("Введите корректный @mail");  
    document.form.text.focus();  
    return false;  
    }  
    }  
	</script>
</head>
<body>

<div class="wrapper">
	<div class="login">
		<form action="login.php" method="post" name="form">
			<input type="text" name="mail"><br>
			<input type="password" name="password"><br>
			<input type="submit" name="submit" value="login" onclick="validate(document.form.mail, 
			document.form.password)">
		</form>
	</div>
	

	<div class="footer">

				<div class="text">Все права защищены</div>
	</div>
</div>


</body>
</html>