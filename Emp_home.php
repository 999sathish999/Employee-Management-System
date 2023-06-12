
<?php
include "db.php";
session_start();

$x=$_GET['variable1'];//value1 be stored in $x
   
  
$sql ="select id,email,name,password,address,job,skills from emp_details where EMAIL='$x'";

$res = $db->query($sql);

$ro = $res->fetch_assoc();

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style2.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
  


 

    <!-- Navbar top -->
    <header class="navbar-top">
        <section class="title">
            <h1>Profile</h1>
        </section>

        <!-- Navbar -->
        <ul>
            <li>
                <a href="#message">
                    <span class="icon-count">29</span>
                    <i class="fa fa-envelope fa-2x"></i>
                </a>
            </li>
            <li>
                <a href="#notification">
                    <span class="icon-count">59</span>
                    <i class="fa fa-bell fa-2x"></i>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </header>
    <!-- navbarEnd -->

    <!-- Sidenav -->
    <article class="sidenav">
        <section class="profile">
            <img src="img.jpeg" alt="" width="100" height="100">
 
            <section class="name">
                TechNazon
           </section>
            <section class="job">
                Web Developer
             </section>
        

          <section class="url">  <!--sending id,and email id-->

             <?php   echo "<a href='Emp_home.php?variable1=$x'>Identity</a>";
              ?>   
              <hr align="center">
           </section>

           <section class="url">
            

             <?php   echo "<a href='Projects.php?variable1=$x'>Projects</a>";
               ?>
                <hr align="center">
           </section>

             
            <section class="url" class="active">
             <?php   echo "<a href='Settings.php?variable1=$x'>Settings</a>";
              ?>
                <hr align="center">
            </section>

           <section class="url" class="active">
             <?php   echo "<a href='logout.php'>Logout</a>";
              ?>
                <hr align="center">
            </section>

        </section>
    </article>
    <!-- End -->   

    <main class="main">
        <h2>IDENTITY</h2>
        <article class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>



                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php 
                          echo $ro['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php 
                          ECHO $ro["email"]; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php 
                          ECHO $ro['address']; ?></td>
                        </tr>
                        <tr>
                           
                        <tr>
                            <td>Job</td>
                            <td>:</td>
                            <td><?php 
                          ECHO $ro['job']; ?></td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td><?php 
                          ECHO $ro['skills']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </main>


    <!-- End -->
</body>
</html>