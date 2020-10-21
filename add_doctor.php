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

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">



                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light admin_nav">
                        <a class="navbar-brand" href="#">Admin Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Add Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Add Clerks</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Message
        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">To Doctors</a>
                                        <a class="dropdown-item" href="#">To Clerks</a>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="delete_doctor.php">Delete Doctor</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="delete_clerk.php">Delete Clerk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="add_notice.php">Notice Board</a>
                                </li>

                            </ul>

                        </div>
                    </nav>
                    <?php 
    if(isset($_POST['demail'])){
      $i = register($_POST['demail'],$_POST['dpassword'],$_POST['dfullname'],$_POST['dSpecialist'],"doctors");
    }
    ?>

                    <form method="post" action="add_doctor.php">
                        <h2>Doctor Registration</h2>
                        <div class="form-group">
                            <label for="usr">Full Name:</label>
                            <input type="text" class="form-control" name="dfullname" required>
                        </div>

                        <div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="email" class="form-control" name="demail" required>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="dpassword" required>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Speciality:</label>
                            <select class='form-control' required value=1 name="dSpecialist">
              <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
              <option value="Allergist" class="option">Allergist - Allergy Expert</option>
              <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
              <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
              <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
              <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
              <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register">
                            <input type="reset" name="" class="btn btn-danger">
                        </div>
                    </form>


                </div>



            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

            </div>



        </div>

    </div>







    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
</body>

</html>
