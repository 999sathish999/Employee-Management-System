<?php
include "db.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<title>Sign up</title>

</head>
<body>        
	 <body>
   
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Sign Up</h3>
            <p>please enter values</p>
          </div>
        </div>

<?php



if(isset($_POST['signup'])){
$name=$_POST["aname"];
 $address=$_POST["address"];
$job=$_POST["job"];
$email=$_POST['email'];
$skills=$_POST["skills"];
$password=md5($_POST["cpassword"]);


$stmt="INSERT INTO emp_details(NAME,EMAIL,ADDRESS,JOB,SKILLS,PASSWORD) VALUES('$name','$email','$address','$job','$skills','$password')";
try {
    if ($rs=$db->query($stmt)) {
  
           
          echo "<script>alert('Registration Successful !');</script>";
         
    } else {
      throw new Exception;
    }
} catch (Exception $e) {
  echo "Something Went Wrong.Registration Unsuccessful!";
}
}
	
	 
       ?>

  <form  method="post" >
          <input type="text" placeholder="Username" name="aname" required  />
           <input type="text" placeholder="Email" name="email" required  />
            
          <input type="text" placeholder="Address" name="address" required  />
            <input type="text" placeholder="Job Role" name="job" required  />
            <input type="text" placeholder="Skills" name="skills" required  />
            <input type="password" id="password"  placeholder="Password" name="password" required  />
            <input type="password" id="cpassword" placeholder="Confirm Password" name="cpassword" required  />
            <span id='message'></span>
            <button type="submit" class="button" name="signup" onkeyup="check();">Sign Up</button>

         </form>
	

</body>

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