<div class="footer">
    <div class="footer-article padding-top-bottom">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news">
                <p class="name-company-footer"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-news">
                <p class="footer-title"><?= chinhsach ?></p>
                <ul class="footer-ul">
                    <?php foreach ($policy as $v) { ?>
                        <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title"><?= dangkynhantin ?></p>
                <p class="newsletter-slogan"><?= slogandangkynhantin ?></p>
                <form class="validation-newsletter form-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="newsletter-input">
                        <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="<?= nhapemail ?>" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                    <div class="newsletter-button">
                        <input type="submit" class="btn btn-sm" name="submit-newsletter" value="<?= gui ?>" disabled>
                        <input type="hidden" class="btn btn-sm" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                    </div>
                </form>
            </div>
            <div class="footer-news">
                <p class="footer-title">Fanpage facebook</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-center">
            <div class="copyright">Copyright © 2023 <?= $copyright['name' . $lang] ?>. Design by Nina Co, Ltd</div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle-zl kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle-phone kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i id="box-img-hotline"><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>