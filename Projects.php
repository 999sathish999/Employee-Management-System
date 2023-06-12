<?php
include "db.php";
session_start();
$x=$_GET['variable1'];//value1 be stored in $x


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
           
                   </ul>
        <!-- End -->
    </header>
    <!-- navbarEnd -->

    <!-- Sidenav -->
    <article class="sidenav">
        <section class="profile">
            <img src="img.jpeg" alt="" width="100" height="100">
 
            <div class="name">
                TechNazon
            </div>
            <div class="job">
                Web Developer
            </div>
        

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

    <div class="main">
        <h2>Projects</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                 
 <?php

 //To print key and value pair

$sql="select up.project_id,up.project_name,up.marks,up.manager_id,up.departement,up.description from user_projects up join emp_details ed on up.user_id = ed.email where ed.email = '$x'";

 $res=$db->query($sql);


 
 while ($ro=$res->fetch_assoc()) {
    echo "<b>Project Id:</b> " . $ro['project_id']. " <b>Project Name:</b>". $ro['project_name'] ." <b>Manaeger Id:</b> ".$ro['manager_id']."<b> Marks:</b> ".$ro['marks']."/10"."<b> Department:</b> ".$ro['departement'] ."<br><br>";
}



 
  ?>
  



    <!-- End -->
 
</body>
</html>