<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'dbcnp'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database,3030);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
