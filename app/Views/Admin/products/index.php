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
                                    <div class="title-box">
                                        All Product
                                    </div>
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <div class="show">
                                                <div class="text-tiny">Showing</div>
                                                <div class="select">
                                                    <select class="">
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                    </select>
                                                </div>
                                                <div class="text-tiny">entries</div>
                                            </div>
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="<?php BASE_URL ?>?role=admin&act=form-create-product"><i class="icon-plus"></i>Add new</a>
                                    </div>
                                    <div class="wg-table table-product-list">
                                        <ul class="table-title flex mb-14">
                                            <li>
                                                <div class="body-title">STT</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Id</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Name</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Category</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Sale</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Price</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Image</div>
                                            </li>
                                            <li>
                                                <div class="body-title" style="min-width: 100px;">Describe</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Size</div>
                                            </li>
                                            <li>
                                                <div class="body-title" style="margin: 0 14px;">Quantity</div>
                                            </li>
                                            <li>
                                                <div class="body-title" style="margin: 0 14px;">Number views</div>
                                            </li>
                                            <li>
                                                <div class="body-title" style="margin: 0 14px;">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            <?php
                                            foreach ($products as $product => $value): ?>
                                                <li class="wg-product item-row">
                                                    <div class="body-text text-main-dark mt-4" style=""><?= $product + 1 ?></div>
                                                    <div class="body-text text-main-dark mt-4"><?= $value->id_product  ?></div>
                                                    <div class="body-text text-main-dark mt-4"><?= $value->name_product ?></div>
                                                    <div class="body-text text-main-dark mt-4"><?= $value->catalogName ?></div>
                                                    <div class="body-text text-danger mt-4"><?= $value->sale_price . " VNĐ" ?></div>
                                                    <div class="body-text text-main-dark mt-4"><?= $value->price . " VNĐ" ?></div>
                                                    <div class="body-text text-main-dark mt-4"><img src="<?= $value->img ?>" alt="" style="max-width: 150px; height: auto;"></div>
                                                    <div class="body-text text-main-dark mt-4" style="min-width: 100px;"><?= $value->describe ?></div>
                                                    <div class="body-text text-main-dark mt-4" style="margin: 0 14px; min-width: 10px;"><?= $value->size ?></div>
                                                    <div class="body-text text-main-dark mt-4" style="margin: 0 20px; min-width: 10px;"><?= $value->quantity ?></div>
                                                    <div class="body-text text-main-dark mt-4" style="margin: 0 35px; min-width: 10px;"><?= $value->number_views ?></div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye" style="margin: 0 10px;">
                                                            <a href="<?php BASE_URL ?>?role=admin&act=show-product&id=<?= $value->id_product ?>">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </div>
                                                        <div class="item edit">
                                                            <a href="<?php BASE_URL ?>?role=admin&act=update-product&id=<?= $value->id_product ?>">
                                                                <i class="icon-edit-3"></i>
                                                            </a>
                                                        </div>
                                                        <div class="item trash">
                                                            <a href="<?php BASE_URL ?>?role=admin&act=delete-product&id=<?= $value->id_product ?>"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa Sản phẩm <?= $value->name_product ?>?');">
                                                                <i class="icon-trash-2"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 entries</div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
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