<?php
?>
<html>
<head>
	<title>Sign in page</title>
<style>
body{
background-image:url("s3.jpg");
background-repeat: no-repeat;
background-size:cover;
}
#form{
	background:#BDBDBD;
	border:#000000 1px;
	width:28%;
	margin:100px auto;
	border-radius:10px;
	padding:50px;

}
#btn{
	color:white;
	background:#0404B4;
	padding :5px;
	margin-left: 69%;
}

</style>
	</head>


<body><br><br><br><br><br><br>
	<div id="form" align="center">
		
	<form action="entry.php" method="post" enctype="multipart/form-data"> 
		<fieldset>
<font size="3">
			<legend>SIGN_IN</legend>
			<p>
			<label>name</label>
			<input type="text" name="name" id="user">
			</p>
<p>
			<label>user_id</label>
			<input type="text" name="user_id" id="user">
			</p>
<p>
			<label>username</label>
			<input type="text" name="user" id="user">
			</p>	
			<p>
			<label>password</label>
			<input type="password" name="pass" id="pass">
			</p>
			<p>
			<input type="submit" id="btn"  value="signin" style="width:80px;height:60px">
			</p>
		</fieldset>
	</form> 
	</div>
</font>
</body>
</html>
