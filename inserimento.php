<?php
session_start();
print_r($_SESSION);
$username = $_SESSION['username'];
$password = $_SESSION['password'];
// nome di host
$host = "localhost";
// nome del database
$db = "icomune";
// username dell'utente in connessione
//$user = $_POST['utente'];
$programmazionecinema=$_POST;
// password dell'utente
header('Content-Type: text/html; charset=latin');
/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
  $connessione = new PDO("mysql:host=$host;dbname=$db", $username, $password);
  
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
/*var_dump($programmazionecinema);
die();*/
if (isset($username) /*and isset($password)*/)
{
if (($username=="root") /*and ($password==null)*/)
{
	function campiprogrammazionecinema($programmazionecinema)
	{
	    $r;
		$count=0;
		foreach($programmazionecinema as $field=>$valore) 
		{
			switch($field)
			{                           
				case 'nomecinema':
				if($valore==null){$count+1;}
					else{
							if($count=0){$r=$field;}
//					    		else {$r=$r.','.$field;}
						}
				break;
				case 'indirizzo':
				if($valore==null){$count+1;}
					else{
							if($count=1){$r=$field;}
					    		else {$r=$r.','.$field;}
						}
				break;
				case 'telefono':
				if($valore==null){$count+1;}
					else{
							if($count=2){$r=$field;}
					    		else {$r=$r.','.$field;}
						}
				break;				
				case 'email':
				if($valore==null){$count+1;}
					else{
							if($count=3){$r=$field;}
					    		else {$r=$r.','.$field;}
						}
				break;
				case 'fkcinema':
				if($valore==null){$count+1;}
					else{
							if($count=4){$r=$field;}
					    		else {$r=$r.','.$field;}
						}
				break;
			}
		} 
	return $r;	
	}
	
	function valoriprogrammazionecinema($programmazionecinema)
	{
	    $x;
		$c=0;
		foreach($programmazionecinema as $field =>$valore) 
		{
			switch($field)
			{
				case 'nomecinema':
				if($valore==null){$c+1;}
					else{ 
							if($c=0){$x='"'.$valore.'"';}
//					    		else {$x=$x.','.'"'.$valore.'"';}
						}
				break;
				case 'indirizzo':
				if($valore==null){$c+1;}
					else{ 
							if($c=1){$x='"'.$valore.'"';}
					    		else {$x=$x.','.'"'.$valore.'"';}
						}
				break;
				case 'telefono':
				if($valore==null){$c+1;}
					else{ 
							if($c=2){$x='"'.$valore.'"';}
					    		else {$x=$x.','.'"'.$valore.'"';}
						}
				break;
				case 'email':
				if($valore==null){$c+1;}
					else{ 
							if($c=3){$x='"'.$valore.'"';}
					    		else {$x=$x.','.'"'.$valore.'"';}
						}
				break;
				case 'fkcinema':     
				if($valore==null){$c+1;}
					else{ 
							if($c=4){$x='"'.$valore.'"';}
					    		else {$x=$x.','.'"'.$valore.'"';}
						}
				break;
			}
		}
	return $x;
	}
$fkcinema=$_POST['fkcinema'];
	if($fkcinema==null)
	{   
     	$query=$connessione->prepare("insert into icomune.programmazionecinema (".campiprogrammazionecinema($programmazionecinema)./*$a.*/") values(".valoriprogrammazionecinema($programmazionecinema)./*$b.*/")");
		$query->execute();
		var_dump($query);
	}
	else
	{
		$query1=$connessione->prepare("insert into icomune.programmazionecinema (".campiprogrammazionecinema($programmazionecinema).$a.") values(\"".valoriprogrammazionecinema($programmazionecinema).$b."\")where fkcinema=\"".$fkcinema."\"");
		$query1->execute();		
		var_dump($query1);
	}		
}
}
else echo"nome utente o password errato";
?>
