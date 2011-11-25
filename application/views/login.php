<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Skaņumuca</title>
           <link rel="stylesheet" type="text/css" href="css/prelogin.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

div{
width: 100%;
position: absolute;
text-align: center;
} 
	</style>
</head>
<body>
<div>
<form id='login' action='login/login_validate' method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >Lietotājs:</label></br>
<input type='text' name='username' id='username'  maxlength="50" /></br>
<label for='password' >Parole:</label></br>
<input type='password' name='password' id='password' maxlength="50" /></br>
<input type='submit' name='Ieiet' value='Ieiet' />
</form>
</br>
<a href="register">Neesi reģistrējies?</a>
</div> 


</body>
</html>
