<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php 
  //include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
 	<h1>Welcome to Dhaka City's Official Website</h1>
    <p class="block-quote">Our aim has always been to bring world–class Citizen care within the reach of common man.</p>
    
  <?php 
   
    if(isset($_POST['remail'])){
        $username=$_POST['rfullname'];
        $password=$_POST['rpassword'];
        
        $email=$_POST['remail'];
        $query = "INSERT INTO volunteer (email,password,fullname,speciality)VALUES('$username','$password','$email','volunteer' )";
        
      $query_run=mysqli_query($connection,$query);
      if($query_run){
        echo '<script type="text/javascript"> "Values Added"</script>';
      }
    }else{
     
    }
    unset($_POST);
  ?>
<div class="row">

          
  <div class="col col-xl-6 col-sm-6 custom_register" style="margin-left: 310px;" id="register1">
    <form method="post" class="text-center" action="index.php">
	    <h1>Volunteer Registration</h1>
	      <div class="form-group">
	        <label for="usr">Full Name:</label>
	        <input type="text" class="form-control" name="rfullname" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Email:</label>
	        <input type="email" class="form-control" name="remail" required>
	      </div>
	          
        <div class="form-group">
	        <label for="pwd">Password:</label>
	        <input type="password" class="form-control"  name="rpassword" required>
	      </div>

	      <div class="form-group">
	        <input type="submit" class="btn btn-primary">
	        <input type="reset" class="btn btn-danger">
	      </div>
    </form>
  </div>
    <div class="col col-xl-6 col-sm-6 custom_register" style="margin-left: 210px;" id="register1">
    <form method="post" class="text-center" action="index.php">
	         <h1 class="logo">
                    <a href="bills.php">
      Available Bills
        </a>
                </h1>
	   
      
    </form>
  </div>
  
  
  
  <section id="Qualities" style="">
    <div class="container-fluid">
          <div class="row" style="">
             <div class="col-md-12" style="">
                 <div class="common_title green_style text-center">
                     <h1></h1>
                     
                 </div>
                 
             </div>
             
         </div>
         <div class="circle_content text-center">
          <div class="row" style="  background-image:url(../City/images/WIDTHWALA.jpeg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 80px 0;">
            
             
             <div class="col-md-4 custom_circle">
                            <h1 style="color:white;font-weight:bold">
                             <?php
                
  $query ="SELECT count(email)  AS number FROM `citizen`  ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   
   echo "$row[number]";
      
                    ?>
                            
                            
                            </h1>
                             <img src="images/sonkha.png" class="img-fluid" alt="">
                              
                 <h2 style=" color:white; font-weight:bold ">Citizens</h2>
             </div>
             <div class="col-md-4 custom_circle">
                              <h1 style="color:white; font-weight:bold">
                                   <?php
                
  $query ="SELECT count(email)  AS number FROM `volunteer`  ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   
   echo "$row[number]";
      
                    ?>
                              </h1>
                             <img src="images/sonkha%20(2).png" class="img-fluid" alt="">
                               
                 <h2 style=" color:white; font-weight:bold ">Volunteers</h2>
             </div>
             <div class="col-md-4 custom_circle">
                              <h1 style="color:white; font-weight:bold">
                                   <?php
                
  $query ="SELECT count(email)  AS number FROM `admin`  ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   
   echo "$row[number]";
      
                    ?>
                              </h1>
                             <img src="images/sonkha3.png" class="img-fluid" alt="">
                               
                 <h2 style=" color:white; font-weight:bold">Admins</h2>
             </div>
             
         </div>
    </div>
   </div>
</section>
</div>
</div>



