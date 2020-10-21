<?php
   include "common.php";
    if(isset($_POST['add_data'])){
         $edit_id=$_POST['e_id'];
            $fname= $_POST['student_fname'];
            $lname= $_POST['student_lname'];
            
            $email= $_POST['student_email'];
            $gender= $_POST['student_gender'];
        
        $update_sql = "UPDATE bills set account_no='$fname',amount_of_dues='$lname',House_address='$email',Name_of_month='$gender' where id=$edit_id";
        
        if($conn->query($update_sql)){
            header("bills.php");
        }
        else{
            die($conn->error);
        }
        
    }
     $result="";
    if(isset($_GET['id'])){
        $edit_id = $_GET['id'];
        
        $select_sql="SELECT account_no,amount_of_dues,House_address,Name_of_month from bills where id=$edit_id";
        
        $result_info=$conn->query($select_sql);
        
        if($result_info->num_rows>0){
            while($row_student=$result_info->fetch_assoc()){
            
      
    
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
<body>
              <div class="wrapper" style="background-image: url('images/2.jpeg')" ;>
            <div class="inner">
                <div class="image-holder">
                    <img src="images/1.jpeg" alt="">
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <h3>Sign Up Form</h3>
                    <div class="form-group">
                       <input type="hidden" name="e_id" value="<?php echo $edit_id; ?>">
                        <input value="<?php echo $row_student['account_no'];  ?>" type="text" placeholder="Account No" name="student_fname" class="form-control" required>
                    </div>
                    
                     <div class="form-wrapper">
                    
                     <input value="<?php echo $row_student['amount_of_dues'];  ?>"  type="text" placeholder="Amounts of dues" name="student_lname" class="form-control" required>
                         </div>
                    <div class="form-wrapper">
                        <input  value="<?php echo $row_student['House_address'];  ?>"  type="text" placeholder="Age" name="student_email" class="form-control" required>
                    </div>
                    <div class="form-wrapper">
                        <input  value="<?php echo $row_student['Name_of_month'];  ?>"   type="text" placeholder="Name of month" name="student_gender" class="form-control" required>
                    
                    </div>
                  
                    <button class="btm" type="Submit" value="Submit" name="add_data">Submit</button>
                    <div class="result" style="text-align:center">
                        <?php echo $result; ?>
                    </div>

                </form>

            </div>
        </div>
</body>
</html>
<?php
}                
}else{
         header("location:bills.php");
        }            
            
}else{
        header("location:bills.php");
    }

?>

