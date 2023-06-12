 <?php
include "db.php";
session_start();
error_reporting(0);

if (isset($_POST["Upload"])) {
   $pid=$_POST["pid"];
   $pname=$_POST["pname"];
   $uid=$_POST["uid"];
   $mid= $_POST["mid"];
   $marks=$_POST["marks"];
   $des=$_POST["des"];
 
try {

  $sql = "INSERT INTO user_projects(Project_Id,Project_Name,User_Id,Marks,Manager_Id, Description) VALUES($pid, '$pname', '$uid', $mid, $marks, '$des')";

    
    if ($res=$db->query($sql)) {
        echo "Project Uploaded";
        echo "<script>window.open('AdminProjects.php','_self')</script>";
    }
     else{
        throw new Exception;
     }
}
    catch (Exception $e) {////////////////////
       
       echo "Cannot Update Table".$e->getMessage();
   } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Upload Project</title>
</head>
<body>
  
 <main class="main">
   <section class="card">                    

        <form  method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"  class="form" >
                      <h3>Update Project</h3>
          <input type="text" placeholder="Project Id" name="pid"/>
          <input type="text" placeholder="Project Name" name="pname"/>
          <input type="text" placeholder="User Id" name="uid"/>
          <input type="text" placeholder="Marks" name="marks"/>
          <input type="text" placeholder="Manager Id" name="mid"/>
          <input type="text" placeholder="Description" name="des"/>
        
           <button type="submit" name="Upload" class="button" >Upload</button>
         </form>
    

</main>
</body>
</html>