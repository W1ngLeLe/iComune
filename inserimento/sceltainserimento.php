 <?php
 session_start();
print_r($_POST);
$username = $_POST['utente'];
$password = $_POST['password'];

//Salvo i dati...
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
 ?><html>
<head><title>inserimento</title></head>
<body style="background-color:#FFDAB9;">

<link rel="stylesheet" type="text/css" href="styleoflogin.css">
<h1>iCOMUNE</h1>
<form nome="icomune" action="inserimento.php" method="post">
<br><p><b>CINEMA</b></p>
<br><p><b>inserire il record attraverso i campi della tabella o modificarne uno già esistente evidenziando attraverso l'apposito flag il criterio della modifica</b></p>
	<table style="width:100%">
  <tr>
    <th>nome del cinema</th>
<th></th>
    <th>indirizzo</th>
<th></th>	
    <th>telefono</th>
<th></th>
	<th>email</th>
<th></th>
	<th>fkcinema</th>
<th></th>
  </tr>
  <tr>
    <td><input type="text" name="nomecinema" method="post"/></td>
	<td><input type="radio" name="radionomecinema" value="nomecinema" method="post"/></td>
    <td><input type="text" name="indirizzo"  method="post"/></td>
	<td><input type="radio" name="radioindirizzo" value="indirizzo" method="post"/></td>
    <td><input type="text" name="telefono"  method="post"/></td>
	<td><input type="radio" name="radiotelefono" value="telefono" method="post"/></td>
	<td><input type="text" name="email"  method="post"/></td>
	<td><input type="radio" name="radioemail" value="email" method="post"/></td>
	<td><input type="text" name="fkcinema" method="post"/></td>
	<td><input type="radio" name="radiofkcinema" value="fkcinema" method="post"/></td>
  </tr>
  </table>
  <br>	
    <input type="submit" name="invio" />
	<input type="reset" name="reset"/>
</form>
</body>
</html>
<?php
?>