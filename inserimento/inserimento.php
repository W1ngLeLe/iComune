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
var_dump($programmazionecinema);

if (isset($username) /*and isset($password)*/)
{
if (($username=="root") /*and ($password==null)*/)
{	
	function campiprogrammazionecinema($programmazionecinema)
	{
	    $r=null;
		$c=0;
		foreach($programmazionecinema as $field =>$valore) 
		{
			switch($field)
			{
				case 'nomecinema':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==0){$r=$field;}
								}
						}		
				break;
				case 'indirizzo':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==1){$r=$field;}
									else{
										$r=$r.','.$field;
										}
								}
						}		
				break;
				case 'telefono':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==2){$r=$field;;}
									else{
										$r=$r.','.$field;
										}
								}
						}		
				break;
				case 'email':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==3){$r=$field;}
									else{
										$r=$r.','.$field;
										}
								}
						}		
				break;
				case 'fkcinema':     
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==4){$r=$field;}
									else{
										$r=$r.','.$field;
										}
								}
						}		
				break;
			}
		}
	return $r;
	}
	
	function valoriprogrammazionecinema($programmazionecinema)
	{
	    $x=null;
		$c=0;
		foreach($programmazionecinema as $field =>$valore) 
		{
			switch($field)
			{
				case 'nomecinema':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==0){$x='"'.$valore.'"';}
								}
						}		
				break;
				case 'indirizzo':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==1){$x='"'.$valore.'"';}
									else{
										$x=$x.','.'"'.$valore.'"';
										}
								}
						}		
				break;
				case 'telefono':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==2){$x='"'.$valore.'"';}
									else{
										$x=$x.','.'"'.$valore.'"';
										}
								}
						}		
				break;
				case 'email':
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==3){$x='"'.$valore.'"';}
									else{
										$x=$x.','.'"'.$valore.'"';
										}
								}
						}		
				break;
				case 'fkcinema':     
				if($field==campowhere($programmazionecinema)){echo "uguali ";}
					else{
						if($valore==null){$c=$c+1;}
							else{ 
								if($c==4){$x='"'.$valore.'"';}
									else{
										$x=$x.','.'"'.$valore.'"';
										}
								}
						}		
				break;
			}
		}
	return $x;
	}
	
		function campowhere($programmazionecinema)
	{
		$q;
		foreach($programmazionecinema as $field =>$valore) 
		{
			switch($field)
			{
				case 'radionomecinema':
					$q=$valore;
				break;
				case 'radioindirizzo':
					$q=$valore;
				break;
				case 'radiotelefono':
					$q=$valore;
				break;
				case 'radioemail':
					$q=$valore;
				break;
				case 'radiofkcinema':     
					$q=$valore;
				break;			
			}
		}
	return $q;
	}
	
	
	function where($programmazionecinema)
	{	
		$z;
		foreach($programmazionecinema as $field =>$valore) 
		{
			switch($field)
			{
				case 'nomecinema':
					$z=$valore;
				break;
				case 'indirizzo':
					$z=$valore;
				break;
				case 'telefono':
					$z=$valore;
				break;
				case 'email':
					$z=$valore;
				break;
				case 'fkcinema':     
					$z=$valore;
				break;			
			}
		}
	return $z;
	}
$condizione=isset($_POST['radionomecinema']) || isset($_POST['radioindirizzo']) || isset($_POST['radiotelefono']) || isset($_POST['radioemail']) || isset($_POST['radiofkcinema']);
	if($condizione==null)
	{   
     	$query=$connessione->prepare("insert into icomune.programmazionecinema (".campiprogrammazionecinema($programmazionecinema).") values(".valoriprogrammazionecinema($programmazionecinema).")");
		$query->execute();
		var_dump($query);
	}
	else
	{
		$query1=$connessione->prepare("insert into icomune.programmazionecinema (".campiprogrammazionecinema($programmazionecinema).") values(".valoriprogrammazionecinema($programmazionecinema).") where ".campowhere($programmazionecinema)."=\"".where($programmazionecinema)."\"");
		$query1->execute();		
		var_dump($query1);
	}		
}
}
else echo"nome utente o password errato";
?>
