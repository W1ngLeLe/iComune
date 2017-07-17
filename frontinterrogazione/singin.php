<?php
$host = "localhost";
$db = "icomune";

$username=$_POST["utente"];
$password =$_POST["password"];
$mail=$_POST["mail"];
header('Content-Type: text/html; charset=latin');
/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
    $connessione = new PDO("mysql:host=$host;dbname=$db","root","");
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
$m="select * from icomune.login where mail=\"".$mail."\"";
$u="select * from icomune.login where user=\"".$username."\"";
$p="select * from icomune.login where password=\"".$password."\"";
	if(($connessione->query($m))==null && ($connessione->query($u))==null && ($connessione->query($p))==null)
	{
			$query=$connessione->prepare("insert into icomune.login (user,password,mail) values (\"".$username."\",\"".$password."\",\"".$mail."\")");
			$query->execute();
			//header("location: http://localhost/home.html");
	}
	else
		{
			echo"fgsdrsfgn";
			//header("location: http://localhost/home.html");
		}
	
	
?>