<?php
if(!@mysql_connect('localhost','root',''))
{echo 'could not connect';
die();}

if(!@mysql_select_db(tutor))
{echo 'error';}
if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['login']))
{
	if(!empty($_POST['email'])&&!empty($_POST['password']))
	{
		$email=$_POST['email'];
		$pass1=$_POST['password'];
		$query="select email,password from student where email='".mysql_real_escape_string($email)."' and password='".mysql_real_escape_string($pass1)."'";
		$query_run=mysql_query($query);
		if(mysql_num_rows($query_run)==1)
		{
			header("Location:studenthome.php");
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="login.php">
<div class="login">
<div class="input-group">
	<label>Email</label>
	<input type="text" name="email">
</div>
<div class="input-group">
	<label>Password</label>
	<input type="password" name="password1">
</div>
<div class="input-group">
	<button type="submit" name="login" class="butn" onclick="buttonlogin()">login </button>
	
</div>
</div>

<p>
Not a member yet?<a href="homepage.php">Sign up</a>
</p>
</form>
</body>
</html>
