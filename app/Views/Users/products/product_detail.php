<!-- ========================================================= 
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
 ============================================================-->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:29:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce HTML Template.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Măm Măm HTML Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="asset/Admin/images/logo/logoMamMam.png">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="asset/Users/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/remixicon.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="asset/Users/css/vendor/animate.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/aos.min.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/range-slider.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="asset/Users/css/vendor/slick-theme.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="asset/Users/css/style.css">
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <?php include 'app/Views/Users/layouts/header.php'; ?>

    <!-- Container -->
    <section class="section-product padding-t-100">
        <div class="container">
            <div class="row mb-minus-24 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-for slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" role="listbox" style="opacity: 1; width: 3328px;">
                                        <div class="slider-banner-image slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 416px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                            <div class="zoom-image-hover" style="position: relative; overflow: hidden;">
                                                <img src="<?= $product->img ?>" alt="product-tab-1" class="product-image">
                                                <img role="presentation" alt="" src="<?= $product->img ?>" class="zoomImg" style="position: absolute; top: -84.4808px; left: -97.4846px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                            </div>
                                        </div>
                                        <div class="slider-banner-image slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 416px; position: relative; left: -416px; top: 0px; z-index: 998; opacity: 0;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider slider-nav thumb-image slick-initialized slick-slider">
                                <?php foreach ($subImage as $key => $value) : ?>
                                    <div aria-live="polite" class="slick-list draggable">
                                        <div class="slick-track" role="listbox">
                                            <div class="thumbnail-image slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" tabindex="-1" style="width: 86px;">
                                                <div class="thumbImg">
                                                    <img src="<?= $value->name_img ?>" alt="product-tab-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading"><?= $product->name_product ?></h2>
                        <p><?= $product->describe ?></p>
                    </div>
                    <div class="cr-size-and-weight">
                        <div class="cr-review-star">
                            <div class="cr-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p><?= $product->number_views ?> views</p>
                        </div>

                        <div class="cr-product-price">
                            <span class="new-price"><?= number_format($product->sale_price) ?> VNĐ</span>
                            <span class="old-price"><?= number_format($product->price) ?> VNĐ</span>
                        </div>
                        <div class="cr-size-weight">
                            <h5><span>Size</span> :</h5>
                            <div class="cr-kg">
                                <ul>
                                    <li class="active-color"><?= $product->size ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cr-add-card">
                            <div class="cr-qty-main">
                                <input type="text" value="1" class="quantity">
                                <button type="button" class="pluss">+</button>
                                <button type="button" class="minuss ">-</button>
                            </div>
                            <div class="cr-add-button">
                                <button type="button" class="cr-button cr-shopping-bag">
                                    <span>
                                        Add to cart &nbsp;
                                    </span>
                                    <span class="total-price">
                                        <?= $product->sale_price != null ? number_format($product->sale_price) : number_format($product->price) ?>VNĐ
                                    </span>
                                </button>
                            </div>
                            <div class="cr-card-icon">
                                <a href="javascript:void(0)" class="wishlist">
                                    <i class="ri-heart-line"></i>
                                </a>
                                <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                    <i class="ri-eye-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cr-add-button mt-3">
                            <a href="<?= BASE_URL ?>?act=checkout">
                                <button type="button" class="cr-button">
                                    <span>
                                        Buy Now
                                    </span>
                                </button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-12">
                    <div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false" tabindex="-1">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p><?= $product->describe ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <div class="post">
                                        <div class="content">
                                            <img src="" alt="review">
                                            <div class="details">
                                                <span class="date">Jan 08, 2024</span>
                                                <span class="name">Oreo Noman</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                            adipisci vel
                                            perferendis dolor! quae vero in perferendis provident quis.</p>
                                        <div class="content mt-30">
                                            <img src="" alt="review">
                                            <div class="details">
                                                <span class="date">Mar 22, 2024</span>
                                                <span class="name">Lina Wilson</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                            adipisci vel
                                            perferendis dolor! quae vero in perferendis provident quis.</p>
                                    </div>

                                    <h4 class="heading">Add a Review</h4>
                                    <form action="javascript:void(0)">
                                        <div class="cr-ratting-star">
                                            <span>Your rating :</span>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-name" placeholder="Name" type="text">
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-email" placeholder="Email*" type="email" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let price = "<?= $product->sale_price != null ? $product->sale_price : $product->price ?>"
        price = Number(price)
        document.querySelector(".pluss").addEventListener("click", function (){
            let quantity = document.querySelector(".quantity")
                quantity.value = Number(quantity.value) + 1
                let total = price * Number(quantity.value)
                document.querySelector('.total-price').textContent = total.toLocaleString() + "VNĐ"
        })
        document.querySelector(".minuss").addEventListener("click", function (){
            let quantity = document.querySelector(".quantity")
            if (Number(quantity.value) > 1) {
            quantity.value = Number(quantity.value) - 1
            let total = price * Number(quantity.value)
            document.querySelector('.total-price').textContent = total.toLocaleString() + "VNĐ"
        }
        })
    </script>
    
<!-- Cart -->
<div class="cr-cart-overlay"></div>
    <div class="cr-cart-view">
        <div class="cr-cart-inner">
            <div class="cr-cart-top">
                <div class="cr-cart-title">
                    <h6>My Cart</h6>
                    <button type="button" class="close-cart">×</button>
                </div>
                <ul class="crcart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src=""
                                alt="product-1"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Fresh Pomegranate</a>
                            <span class="cart-price"><span>$56.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src=""
                                alt="product-2"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Green Apples</a>
                            <span class="cart-price"><span>$75.00</span> x 1kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="crside_pro_img"><img src=""
                                alt="product-3"></a>
                        <div class="cr-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Watermelon - Small</a>
                            <span class="cart-price"><span>$48.00</span> x 5kg</span>
                            <div class="cr-cart-qty">
                                <div class="cart-qty-plus-minus">
                                    <button type="button" class="plus">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" class="minus">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cr-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="cr-button">View Cart</a>
                    <a href="checkout.html" class="cr-btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- product_banner -->
    <?php include 'app/Views/Users/layouts/Product_banner.php'; ?>

    <!-- Footer -->
    <?php include 'app/Views/Users/layouts/footer.php'; ?>

    <!-- Vendor Custom -->
    <script src="asset/Users/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="asset/Users/js/vendor/jquery.zoom.min.js"></script>
    <script src="asset/Users/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="asset/Users/js/vendor/mixitup.min.js"></script>

    <script src="asset/Users/js/vendor/range-slider.js"></script>
    <script src="asset/Users/js/vendor/aos.min.js"></script>
    <script src="asset/Users/js/vendor/swiper-bundle.min.js"></script>
    <script src="asset/Users/js/vendor/slick.min.js"></script>

    <!-- Main Custom -->
    <script src="asset/Users/js/main.js"></script>
   
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:08 GMT -->

</html>