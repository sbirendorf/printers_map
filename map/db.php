<? 

/*  Database Information - Required!!  */

/* -- Configure the Variables Below --*/


$username="root";
$password="";
$database="markers";
$dbhost = 'localhost';

/* Database Stuff, do not modify below this line */



$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd") 

	or die ("Couldn't connect to server.");

	

$db = mysql_select_db("$database_name", $connection)

	or die("Couldn't select database.");

?>

