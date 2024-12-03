<section class="section-popular-product-shape padding-b-100">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30">
                    <div class="cr-banner">
                        <h2>Sản Phẩm Cửa Hàng</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Chỉ cần ăn là ngon</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
            <div class="col-xl-3 col-lg-4 col-12 mb-24">
                <div class="row mb-minus-24 sticky">
                    <div class="col-lg-12 col-sm-6 col-6 cr-product-box mb-24">
                        <div class="cr-product-tabs">
                            <ul>
                                <li class="active" data-filter="all">All</li>
                                <?php
                                foreach ($categories as $category => $value1): ?>
                                    <li data-filter=".snack<?= $value1->id_catalog ?>"><?= $value1->name_catalog ?> </a></li>
                                <?php
                                    $id_danhmuc = $value1->id_catalog;
                                endforeach; ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-6 cr-product-box banner-480 mb-24">
                        <div class="cr-ice-cubes">
                            <img src="asset/Users/img/product/banner.jpg" alt="product banner">
                            <div class="cr-ice-cubes-contain">
                                <h4 class="title">Món đặc biệt</h4>
                                <h5 class="sub-title">Mì cay</h5>
                                <span>100%</span>
                                <a href="shop-left-sidebar.html" class="cr-button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-12 mb-24">
                <div class="row mb-minus-24">





                    <?php if (!empty($getAllProducts)) { ?>
                        <?php foreach ($getAllProducts as $value) { ?>

                            <?php if ($id_danhmuc = htmlspecialchars($value['id_catalog'])) { ?>
                                <div class="mix snack<?= $id_danhmuc ?> col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                <img src="<?= htmlspecialchars($value['img']) ?>" alt="<?= htmlspecialchars($value['name_product']) ?>">
                                            </div>
                                            <div class="cr-side-view">
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                                <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </div>
                                            <a class="cr-shopping-bag" href="javascript:void(0)">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <a href="<?= BASE_URL ?>?act=product-detail&id_product=<?= htmlspecialchars($value['id_product'])?>"><?= htmlspecialchars($value['name_product']) ?></a>
                                                <div class="cr-star">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                    <p>(4.5)</p>
                                                </div>
                                            </div>
                                            <a href="<?= BASE_URL ?>?act=product-detail&id_product=<?= htmlspecialchars($value['id_product'])?>" class="title"><?= htmlspecialchars($value['name_product']) ?></a>
                                            <p class="cr-price">
                                                <span class="new-price"><?= number_format($value['sale_price'], 0, ',', '.') ?> VND</span>
                                                <?php if ($value['sale_price'] < $value['price']) { ?>
                                                    <span class="old-price"><?= number_format($value['price'], 0, ',', '.') ?> VND</span>
                                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } ?>
                    <?php } else { ?>
                        <p class="text-center">Không có sản phẩm nào để hiển thị.</p>
                    <?php } ?>






                </div>
            </div>
        </div>
    </div>
</section>