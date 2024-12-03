<!-- Product banner -->
<section class="section-product-banner padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-banner-slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php if (!empty($getAllProducts)): ?>
                            <?php foreach ($getAllProducts as $product): ?>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="cr-product-banner-image">
                                        <img src="<?= $product['img'] ?>" alt="<?= htmlspecialchars($product['name_product']) ?>">
                                        <div class="cr-product-banner-contain">
                                            <h5>
                                                <?= htmlspecialchars($product['name_product']) ?>
                                                <br>
                                                <?= htmlspecialchars($product['size']) ?>
                                            </h5>
                                            <p>
                                                <span class="percent"><?= number_format($product['sale_price'] / $product['price'] * 100, 0) ?>%</span>
                                                Off <span class="text">on first order</span>
                                            </p>
                                            <div class="cr-product-banner-buttons">
                                                <a href="<?= BASE_URL ?>?act=product-detail&id_product=<?= htmlspecialchars($product['id_product'])?>" class="cr-button">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>