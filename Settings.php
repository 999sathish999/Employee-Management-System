<?php
include "db.php";
session_start();
 $x=$_GET['variable1'];
 error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <title>
  Settings
  </title>
</head>
<body>

<?php
 
if(isset($_POST['update']))

{
$name=$_POST["aname"];
$address= $_POST["address"];
$job=$_POST["job"];
$skills=$_POST["skills"];
$password= $_POST["cpassword"];
 
  $sql = "UPDATE emp_details SET NAME='$name', ADDRESS='$address', JOB='$job', SKILLS='$skills',PASSWORD='$password' WHERE EMAIL='$x'";
try {
    if ($res=$db->query($sql)) {
      echo "Settings Changed ";
      echo "<script>window.open('Emp_home.php?variable1=$email')";
    } else {
         throw new Exception;
    }
} catch (Exception $e) {
  echo "something went wrong".$e->getMessage();
}


}



  ?>


<form  method="post"     class="form" >     
  <p><b>Profile Update</b></p>

<input type="text" name="aname" placeholder="User name">

<input type="email" name="email" placeholder="Email">

<input type="text" name="address" placeholder="Address">

<input type="text" name="job" placeholder="Job Detail">

<input type="text" name="skills" placeholder="Skills">

<input type="password" name="password" id="password" placeholder="New Password">

<input type="password" name="cpassword"  id="cpassword" placeholder="Confirm Password">
<span id='message'></span>

<button type="submit" class="button" name="update" onkeyup="check();">Update</button>

</form>


</body>
<script>
 $(document).on('ready',function(){ 

  $('#password, #cpassword').on('keyup', function () {
  if ($('#password').val() == $('#cpassword').val()){
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});

});
</script>
</html>