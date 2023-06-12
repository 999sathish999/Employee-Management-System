<?php 
include "db.php";
 session_start();
 error_reporting(0);
 
 

 if (isset($_POST["login"])) {
    $dummy1=$_POST['email'];
    $dummy2=md5($_POST['apass']);
    $s_var1=mysqli_real_escape_string($db,$dummy1);
    $s_var2=mysqli_real_escape_string($db,$dummy2);
    $sql="select * from emp_details where EMAIL='$s_var1' and  PASSWORD='$s_var2' ";
    $res=$db->query($sql);

  try { 
   /***
    *try catch 
    ***/
      if ($res->num_rows>0) {
          $ro=$res->fetch_assoc();
          $_SESSION['ID']=$ro["ID"];
          $_SESSION['NAME']=$ro["NAME"];
          $value=$ro["EMAIL"];
          echo  "<script>window.open('Emp_home.php?variable1=$s_var1','_self');</script>";
                
       } else {
              throw new Exception;
       }
   } catch (Exception $e) {
       echo "<script>alert('Enter Valid Username and Password')</script>";
       echo "<mark> Invalid Username or Password<mark>".$e->getMessage();
   } 

} 
  
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> TechNazon Home </title>
</head>
<body>
 
    <main class="login-page">
      <article class="form">
        <section class="login">
          <section class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
           </section>
    </section>



        <form  method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
          <input type="email" placeholder="username" name="email" required  />
          <input type="password" placeholder="password"
          name="apass" required />
          <button type="submit" name="login" class="button" >login</button>
          <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </form>
      </div>


 
</section>
</article>
</main>
</body>
</html>