<div class="header">
    <div class="header-top">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <p class="info-header"><?= $setting['address' . $lang] ?></p>
            <p class="info-header"><i class="bi bi-telephone-fill"></i> Hotline: <?= $func->formatPhone($optsetting['hotline']) ?></p>
            <?php if (count($social)) { ?>
                <div class="social social-header d-flex align-items-center">
                    <?php foreach ($social as $k => $v) { ?>
                        <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                            <img class="lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <a class="logo-header site-me" href="">
                <img class="lazy" onerror="this.src='<?= THUMBS ?>/290x120x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/290x120x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
            </a>
            <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
        </div>
    </div>
</div>