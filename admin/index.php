<?php
 ob_start();
 session_start();
 if(!isset($_SESSION["login"])){
     header("location: login.php");
 }
include ("../config/connection.php");
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

         <link href='assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href='assets/vendor/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
        <title>Nhà sách y dược - Admin</title>
         <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <!-- header -->
        <?php include("modules/header.php"); ?>
        <div class="dashboard-main-wrapper">
            <!-- nav -->
            <?php include("modules/nav-left.php"); ?>
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <!-- main -->
                    <?php
                    if (isset($_GET["module"])) {
                        $module = $_GET["module"];
                        include("modules/" . $module . ".php");
                    } else {
                        include("modules/home.php");
                    }
                    ?>
                </div>
            </div>
        </div>
         <!-- footer -->
                <?php include("modules/footer.php"); ?>

            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
            <!-- chart chartist js -->
            <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
            <!-- sparkline js -->
            <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
            <!-- morris js -->
            <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
            <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
            <!-- chart c3 js -->
            <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
            <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
            <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
            <script src="assets/libs/js/dashboard-ecommerce.js"></script>
          
    <script src='assets/vendor/full-calendar/js/moment.min.js'></script>
    <script src='assets/vendor/full-calendar/js/fullcalendar.js'></script>
    <script src='assets/vendor/full-calendar/js/jquery-ui.min.js'></script>
    <script src='assets/vendor/full-calendar/js/calendar.js'></script>
   

    
    </body>

</html>