<?php if (!empty($results)): ?>
    <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
        data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Sản Phẩm Tìm Kiếm</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Đồ ăn ngon và bổ dưỡng</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-popular-product">

                        <?php foreach ($results as $product): ?>
                            <div class="slick-slide">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name_product']) ?>">
                                        </div>
                                        <div class="cr-side-view">
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                                role="button">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                        <a class="cr-shopping-bag" href="javascript:void(0)">
                                            <i class="ri-shopping-bag-line"></i>
                                        </a>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="<?= BASE_URL ?>?act=product-detail&id_product=<?= htmlspecialchars($product['id_product'])?>"> <?= $product['name_product'] ?></a>
                                            <div class="cr-star">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line"></i>
                                                <p>(4.5)</p>
                                            </div>
                                        </div>
                                        <a href="<?= BASE_URL ?>?act=product-detail&id_product=<?= htmlspecialchars($product['id_product'])?>" class="title"><?= htmlspecialchars($product['name_product']) ?></a>
                                        <p class="cr-price">
                                            <span class="new-price"><?= number_format($product['sale_price'], 0, ',', '.') ?> VND</span>
                                            <?php if (!empty($product['price']) && $product['sale_price'] < $product['price']): ?>
                                                <span class="old-price"><?= number_format($product['price'], 0, ',', '.') ?> VND</span>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>

<?php endif; ?>