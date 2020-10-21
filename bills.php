<?php
 include "connect.php";

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>bills</title>
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
        <!--==============================
              header
=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <h1 class="logo">
                        <a href="index.php">
          Dhaka
          <span>City Management</span>
        </a>
                    </h1>
                </div>
                <div class="clear"></div>
            </div>

-->
        </header>
        <!--=====================
          Content
======================-->
        <section id="content">
            <div class="ic">
                <h1>Available Paid Bills</h1>
            </div>
            <div class="table table-dark">
                <table border="1" width=100%;>
                    <tr>
                        <th>Account No</th>
                        <th>Type of Bills</th>
                        <th>Amount of Dues</th>
                        <th>House address</th>
                        <th>Name of Month</th>
                      
               <th>Action</th>
                    </tr>
                    <?php   if($select_query->num_rows>0){         ?>
                    <?php while($data=$select_query->fetch_assoc()){ ?>
                    <tr>
                        <th>
                            <?php echo $data['account_no'] ?>
                        </th>
                        <th>
                            <?php echo $data['typeofbills'] ?>
                        </th>
                        <th>
                            <?php echo $data['amount_of_dues'] ?>
                        </th>
                        <th>
                            <?php echo $data['House_address'] ?>
                        </th>
                        <th>
                            <?php echo $data['name_of_month'] ?>
                        </th>
                       

                        <th>
                            <a href="edit.php?id=<?php  echo $data['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];  ?>">Delete</a>
                        </th>

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
  
        <a href="#" id="toTop" class="fa fa-angle-up"></a>
    </body>

    </html>