<?php
include "db.php";
session_start();
 
$mail=$_GET['variable'];
error_reporting(0);


 if (isset($_POST["Update"])) {
$name=$_POST["aname"];
 $address=$_POST["address"];
$job=$_POST["job"];
$skills=$_POST["skills"];
try {
   $sql = "UPDATE emp_details SET NAME='$name', ADDRESS='$address', JOB='$job', SKILLS='$skills' WHERE EMAIL='$mail'";
    
    if ($res=$db->query($sql)) {
        echo "Record Updated";
        echo "<script>window.open('Employee.php?variable=$mail','_self')</script>";
    } else {
        throw new Exception;
    }

} catch (Exception $e) {
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
    <title>Update</title>
</head>
<body>
  
                 

        <form  method="post"   class="form" >
                      <h3>Update Record</h3>
          <input type="text" placeholder="Username" name="aname"    />
             
            <input type="text" placeholder="Address" name="address"  />
            <input type="text" placeholder="Job Role" name="job"  />
            <input type="text" placeholder="Skills" name="skills"   />
                <button type="submit" name="Update" class="button" >Update</button>
         </form>
    






  
</main>
</body>
</html>