<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:29 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Măm Măm - Ultimate Admin Dashboard HTML</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="asset/Admin/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="asset/Admin/css/animation.css">
    <link rel="stylesheet" type="text/css" href="asset/Admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/Admin/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="asset/Admin/css/styles.css">



    <!-- Font -->
    <link rel="stylesheet" href="asset/Admin/font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="asset/Admin/icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="asset/Admin/images/logo/logoMamMam.png">
    <link rel="apple-touch-icon-precomposed" href="asset/Admin/images/logo/logoMamMam.png">

</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <?php include 'app/Views/Admin/layouts/sidebar.php'; ?>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <?php include 'app/Views/Admin/layouts/header.php'; ?>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap" <?php
                            if(isset($_SESSION['message'])){
                                echo "<p>". $_SESSION['message'] ."</p>";
                                unset($_SESSION['message']);
                            }
                            
                            ?>>
                            <div class="wg-box">
                                    <div class="title-box">
                                        Add User
                                    </div>
                                    <form action="<?php BASE_URL ?>?role=admin&act=post_add_user" method="post" enctype="multipart/form-data">
                                        <div class="mb-5">
                                            <label for="user">Name</label>
                                            <input type="text" id="user" placeholder="user" name="user" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" placeholder="email" name="email" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="pass">Password</label>
                                            <input type="text" id="pass" placeholder="pass" name="pass" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" placeholder="address" name="address" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="img">Image</label>
                                            <input type="file" id="img" placeholder="img" name="img" accept="img/*" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="tel">Phone</label>
                                            <input type="text" id="tel" placeholder="tel" name="tel" class="form-control">
                                        </div>
                                        <div class="mb-5">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                <option value="" hidden>Change Role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success" name="submit">Submit</button>
                                        <?php
                                        ?>
                                    </form>
                                   
                                </div>
                                
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <?php include 'app/Views/Admin/layouts/footer.php'; ?>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="asset/Admin/js/jquery.min.js"></script>
    <script src="asset/Admin/js/bootstrap.min.js"></script>
    <script src="asset/Admin/js/bootstrap-select.min.js"></script>
    <script src="asset/Admin/js/zoom.js"></script>
    <script src="asset/Admin/js/morris.min.js"></script>
    <script src="asset/Admin/js/raphael.min.js"></script>
    <script src="asset/Admin/js/morris.js"></script>
    <script src="asset/Admin/js/jvectormap.min.js"></script>
    <script src="asset/Admin/js/jvectormap-us-lcc.js"></script>
    <script src="asset/Admin/js/jvectormap-data.js"></script>
    <script src="asset/Admin/js/jvectormap.js"></script>
    <script src="asset/Admin/js/apexcharts/apexcharts.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-1.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-2.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-3.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-4.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-5.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-6.js"></script>
    <script src="asset/Admin/js/apexcharts/line-chart-7.js"></script>
    <script src="asset/Admin/js/switcher.js"></script>
    <script defer src="asset/Admin/js/theme-settings.js"></script>
    <script src="asset/Admin/js/main.js"></script>

</body>


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:54 GMT -->
</html>