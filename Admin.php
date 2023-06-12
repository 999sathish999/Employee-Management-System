<?php
include "db.php";
session_start();
error_reporting(0);

if (isset($_POST["login"])) {
    $sql="select * from  admin where  EMAIL='{$_POST["aname"]}' and  PASSWORD='{$_POST["apass"]}' ";

 
try {
    $res=$db->query($sql);

    if ($res->num_rows>0) {
        $ro=$res->fetch_assoc();
        $_SESSION['ID']=$ro["ID"];
        $_SESSION['EMAIL']=$ro["EMAIL"];
        echo  "<script>window.open('AdminProfile.php?variable1=1','_self');</script>";
    } else {
        
        throw new Exception;
    }
} catch (Exception $e) {
      echo "<mark> Invalid Username or Password<mark>".$e->getMessage();
 
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />    <title>Login Page</title>
</head>
<body>
 
 

 <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
 
        <form  method="post"  >

             <h3>ADMIN</h3>
          <input type="text" placeholder="username" name="aname" required class="input" />
          <input type="password" placeholder="password"
          name="apass" class="input" required />
          <button type="submit" name="login" class="button" >login</button>
         </form>
     </div>
 </div>
</div>
</div>
 </body>
</html>

