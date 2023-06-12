<?php
include "db.php";
session_start(); 

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
  <th>Project_ID</th><br>
  <th>Project Name</th>
  <th>User Id</th>
  <th> Marks</th>
  <th> Manager Id</th>
     <th>Description</th>
   

</thead>
<tbody style="text-align:left;  background-color:yellow;">
<?php
 $sql="SELECT * FROM user_projects";
 $res=$db->query($sql);
 
while ($ro= $res->fetch_assoc()) {

       echo "<tr>
                <td>{$ro['id']}</td>
                <td>{$ro['Project_Id']}</td>
                <td>{$ro['Project_Name']}</td>
                <td>{$ro['User_Id']}</td>
                <td>{$ro['Marks']}</td>
                <td>{$ro['Manager_Id']}</td>
                <td>{$ro['Description']}</td>
           
                 </tr>
                  
                
                ";
                 

       }

 echo "<a href='AdminProjectUpload.php'>
  <button class='btn btn-success'>Upload</button>
</a>";

?>
</tbody> 
</table>
</section>
 

</body>
 
</html>