<?php
include "db.php";
session_start();

$x=$_GET['variable'];
echo "<script>prompt('Do you want to Delete this Employee Record?);</script>";

 

try {
$sql="delete from emp_details where  EMAIL='$x'";
if($res= $db->query($sql)){
 echo "Record Deleted Successfully";
 
 }
 
 } catch(Exception $e) {
 	echo"Exception occured".$e->getMessage();
 }
 