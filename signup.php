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
    <div id="particles-js" style="background-image: url('images/bg.jpg' );" >
      <?php 
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],"citizen");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      
    }
    unset($_POST);
  ?>
   <div class="loginform">
      <h2>Welcome to Dhaka City</h2>
         <h2>Registration</h2>
          <form method="post" action="signup.php">
	    
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
       <div class="reg"><a href="new.php" class=".btn-reg">log in</a></div> 
           <div class="stf"><a href="" class=".btn-stf">Stuff login</a></div>
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