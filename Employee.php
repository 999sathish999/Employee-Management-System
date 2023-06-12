<?php
 

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'employee');
 
class Employee
{
	 
function __construct()///////
{
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    $this->dbh=$con;
 
 if (mysqli_connect_errno()) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
  
}

public function dummy(){
   $result=mysqli_query($this->dbh,"select * from emp_details");
   
       return $result;
	 }
   

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>Employee</title>
	

</head>
<body>

 <section style="margin-left: 50px;
 margin-top:1px;">

<table  width=" 90%" border="1px solid"  cellpadding="2px"   >
	<thead   >
	<th  >Id</th> 
	<th>Name</th><br>
	<th>Email</th>
	<th>Address</th>
	<th>Skills</th>
	<th>Password</th>
	<th> Delete</th>
	<th>Update</th>

</thead>
<tbody style="text-align: center;  background-color:lightgreen;">
<?php
$object = new Employee();
$res=$object->dummy();
while ($ro= $res->fetch_assoc()) {

	 
           echo "<tr >
                <td>{$ro['id']}</td>
                <td>{$ro['name']}</td>
                <td>{$ro['email']}</td>
                <td>{$ro['address']}</td>
                <td>{$ro['skills']}</td>
                <td>{$ro['password']}</td>
           <td><a href='Delete.php?variable={$ro['email']}','_self'>Delete</a></td>

                 <td><a href='Update.php?variable={$ro['email']}','_self'>Update</a></td>

                </tr>
                
                ";
                 

       }

?>
</tbody> 
</table>
 
</section>
 


</body>
 
</html>