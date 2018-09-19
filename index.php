<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		
		    function validate(email, pass)  
    {  
    
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if((pass.value === "")||(email.value === "")){
    		alert("Заполните все поля!!!");
    		return false;
    	}
    	  
    if(email.value.match(emailformat))  
    { 
    document.form.email.focus();
    		return true;
    }  
    else  
    {  
    alert("Введите корректный @mail");  
    document.form.email.focus();  
    return false;  
    }  
    }  
	</script>
</head>
<body>

<div class="wrapper">
	<div class="login">
		<form action="login.php" method="post" name="form">
			<input type="text" name="email"><br>
			<input type="password" name="password"><br>
			<input type="submit" name="submit" value="login" onclick="validate(document.form.email, 
			document.form.password)">
		</form>
	</div>
	

	<div class="footer">

				<div class="text">Все права защищены</div>
	</div>
</div>


</body>
</html>
