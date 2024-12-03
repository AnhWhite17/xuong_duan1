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
                <!-- <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div> -->
                <!-- /preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
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
                            <div class="main-content-wrap">
                                <div class="wg-box">
                                    <?php
                                    if (isset($_SESSION['message'])) {
                                        echo "<h4>" . $_SESSION['message'] . "</h4>";
                                        unset($_SESSION['message']);
                                    }
                                    if (isset($_SESSION['error'])) {
                                        echo "<h4>" . $_SESSION['error'] . "</h4>";
                                        unset($_SESSION['error']);
                                    }
                                    ?>
                                    <div class="title-box">
                                        Add Product
                                    </div>
                                    <form method="post" action="<?php BASE_URL ?>?role=admin&act=create-product" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name_product">Name Product:</label>
                                            <input type="text" name="name_product" id="name_product" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="sale_price">Price Sale:</label>
                                            <input type="number" name="sale_price" id="sale_price" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price:</label>
                                            <input type="number" name="price" id="price" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Main photo (Only one photo can be selected):</label>
                                            <input type="file" name="img" id="img" class="form-control"><br>
                                            <label for="additional_images">Add sub photo (Multiple photos can be selected):</label><br>
                                            <input type="file" name="additional_images[]" class="form-control" multiple>
                                        </div>

                                        <div class="form-group">
                                            <label for="describe">Describe:</label>
                                            <textarea name="describe" id="describe" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="size">Size:</label>
                                            <input type="text" name="size" id="size" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity:</label>
                                            <input type="number" name="quantity" id="quantity" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Category:</label>
                                            <select name="catalog" id="catalog">
                                                <?php foreach ($catalogs as $key => $value): ?>
                                                    <option value="<?= $value->id_catalog ?>"><?= $value->name_catalog ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?php if (!empty($error)): ?>
                                            <div class="alert alert-danger"><?= $error ?></div>
                                        <?php endif; ?>
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                        <a href="?role=admin&act=product" class="btn btn-secondary">Exit</a>
                                    </form>
                                </div>
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