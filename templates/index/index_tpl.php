<!-- QUẢNG CÁO -->
<?php if (count($quangcao)) { ?>
    <div class="wrap-content padding-top-bottom">
        <div class="owl-quangcao">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="2:10" data-lg-items="2:10" data-xlg-items="2:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($quangcao as $v) { ?>
                    <div class="box-quangcao">
                        <a class="d-block" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/586x250x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/586x250x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<!-- DANH MỤC SẢN PHẨM -->
<?php if (count($splistnb)) { ?>
    <div class="w-pronb">
        <div class="wrap-content padding-top-bottom-ed">
            <div class="slogan-prodnb">
                <span>
                    <?= $sloganSpnb['name' . $lang] ?>
                </span>
            </div>
            <div class="title-main"><span>Danh mục sản phẩm</span></div>
            <div class=" d-flex align-items-center flex-wrap ">
                <div class="dm-noibat d-flex flex-wrap align-items-center">
                    <div class="cats-owl list-hot">
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="4:10" data-xlg-items="6:100" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                            <?php foreach ($splistnb as $v) { ?>
                                <div class="item-cat-product">
                                    <div class="box-img-cat">
                                        <a class="text-decoration-none" data-id="<?= $v['id'] ?>" data-tenkhongdau="<?= $v[$sluglang] ?>">
                                            <img class="lazy" onerror="this.src='<?= THUMBS ?>/90x90x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/90x90x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                        </a>
                                    </div>
                                    <a class="text-decoration-none text-dark text-uppercase"><?= $v['name' . $lang] ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load_ajax_product"></div>
        </div>
    </div>
<?php } ?>

<!-- Mặt hàng nhiều nhất -->
<?php if (count($pronb)) { ?>
    <div class="wrap-product wrap-content">
        <div class="slogan-prodnb">
            <span>
                <?= $sloganSpnb['name' . $lang] ?>
            </span>
        </div>
        <div class="title-main"><span>Mặt hàng nhiều nhất</span></div>
        <div class="paging-product"></div>
    </div>
<?php } ?>

<!-- TIÊU CHÍ -->
<div class="votes wrap-content">
    <div class="slogan-tc">
        <span>
            <?= $sloganTc['name' . $lang] ?>
        </span>
    </div>
    <div>
        <span class="title-main-projetc title-main-projetc-m">
            Tiêu chí của chúng tôi
        </span>
    </div>
    <div class="list-votes">
        <div class="cats-owl ">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:45" data-sm-items="2:45" data-md-items="2:45" data-lg-items="2:45" data-xlg-items="3:45" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0">
                <?php foreach ($tieuChi as $k => $v) { ?>
                    <div class="item-votes">
                        <div class="d-block text-center">
                            <img onerror="this.src='<?= THUMBS ?>/125x125x1/assets/images/noimage.png';" src="<?= THUMBS ?>/125x125x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" />
                        </div>
                        <div class="box-content-votes">
                            <span class="name-author"><?= $v['name' . $lang] ?></span>
                            <span class="address-company text-split"><?= $v['desc' . $lang] ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- SẢN PHẨM KHUYẾN MÃI -->
<?php if (count($pronb)) { ?>
    <div class="wrap-content padd-t">
        <div class="slogan-news">
            <span>
                <?= $sloganNew['name' . $lang] ?>
            </span>
        </div>
        <div class="title-main"><span>Sản phẩm khuyến mãi</span></div>
        <div class="owl-pronb">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:18" data-sm-items="2:18" data-md-items="3:18" data-lg-items="4:18" data-xlg-items="5:18" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-pronb">
                <?php foreach ($prokm as $k => $v) { ?>
                    <div class="box-product">
                        <div class="pic-product pic-product-ed">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/228x269x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/228x269x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </div>
                        <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        <p class="price-product">
                            <?php if ($v['discount']) { ?>
                                <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                            <?php } else { ?>
                                <span class="price-new cl-blue"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                            <?php } ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="control-pronb control-owl transition"></div>
        </div>

    </div>
<?php } ?>

<!-- THƯ VIỆN ẢNH -->
<div class="album">
    <div class="wrap-content sub-alb">
        <div class="slogan-news">
            <span>
                <?= $sloganNew['name' . $lang] ?>
            </span>
        </div>
        <p class="title-main"><span>Sản phẩm của chúng tôi</span></p>
        <div class="flex-cus row">
            <?php foreach ($albums as $k => $v) { ?>
                <?php if ($k >= 0 && $k <= 5) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-4 mg-cus mb-3">
                        <div class="box-product box-product-edd" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pic-product pic-product-ed">
                                <a class="text-decoration-none scale-img hover_xam" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/386x258x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/386x258x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                            <h3 class="mb-0"><a class="text-decoration-none text-split name-alb" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php if (count($albums) > 6) { ?>
            <div class="bx_mr text-center">
                <a href="thu-vien-anh" class="link-alb text-uppercase text-decoration-none">Xem thêm</a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- DỊCH VỤ NỔI BẬC -->
<?php if (count($service)) { ?>
    <div class="wrap-intro wrap-content">
        <div class="newshome-scroll">
            <div class="slick-v-3">
                <?php foreach ($service as $k => $v) { ?>
                    <div>
                        <div class="news-slick">
                            <a class="img scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img onerror="this.src='<?= THUMBS ?>/780x450x1/assets/images/noimage.png';" src="<?= THUMBS ?>/780x450x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            <div class="info">
                                <h3>
                                    <a class="name-newshome text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                </h3>
                                <p class="desc-newshome desc-home-cl text-split"><?= $v['desc' . $lang] ?></p>
                                <a href="dich-vu" class="service text-uppercase text-decoration-none text-white">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<!-- TIN TỨC -->
<?php if (count($newsnb)) { ?>
    <div class="wrap-newsnb padding-top-bottom">
        <div class="wrap-content">
            <div class="slogan-news">
                <span>
                    <?= $sloganNew['name' . $lang] ?>
                </span>
            </div>
            <p class="title-main"><span>Tin tức sự kiện nổi bậc</span></p>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:25" data-sm-items="2:25" data-md-items="3:25" data-lg-items="3:25" data-xlg-items="3:25" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($newsnb as $k => $v) { ?>
                    <div class="item-newsnb">
                        <p class="pic-newsnb">
                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/385x226x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/385x226x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </p>
                        <div class="info-newsnb">
                            <p class="time-newshome"><?= ngaydang ?>: <?= date("d/m/Y", $v['date_created']) ?></p>
                            <h3 class="mb-0">
                                <a class="name-newsnb text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="desc-newsnb text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>