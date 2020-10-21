<?php
    include "lib/connection.php";
    $result="";
      //insert query
        if(isset($_POST['add_data'])){
            $fname= $_POST['student_fname'];
            $lname= $_POST['student_lname'];
            $age= $_POST['student_age'];
            $email= $_POST['student_email'];
            $gender= $_POST['student_gender'];
            $pass= md5($_POST['student_pass']);
            $confirm= md5($_POST['student_confirm']);
              
            if($pass==$confirm){
            
            $insert_sql= "INSERT INTO patient_info (pfirst_name,plast_name,page,pemail,pgender,ppass) values ('$fname','$lname',$age,'$email','$gender','$pass')";
            if (strlen($pass)<6){
                  $result= "Password should be atleast 6 characters!";
              } 
                else{
                      if($conn->query($insert_sql)){
                $result="Successfully Submitted!";
              }
                      else{
                        die($conn->error);
                        }
                }
          
           }
           else{
           $result= "Password didn't match!Try again";
           }
    }

    //select query
    
    $select_sql="SELECT * FROM patient_info";
    $select_query=$conn->query($select_sql);
    
    //echo $select_query->num_rows;
        
    
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fform.css">
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/script.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
        <script src="js/tmStickUp.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script>
            $(window).load(function() {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
                $('#stuck_container').tmStickUp({});
            });

        </script>
    </head>

    <body class="" id="top">
        <!--==============================
              header
=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <h1 class="logo">
                        <a href="index.html">
          Youth
          <span>For BLood</span>
        </a>
                    </h1>
                </div>
                <div class="clear"></div>
            </div>
            <section id="stuck_container">
                <!--==============================
              Stuck menu
  =================================-->
                <div class="container_12">
                    <div class="grid_12">
                        <div class="navigation ">
                            <nav>
                                <ul class="sf-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="blood.php">Available Bloods</a></li>
                                    <li><a href="patient.php">Available Patients</a></li>
                                    <li><a href="bank.php">Available Blood Bank</a></li>
                                    <li><a href="signup.php">Be A donar</a></li>
                                    <li class="current"><a href="addpatient.php">Add Patients</a></li>
                                    <li><a href="addbank.php">Add Blood Bank </a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="login.php">Login as Admin</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </header>

        <div class="wrapper" style="background-image: url('images/2.jpeg')" ;>
            <div class="inner">
                <div class="image-holder">
                    <img src="images/1.jpeg" alt="">
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <h3>Patient Sign Up Form</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Patient Name" name="student_fname" class="form-control" required>
                        <input type="text" placeholder="Blood Group" name="student_lname" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Age" name="student_age" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Email Address" name="student_email" class="form-control" required>
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <select name="student_gender" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Password" name="student_pass" class="form-control" required>
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Confirm Password" name="student_confirm" class="form-control" required>
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <button class="btm" type="Submit" value="Submit" name="add_data">Submit</button>
                    <div class="result" style="text-align:center">
                        <?php echo $result; ?>
                    </div>

                </form>

            </div>
        </div>

        <!--==============================
              footer
=================================-->
        <footer id="footer">
            <div class="container_12">
                <div class="grid_12">
                    <h1 class="logo">
                        <a href="index.html">
          YFB
        </a>
                    </h1>
                    <div class="socials">
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                    </div>
                    <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">WebSolution</a></div>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        <a href="#" id="toTop" class="fa fa-angle-up"></a>










    </body>

    </html>
