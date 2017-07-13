<?php
$host = "localhost";

$db = "login";

$user = $_POST["utente"];

$password = $_POST["password"];

$mail= $_POST["mail"];

header('Content-Type: text/html; charset=latin');
/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
  $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  // notifica in caso di connessione effettuata
  echo "Connessione a MySQL tramite PDO effettuata.";
  // chiusura della connessione
  //$connessione = null;
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
echo $e->getMessage();
}
     	$query=$connessione->prepare("insert into login.login (user,password,mail) values(".$user.",".$password.",".$mail.")";
		$query->execute();
		var_dump($query);

?>