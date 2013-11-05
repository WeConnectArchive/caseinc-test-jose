<?php
include ("ClassSQLimport.php");
/*
$host = "yourDBHost";
$dbUser = "youuser";
$dbPassword = "yourpass";
$sqlFile = "yourSqlFile.sql";
*/

$host = "localhost";
$dbUser = "creatio_caseTest";
$dbPassword = "c4s3T3st";
$dbName = "creatio_caseTest";
$sqlFile = "60870_TeamworkPM_Backup_20131101.sql";
$check = false;

$newImport = new sqlImport ($sqlFile, $check ,$host, $dbUser, $dbPassword, $dbName);
$newImport -> import ();

//------------------ Show Messages !!! ---------------------------

//$import = $newImport -> ShowErr ();
echo $import;
/*
if ($import["exito"] == 1)
{
echo "Data imported successfully";
} else {
echo $import ["errorCode"].": ".$import ["errorText"];
}
*/
?> 