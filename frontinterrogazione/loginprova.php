 <?php
 session_start();
print_r($_POST);
$user = $_POST['utente'];
$password = $_POST['password'];
$mail=$_POST['mail'];
//Salvo i dati...
$_SESSION['user'] = $user;
$_SESSION['password'] = $password;
$_SESSION['mail'] = $mail;
 ?><html>
<head><link rel="stylesheet" type="text/css" href="provalogin.css"></head>
<body>

<div id="container">
	<div id="header">
		<h1>ICOMUNE</h1>
	</div><!--#header-->
		<div id="navigation">
			<button class="button button1">home</button>
		</div>
			<div id="main">
				<div id="login" type="text" action="singin.php" method="post">
						<p class="sansserif">utente<br>
						<input type="text" name="utente"/>
						<p class="sansserif">password<br>
						<input type="text" name="password"/><br>
						<p class="sansserif">email<br>
						<input type="text" name="mail"/><br>
						<input type="submit" name="invio" />
						<input type="reset" name="reset"/>
				</div>
			</div>
</div>
</body>
</html>
 <?php
 ?>
