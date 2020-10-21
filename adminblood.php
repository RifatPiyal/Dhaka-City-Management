<?php
 include "lib/connect.php";

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>About</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.css">
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
     
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <h1 class="logo">
                        <a href="index.php">
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
                                 <li><a href="admin.php">Home</a></li>
                                <li ><a href="adminabout.php">About</a></li>
                                <li lass="current"><a href="adminblood.php">Available Bloods</a></li>
                                <li><a href="adminpatient.php">Available Patients</a></li>
                                <li><a href="adminbank.php">Available Blood Bank</a></li>
                                <li><a href="adminvolunteer.php">Available Volunteers</a></li>
                                
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
        <!--=====================
          Content
======================-->
        <section id="content">
            <div class="ic">More Website Templates @ TemplateMonster.com - September22, 2014!</div>
            <div class="table table-dark">
                <table border="1" width=100%;>
                    <tr>
                        <th>Donar Name</th>
                        <th>Blood Group</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                    <?php   if($select_query->num_rows>0){         ?>
                    <?php while($data=$select_query->fetch_assoc()){ ?>
                    <tr>
                        <th>
                            <?php echo $data['first_name'] ?>
                        </th>
                        <th>
                            <?php echo $data['last_name'] ?>
                        </th>
                        <th>
                            <?php echo $data['email'] ?>
                        </th>
                        <th>
                            <?php echo $data['age'] ?>
                        </th>
                        <th>
                            <?php echo $data['gender'] ?>
                        </th>

                        <td>
                            <a href="lib/edit.php?id=<?php  echo $data['id']; ?>">Edit</a>
                            <a href="lib/delete.php?id=<?php echo $data['id'];  ?>">Delete</a>
                        </td>
             </tr>

                    <?php } ?>
                    <?php } else{  ?>
                    <tr>
                        <td colspan="6">No Records Found!</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
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
