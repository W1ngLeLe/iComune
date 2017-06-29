<?php
// nome di host

$host = "localhost";
// nome del database
$db = "icomune";
// username dell'utente in connessione
//$user = $_POST["utente"];
// password dell'utente
//$password = $_POST["password"];
header('Content-Type: text/html; charset=latin');
/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
  $connessione = new PDO("mysql:host=$host;dbname=$db"/*, $user, $password*/);
  
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
if (($user=="FrancescoB") and ($password=="Fenix1718"))
{
	
 
	
	function campiprogrammazionecinema($icomune)
	{
		switch($icomune)
		{
			case '1':
			if(isset ($_POST["nomecinema"]))
				return 1;
			break;
			case '2':
			if(isset ($_POST["indirizzo"]))
				return 2;
			break;
			case '3':
			if(isset ($_POST["telefono"]))
				return 3;
			break;
			case '4':
			if(isset ($_POST["email"]))
				return 4;
			break;
			case '5':
			if(isset ($_POST["fkcinema"]))
				return 5;
			break;
		}
	}
	$var=$_POST["valore"];
    $query="insert into icomune.programmazionecinema (".campiprogrammazionecinema().") values (\"".$var."\")";
   
	
	
	
}
echo"nome utente o password errato";