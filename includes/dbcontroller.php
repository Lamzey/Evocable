<?php
$DB_host = "sql213.epizy.com";
$DB_user = "epiz_31294433";
$DB_pass = "SrX9MsvDhjBjAu";
$DB_name = "epiz_31294433_hostel";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>