<?php
    include "common.php";
    $result="";
      //insert query
        if(isset($_POST['add_data'])){
            $fname= $_POST['student_fname'];
            $type= $_POST['student_type'];
            $lname= $_POST['student_lname'];
            
            $email= $_POST['student_email'];
            $gender= $_POST['student_gender'];
          
              
                $insert_sql= "INSERT INTO bills (account_no,amount_of_dues,House_address,Name_of_month,typeofbills) values ('$fname','$lname','$email','$gender','$type')";
     
             
                      if($conn->query($insert_sql)){
                $result="Successfully Submitted!";
              }
                      else{
                        die($conn->error);
                        }
               
          
       
    }

    //select query
    
    $select_sql="SELECT * FROM bills";
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
                        <a href="login.php">
          HOME
          <span></span>
        </a>
                    </h1>
                </div>
                <div class="clear"></div>
            </div>
           
        </header>

        <div class="wrapper" style="background-image: url('images/2.jpeg')" ;>
            <div class="inner">
                <div class="image-holder">
                    <img src="images/1.jpeg" alt="">
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <h3>bill payment Form</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Account No" name="student_fname" class="form-control" required>
                      <input type="text" placeholder="Type of Bill" name="student_type" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Amount of Dues" name="student_lname" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="House No" name="student_email" class="form-control" required>
              
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Name of Month " name="student_gender" class="form-control" required>
                    </div>
                 
                    <button class="btm" type="Submit" value="Submit" name="add_data">Submit</button>
                    <div class="result" style="text-align:center">
                        <?php echo $result; ?>
                    </div>

                </form>

            </div>
        </div>

<!--
        ==============================
              footer
=================================
        <footer id="footer">
            <div class="container_12">
                <div class="grid_12">
                    <h1 class="logo">
                        <a href="login.php">
          dcm
        </a>
                    </h1>
                
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        <a href="#" id="toTop" class="fa fa-angle-up"></a>
-->










    </body>

    </html>
