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
          
              
            if($pass==$confirm){
            
            $insert_sql= "INSERT INTO bills (account_no,amount_of_dues,house_address,name_of_month,typeofbills) values (' $fname','$lname','$email','$gender','$type')";
          
                      if($conn->query($insert_sql)){
                $result="Successfully Submitted!";
              }
                      else{
                        die($conn->error);
                        }
                }
          
        
           else{
           $result= "Password didn't match!Try again";
           }
    }

    //select query
    
    $select_sql="SELECT * FROM bills";
    $select_query=$conn->query($select_sql);
    
        
    
?>