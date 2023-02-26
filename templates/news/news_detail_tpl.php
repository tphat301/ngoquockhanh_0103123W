<div class="row">
    <div class="col-lg-9 mb-3">
        <div class="title-detail-main"><?= $rowDetail['name' . $lang] ?></div>
        <?php if (!empty($rowDetail['content' . $lang])) { ?>
            <div class="content-main content-text w-clear"><?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?></div>
            <div class="share">
                <b><?= chiase ?>:</b>
                <div class="social-plugin w-clear">
                    <?php
                    $params = array();
                    $params['oaid'] = $optsetting['oaidzalo'];
                    echo $func->markdown('social/share', $params);
                    ?>
                </div>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= noidungdangcapnhat ?></strong>
            </div>
        <?php } ?>
    </div>
    <div class="col-lg-3">
        <?php if (!empty($news)) { ?>
            <div class="share othernews mb-3">
                <b><?= baivietkhac ?>:</b>
                <ul class="list-news-other">
                    <?php foreach ($news as $k => $v) { ?>
                        <li><i class="fas fa-arrow-right"></i><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
        <?php } ?>
    </div>
</div>