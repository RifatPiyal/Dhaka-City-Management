<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<?php 
  include("library.php");
  noAccessIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Citizen</title>
    <title>Admin_login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/1ststyle.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    
<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>

<body>
   <div class="body_wrapper">
    <div class="container-fluid ">
        <div class="row cover_img">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="pro_icon">
                    <img src="https://s33.postimg.cc/oqth6zglb/savar-upazila-map-dhaka-district-bangladesh.gif" alt="" style="    height: 150px;
    width: 150px;">
                </div>


            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h1 style="margin-top: 75px;font-family:'Roboto Mono', monospace; font-weight: bold;">
                 <?php
                 $emailu= $_SESSION['user_idl'];
  $query ="SELECT fullname FROM `citizen` WHERE email='$emailu' ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   @$fullname=$row[fullname];
   echo "$fullname";
      
                    ?>
                
                
                
               , Welcome to Dhaka City</h1>


            </div>


        </div>


        <nav class="navbar navbar-expand-lg navbar-light bg-light doctors_menu">
            <a class="navbar-brand custom_navbar-brand " style="margin-left: 30px; color:grey !important;" href="#">Citizen</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom_nav">

                       <li class="nav-item active form_text_edit">
                          
                              <a class="text-center" style="font-size= 25px !important;"href="#profile">Profile</a><br>
    
    <br>
      </li>
                    
                    
                    
                    
                    
                    <li class="nav-item">
                                
       <a class="text-center" href="history.html" target="_blank">Historical Information</a><br> 
        
    
                    </li>
                    
                    
                    
                    <li class="nav-item">
                                      
      <a class="text-center" href="traffic2.html" target="_blank">Traffic Alert</a>
       
        
        
   
                    </li>
                        <li class="nav-item">
                                
       <a class="text-center" href="Addbills.php" target="_blank">Bills</a><br> 
        
    
                    </li>
                    
                            <li class="nav-item">
                                
       <a class="text-center" href="faq.html" target="_blank">FAQ</a><br> 
        
    
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">

        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

        </div>


    </div>
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 body_wrapper2">
            <div class="row">
               <h1 style="margin-top: 75px;font-family:'Roboto Mono', monospace; color: white; font-weight: bold;text-align: center " id="pd">Dhaka City Details</h1>
               
               <p style="font-size: 30px;
               color: white !important; margin: 40px 0; color:black !important;">

                   <strong>Dhaka</strong> formerly known as Dacca which is the capital and largest city of Bangladesh. It is one of the world's largest cities, with a population of 18.89 million people in the Greater Dhaka Area.It is also the 4th most densely populated city in the world. Dhaka is the economic, political and cultural center of Bangladesh. It is one of the major cities of South Asia, the largest city in Eastern South Asia and among the Bay of Bengal countries; and one of the largest cities among OIC countries. As part of the Bengal plain, the city is bounded by the Buriganga River, Turag River, Dhaleshwari River and Shitalakshya River. The city is located in an eponymous district and division
                   
                   
         
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div  data-aos="fade-down" class="today_payment">
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
<!--
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                 <div  data-aos="fade-down" class="today_payment" style="padding-bottom: 45px;">
                  <h2 style="text-align: center">Blood needed</h2>
                  <h3 style="text-align: center"> </h3><span  class="pay_count text-center">25+</span>
                  <h3 style="text-align: center">Manage Blood</h3><span class="pay_count">10+</span>
                
                    
                </div>

                </div>
-->
           


        </div>



    </div>

    </div>
    <div class="row">
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

</div>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
 <h1 style="margin-top: 75px;font-family:'Roboto Mono', monospace;text-align: center;  background:#ffffff80" id="profile">Profile</h1>
  <div class="row">

<div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">
       <div class="row">
          <table class='table table-striped text-center ' style="margin-left= 85px;">
  <thead class="thead-inverse custom_thrad">
				<tr>
				<th><center>Email</center></th>
				<th><center>Password</center></th>
				<th><center>Fullname</center></th>
				</tr>
				
	</thead>
	
	
	<?php
              $email=$_SESSION['user_idl'];
    
              
              
               $emailu= $_SESSION['user_idl'];
  $query ="SELECT email,password,fullname FROM `citizen` WHERE email='$emailu' ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
              
              
  
    {
        echo '<tr>';
         echo '<td>'.$row['email'].'</td>';
         echo '<td>'.$row['password'].'</td>';
         echo '<td>'.$row['fullname'].'</td>';
    
        echo '</tr>';
            
            
            
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
           </table>
           
       </div>
       <div class="row">
           
       </div>
       <div class="row">
           
       </div>
</div>


</div>

 

</div>
       </div>


</div>






    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    <script>
        AOS.init();
    </script>
</body>

</html>
