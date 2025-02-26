<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-header">
                    <a href="<?php BASE_URL ?>?role=user&act=home" class="logo">
                        <img src="asset/Admin/images/logo/logoMamMam.png" alt="logo" style="width: 50px;" class="light-logo">
                        <img src="asset/Admin/images/logo/logoMamMam.png" alt="logo" style="width: 50px;" class="dark-logo">
                    </a>
                    <form class="cr-search" method="get" action="?act=search">
                        <input class="search-input" type="text" name="name" placeholder="Search For items...">
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option value="" selected>All Categories</option>
                            <?php foreach ($categories as $category => $value): ?>
                                <option value="<?= $value->id_catalog ?>"><?= $value->name_catalog ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>

                    <div class="cr-right-bar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                    <i class="ri-user-3-line"></i>
                                    <span>Account</span>
                                </a>
                                <ul class="dropdown-menu">
                                <?php
$user = $_SESSION['users'] ?? null; // Lấy user từ session, nếu không có thì null
?>
<?php if(isset($_SESSION['users'])){ ?>
                                    <li>
                                    <span class="dropdown-item">👦🏼<?= $_SESSION['users']['user'] ?></span>
                                        
                                    </li>
                                    <?php } ?>
                                    <?php
$role = $_SESSION['users']['role'] ?? null; // Lấy role từ session, nếu không có thì null
?>
                                    <?php if($role == 1){ ?>
                                    <li>
                                        <a class="dropdown-item" href="<?=BASE_URL?>?role=admin&act=home">Move to Admin</a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a class="dropdown-item" href="<?=BASE_URL?>?role=admin&act=login">Login</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="wishlist.html" class="cr-right-bar-item">
                            <i class="ri-heart-3-line"></i>
                            <span>Wishlist</span>
                        </a>
                        <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                            <i class="ri-shopping-cart-line"></i>
                            <span>Cart</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cr-fix" id="cr-main-menu-desk">
        <div class="container">
            <div class="cr-menu-list">
                <div class="cr-category-icon-block">
                    <div class="cr-category-menu">
                        <div class="cr-category-toggle">
                            <i class="ri-menu-2-line"></i>
                        </div>
                    </div>
                    <div class="cr-cat-dropdown">
                        <div class="cr-cat-block">
                            <div class="cr-cat-tab">
                                <div class="cr-tab-list nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">
                                        Dairy &amp; Bakery</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                        Fruits &amp; Vegetable</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                                        Snack &amp; Spice</button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                        Juice &amp; Drinks </button>
                                    <a class="nav-link" href="shop-left-sidebar.html">
                                        View All </a>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Dairy</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Milk</a></li>
                                                    <li><a href="shop-left-sidebar.html">Ice cream</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cheese</a></li>
                                                    <li><a href="shop-left-sidebar.html">Frozen
                                                            custard</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Frozen
                                                            yogurt</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Bakery</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cake and
                                                            Pastry</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Rusk Toast</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bread &amp;
                                                            Buns</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Chocolate
                                                            Brownie</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cream Roll</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Fruits</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bell
                                                            Peppers</a></li>
                                                    <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Vegetable</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bell
                                                            Peppers</a></li>
                                                    <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Snacks</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">French
                                                            fries</a></li>
                                                    <li><a href="shop-left-sidebar.html">potato
                                                            chips</a></li>
                                                    <li><a href="shop-left-sidebar.html">Biscuits &amp;
                                                            Cookies</a></li>
                                                    <li><a href="shop-left-sidebar.html">Popcorn</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Rice Cakes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Spice</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cinnamon
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cumin
                                                            Powder</a></li>
                                                    <li><a href="shop-left-sidebar.html">Fenugreek
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Pepper
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Long Pepper</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Juice</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Mango Juice</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Coconut
                                                            Water</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tetra Pack</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Apple
                                                            Juices</a></li>
                                                    <li><a href="shop-left-sidebar.html">Lychee
                                                            Juice</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">soft drink</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Breizh Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Green Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Jolt Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Mecca Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Topsia Cola</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <a href="javascript:void(0)" class="navbar-toggler shadow-none">
                        <i class="ri-menu-3-line"></i>
                    </a>
                    <div class="cr-header-buttons">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="ri-user-3-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?=BASE_URL?>?role=admin&act=login">Login</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="wishlist.html" class="cr-right-bar-item">
                            <i class="ri-heart-line"></i>
                        </a>
                        <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php BASE_URL ?>?role=user&act=home">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Category
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($categories as $category => $value): ?>
                                        <li><a class="dropdown-item" href="?act=<?= $value->id_catalog ?>"><?= $value->name_catalog ?> </a></li>
                                    <?php endforeach; ?>


                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Products
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if (!empty($getAllProducts)) { ?>
                                        <?php foreach ($getAllProducts as $value) { ?>
                                            <li><a href="product-left-sidebar.html"><?= htmlspecialchars($value['name_product']) ?> </a></li>
                                        <?php } ?>

                                    <?php } ?>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="cart.html">Cart</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="track-order.html">Track Order</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="faq.html">Faq</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?=BASE_URL?>?role=admin&act=login">Login</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="policy.html">Policy</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-left-sidebar.html">Left
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-right-sidebar.html">Right
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-full-width.html">Full
                                            Width</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-detail-left-sidebar.html">Detail
                                            Left
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-detail-right-sidebar.html">Detail
                                            Right
                                            Sidebar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-detail-full-width.html">Detail
                                            Full
                                            Width</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)">
                                    Elements
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="elements-products.html">Products</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="elements-typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="elements-buttons.html">Buttons</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="cr-calling">
                    <i class="ri-phone-line"></i>
                    <a href="javascript:void(0)">+123 ( 456 ) ( 7890 )</a>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Mobile menu -->
<div class="cr-sidebar-overlay"></div>
<div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu">
    <div class="cr-menu-title">
        <span class="menu-title">My Menu</span>
        <button type="button" class="cr-close">×</button>
    </div>
    <div class="cr-menu-inner">
        <div class="cr-menu-content">
            <ul>
                <li class="dropdown drop-list">
                    <a href="<?php BASE_URL ?>?role=user&act=home">Home</a>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)" class="dropdown-list">Category</a>

                    <ul class="sub-menu">
                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                        <li><a href="shop-full-width.html">Full Width</a></li>
                    </ul>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>

                    <a href="javascript:void(0)" class="dropdown-list">sản phẩm</a>
                    <ul class="sub-menu">
                        <?php if (!empty($getAllProducts)) { ?>
                            <?php foreach ($getAllProducts as $value) { ?>
                                <li><a href="product-left-sidebar.html"><?= htmlspecialchars($value['name_product']) ?> </a></li>
                            <?php } ?>
                            <li><a href="product-left-sidebar.html">product Left sidebar</a></li>
                            <li><a href="product-right-sidebar.html">product Right sidebar</a></li>
                            <li><a href="product-full-width.html">Product Full Width </a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)" class="dropdown-list">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="track-order.html">Track Order</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="<?=BASE_URL?>?role=admin&act=login">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="policy.html">Policy</a></li>
                    </ul>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)" class="dropdown-list">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="blog-full-width.html">Full Width</a></li>
                        <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                        <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                        <li><a href="blog-detail-full-width.html">Detail Full Width</a></li>
                    </ul>
                </li>
                <li class="dropdown drop-list">
                    <span class="menu-toggle"></span>
                    <a href="javascript:void(0)">Element</a>
                    <ul class="sub-menu">
                        <li><a href="elements-products.html">Products</a></li>
                        <li><a href="elements-typography.html">Typography</a></li>
                        <li><a href="elements-buttons.html">Buttons</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>