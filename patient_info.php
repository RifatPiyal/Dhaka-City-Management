<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<?php
  include 'header.php';
  include 'library.php';
  //noAccessIfNotLoggedIn();
  noAccessForNormal();
  noAccessForClerk();
  noAccessForAdmin();

  include 'nav-bar.php';
//echo "<div class='alert alert-info'>
//            <strong>Info!</strong> "$_SESSION['userId']"</div>";
?>
<div class = 'container'>
<h2>Home Page of 
                <?php
                 $emailu= $_SESSION['user_idl'];
  $query ="SELECT fullname FROM `doctors` WHERE email='$emailu' ";
   $query_run=mysqli_query($connection,$query);
    $row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
   @$fullname=$row[fullname];
   echo "$fullname";
      
                    ?>
<!--

   
    
    ?>
-->
    
</h2>
<p>Click on the the field to fill additional information</p>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>Appointment No</center></th>
				<th><center>Patient's Full Name</center></th>
				<th><center>Speciality</center></th>
				<th><center>Medical Condition</center></th>
				</tr>
				
	</thead>
	
	
	<?php
    
    $query="SELECT appointment_no, full_name,speciality, medical_condition FROM patient_info, appointments where patient_info.patient_id = appointments.patient_id and appointments.doctors_suggestion='$fullname'";
//    echo "$fullname"
   $query_run=$connection->query($query);
   // $row=mysqli_fetch_array($query_run);
   // while($row)
    while ($row = $query_run->fetch_array())
    {
        echo '<tr>';
         echo '<td>'.$row['appointment_no'].'</td>';
         echo '<td>'.$row['full_name'].'</td>';
         echo '<td>'.$row['speciality'].'</td>';
         echo '<td>'.$row['medical_condition'].'</td>';
        echo '</tr>';
            
            
            
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
<?php
    $result = getPatientsFor('Dentist');

    while ($row = $result->fetch_array()) {
        $status = ' ';
        if (appointment_status((int) $row['appointment_no']) == 1) {
            $status = 'table-active';
        } elseif (appointment_status((int) $row['appointment_no']) == 2) {
            $status = 'table-success';
        }

        $link = "<td ><a href= 'update_info.php?appointment_no=".$row['appointment_no']."'>";
        $endingTag = '</a></td>';
        echo '<tr class="'.$status.'"> ';
        echo "$link".$row['appointment_no']."$endingTag";
        echo "$link".$row['full_name']."$endingTag";
        echo "$link".$row['medical_condition']."$endingTag";
        echo '</tr>';
    }
?>
</table>
</div>
<?php include 'footer.php'; ?>
