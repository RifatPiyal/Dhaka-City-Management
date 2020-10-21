<?php
session_start();
?>
<?php 
 
  include("library.php");
  noAccessIfLoggedIn();
?>

<!DOCTY
PE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    <div id="particles-js"  style="background-image: url('images/bg.jpg' );">
      <?php
      if (isset($_POST['email'])){
          if($_POST['type']=='admin'){
              
              @$usernamel=$_POST['email'];
             @$passwordl=$_POST['password'];
                $query ="SELECT * FROM `admin` WHERE email='$usernamel' and password='$passwordl'";
               $query_run=mysqli_query($connection,$query);
              if($query_run)
               {
                   if(mysqli_num_rows($query_run)>0)  
                  {
                $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                       $_SESSION['user_idl'] = $_POST['email'];
					$_SESSION['user_passwordl'] = $_POST['password'];
                                  header("Location:index.php");
              }
              else{
                     echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                  
              }
              
              
             
          }
                else
                            {
                                echo '<script type="text/javascript">alert("Database Error")</script>';
                            }
                            
              
          }
        else{
         @$usernamel=$_POST['email'];
             @$passwordl=$_POST['password'];
                $query ="SELECT * FROM `volunteer` WHERE email='$usernamel' and password='$passwordl'";
               $query_run=mysqli_query($connection,$query);
              if($query_run)
               {
                   if(mysqli_num_rows($query_run)>0)  
                  {
                $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                       $_SESSION['user_idl'] = $_POST['email'];
					$_SESSION['user_passwordl'] = $_POST['password'];
                                  header("Location:Volunteer.html");
              }
              else{
                     echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                  
              }
              
        }
        }
      }
    ?>
   <div class="loginform">
      <h2>Welcome to Dhaka city</h2>
            <form action="stufflogin.php" method="POST">
        <div class="form-group">
          <label for="usr">Username:</label>
          <input type="text" class="form-control" name="email" style="width: 500;" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" style="width: 500;" required>
        </div>
        <div class="form-group">
          <label for="pwd">User Type:</label>
          <select required value=1 class ='form-control' name="type" style="width: 500;">
                <option value="admin" class="option">Admin</option>
                <option value="volunteer" class="option">Volunteer</option>
          </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" name="" class="btn btn-danger">
        </div>
          
      </form>
       
       <div class="reg"><a href="signup.php" class=".btn-reg">Sign-up</a></div> 
           <div class="stf"><a href="new.php" class=".btn-stf">Login</a></div>
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