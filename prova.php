<?php
// nome di host
$host = "localhost";
// nome del database
$db = "icomune";
// username dell'utente in connessione
$user = $_POST["utente"];
// password dell'utente
$password = $_POST["password"];
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
$nl="<br>";
echo $nl;
$var=$_POST['nomecomune'];
$contvar=$_POST['nomecomune'];
$sa="select * from icomune.schedaanagrafica where nomecomune=\"".$var."\"";
$csa="select contattischedaanagrafica.sito,contattischedaanagrafica.mail,contattischedaanagrafica.telefono,contattischedaanagrafica.indirizzo,contattischedaanagrafica.fax from icomune.contattischedaanagrafica inner join icomune.schedaanagrafica on contattischedaanagrafica.nomecontatti=schedaanagrafica.nomecomune where schedaanagrafica.nomecomune=\"".$var."\"";
$ac="select amministratoricomunali.cognome,amministratoricomunali.nome,amministratoricomunali.siglaprovincia,amministratoricomunali.popcensita,amministratoricomunali.titoloaccademico,amministratoricomunali.sesso,amministratoricomunali.datanascita,amministratoricomunali.luogonascita,amministratoricomunali.carica,amministratoricomunali.dataelezione,amministratoricomunali.dataentratacarica,amministratoricomunali.partito,amministratoricomunali.titolodistudio,amministratoricomunali.professione from icomune.amministratoricomunali inner join icomune.schedaanagrafica on amministratoricomunali.fkcomuneamm=schedaanagrafica.nomecomune where fkcomuneamm=upper(\"".$var."\")";
$fp="select festepatronali.nomesanto,festepatronali.fkcomunepatrono,festepatronali.giornofesta from icomune.festepatronali inner join icomune.schedaanagrafica on festepatronali.fkcomunepatrono=schedaanagrafica.nomecomune where festepatronali.fkcomunepatrono=\"".$var."\"";
/*$l="SELECT * FROM icomune.amministratoricomunali WHERE fkcomuneamm=upper(\"".$var."\")";
$v="SELECT * FROM icomune.festepatronali WHERE fkcomunepatrono=\"".$var."\"";*/
if(isset ($_POST['istat']))
{
 
  
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>Codice Istat</td><td>".$row['istat'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['longitudine']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>longitudine</td><td>".$row['longitudine'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['provincia']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>codice provincia</td><td>".$row['provincia'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['siglaprov']))
{
  
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>siglaprov</td><td>".$row['siglaprov'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['codiceregione']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>codiceregione</td><td>".$row['codiceregione'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['areageo']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>area geografica</td><td>".$row['areageo'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['popresidente']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>popolazione residente</td><td>".$row['popresidente'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['popstraniera']))
{
  
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>popolazione straniera</td><td>".$row['popstraniera'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['densitademografica']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>densita' demografica</td><td>".$row['densitademografica'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['superficekmq']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>superfice in kmq</td><td>".$row['superficekmq'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['altezzacentro']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>altezza del centro</td><td>".$row['altezzacentro'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['zonaaltimetrica']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>zona altimetrica</td><td>".$row['zonaaltimetrica'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['latitudine']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>latitudine</td><td>".$row['latitudine'].$nl."</td></tr>";
echo "</table>";
}
}
if(isset ($_POST['codicecatastale']))
{
 
foreach ($connessione->query($sa) as $row){	
?><table border="1"><?php
echo "<tr><td>codice catastale</td><td>".$row['codicecatastale'].$nl."</td></tr>";
echo "</table>";
}
}
if (isset($_POST['tutto']))
{
	foreach ($connessione->query($sa) as $row){
		?><table border="1"><?php
		echo "<tr><td>Nome comune</td><td>".$row['nomecomune'].$nl."</td></tr>";
        echo "<tr><td>Codice Istat</td><td>".$row['istat'].$nl."</td></tr>";
		echo "<tr><td>Codice Provincia</td><td>".$row['provincia'].$nl."</td></tr>";
		echo "<tr><td>Sigla Provincia</td><td>".$row['siglaprov'].$nl."</td></tr>";
		echo "<tr><td>Codice Regione</td><td>".$row['codiceregione'].$nl."</td></tr>";
		echo "<tr><td>Area Geografica</td><td>".$row['areageo'].$nl."</td></tr>";
		echo "<tr><td>Popolazione Residente</td><td>".$row['popresidente'].$nl."</td></tr>";
		echo "<tr><td>Popolazione Straniera</td><td>".$row['popstraniera'].$nl."</td></tr>";
		echo "<tr><td>Densita' demografica</td><td>".$row['densitademografica'].$nl."</td></tr>";
		echo "<tr><td>Superfice(kmq)</td><td>".$row['superficekmq'].$nl."</td></tr>";
		echo "<tr><td>Altezza Centro Comune</td><td>".$row['altezzacentro'].$nl."</td></tr>";
		echo "<tr><td>Zona Altimetrica</td><td>".$row['zonaaltimetrica'].$nl."</td></tr>";
		echo "<tr><td>Latitudine</td><td>".$row['latitudine'].$nl."</td></tr>";
		echo "<tr><td>Longitudine</td><td>".$row['longitudine'].$nl."</td></tr>";
		echo "<tr><td>Codice Catastale</td><td>".$row['codicecatastale'].$nl."</td></tr>";
	foreach($connessione->query($csa) as $row){
	echo "<tr><td>sito</td><td><a href=\"".$row['sito']."\">".$row['sito']."</a>".$nl."</td></tr>";
	echo "<tr><td>mail</td><td>".$row['mail'].$nl."</td></tr>";
	echo "<tr><td>telefono</td><td>".$row['telefono'].$nl."</td></tr>";
	echo "<tr><td>indirizzo</td><td>".$row['indirizzo'].$nl."</td></tr>";
	echo "<tr><td>fax</td><td>".$row['fax'].$nl."</td></tr>";
	}
	foreach($connessione->query($fp) as $row){
		echo"<tr><td>santo patrono</td><td>".$row['nomesanto'].$nl."</td></tr>";
		echo"<tr><td>giorno celebrazione</td><td>".$row['giornofesta'].$nl."</td></tr>";
	}
	echo"</table>";
	?><table border="1"><?php
	echo"<tr><td>sigla della provincia</td><td>popolazione censita</td><td>titolo accademico</td>
	<td>cognome</td><td>nome</td><td>sesso</td><td> data di nascita</td><td>luogo di nascita</td>
	<td>carica</td><td>data elezione</td><td>data dell'entrata in carica</td>
	<td>partito politico</td><td>titolo di studio</td><td>professione</td></tr>";
	foreach ($connessione->query($ac) as $row){
		
		echo "<tr><td>".$row['siglaprovincia']."</td>";
		echo "<td>".$row['popcensita']."</td>";
		echo "<td>".$row['titoloaccademico']."</td>";
		echo "<td>".$row['cognome']."</td>";
		echo "<td>".$row['nome']."</td>";
		echo "<td>".$row['sesso']."</td>";
		echo "<td>".$row['datanascita']."</td>";
		echo "<td>".$row['luogonascita']."</td>";
		echo "<td>".$row['carica']."</td>";
		echo "<td>".$row['dataelezione']."</td>";
		echo "<td>".$row['dataentratacarica']."</td>";
		echo "<td>".$row['partito']."</td>";
		echo "<td>".$row['titolodistudio']."</td>";
		echo "<td>".$row['professione']."</td></tr>";
	}
	echo"</table>";
	
	
	
}
}
if (isset($_POST['amministratoricomunali']))
	{
    ?><table border="1"><?php
	echo"<tr><td>sigla della provincia</td><td>popolazione censita</td><td>titolo accademico</td>
	<td>cognome</td><td>nome</td><td>sesso</td><td> data di nascita</td><td>luogo di nascita</td>
	<td>carica</td><td>data elezione</td><td>data dell'entrata in carica</td>
	<td>partito politico</td><td>titolo di studio</td><td>professione</td></tr>";
	foreach ($connessione->query($ac) as $row){
		
		echo "<tr><td>".$row['siglaprovincia']."</td>";
		echo "<td>".$row['popcensita']."</td>";
		echo "<td>".$row['titoloaccademico']."</td>";
		echo "<td>".$row['cognome']."</td>";
		echo "<td>".$row['nome']."</td>";
		echo "<td>".$row['sesso']."</td>";
		echo "<td>".$row['datanascita']."</td>";
		echo "<td>".$row['luogonascita']."</td>";
		echo "<td>".$row['carica']."</td>";
		echo "<td>".$row['dataelezione']."</td>";
		echo "<td>".$row['dataentratacarica']."</td>";
		echo "<td>".$row['partito']."</td>";
		echo "<td>".$row['titolodistudio']."</td>";
		echo "<td>".$row['professione']."</td></tr>";
	}
	echo"</table>";
	}
	
	
	if (isset($_POST['festepatronali']))
	{
	?><table border="1"><?php
	foreach($connessione->query($fp) as $row){
		echo"<tr><td>santo patrono</td><td>".$row['nomesanto'].$nl."</td></tr>";
		echo"<tr><td>giorno celebrazione</td><td>".$row['giornofesta'].$nl."</td></tr>";
	}
	echo"</table>";
	}
?>