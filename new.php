<?php
session_start();
?>
<?php 
  include("library.php");
  noAccessIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    <div id="particles-js" style="background-image: url('images/bg.jpg');" >

      <?php 
    if(isset($_POST['lemail'])){
    //  $i = login($_POST['lemail'],$_POST['lpassword'],"user");
     // if($i==1){
       // echo '<script type="text/javascript"> window.location = "Citizen_Home.php" </script>';
          
              @$usernamel=$_POST['lemail'];
             @$passwordl=$_POST['lpassword'];
                $query ="SELECT * FROM `citizen` WHERE email='$usernamel' and password='$passwordl'";
               $query_run=mysqli_query($connection,$query);
              if($query_run)
               {
                   if(mysqli_num_rows($query_run)>0)  
                  {
                $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                       $_SESSION['user_idl'] = $_POST['lemail'];
					$_SESSION['user_passwordl'] = $_POST['lpassword'];
                                  header("Location:login.php");
              }
              else{
                     echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                  
              }
              
              
      }
    }
    else{
  
    }
    unset($_POST);
  ?>

   <div class="loginform">
      <h2>Welcome to Dhaka City Management </h2>
         <form action="new.php" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="lemail" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="lpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>
          
      </form>
       
       <div class="reg"><a href="signup.php" class=".btn-reg">Sign-up</a></div> 
           <div class="stf"><a href="stufflogin.php" class=".btn-stf">Admin login</a></div>
   </div>
       
     
    </div>
    
    
    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" href src="bootstrap.min.js">
    </script>
    <script src="js/aos.js"></script>
    <script src="js/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'js/config.json', function() {
  console.log('particle js loades succesfully');
});
    </script>
</body>
</html>