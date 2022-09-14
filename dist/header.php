<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no,address=no">
  <meta name="robots" content="noindex, nofollow">
  <?php wp_head(); ?>
</head>

<body>
  <header class="ly_header">
    <div class="ly_header_inner">
      <div class="bl_header_logo">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php bloginfo('name'); ?>"></a>
      </div><!-- /.bl_header_logo -->

      <button type="button" class="bl_header_navBtn hp_display_sm js_drawerNav_btn" aria-label="メニューを開く" aria-haspopup="true" aria-controls="drawerNav" aria-expanded="false">
        <svg role="img" aria-labelledby="drawerNavTitle" viewBox="0 0 32 32">
          <title id="drawerNavTitle">メニューボタン</title>
          <g>
            <rect width="27" height="2.25" y="8" />
            <rect width="27" height="2.25" y="16" />
            <rect width="27" height="2.25" y="21.5" />
          </g>
        </svg>
      </button>

      <nav class="bl_headerNav hp_display_xl hp_display_xl__iFlex" aria-label="headerNav">
        <ul class="bl_headerNav_list" role="menubar">
          <li><a href="<?php echo esc_url(home_url()) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/home.svg" alt="" width="24" height="24" loading="lazy">ホーム</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/hospital.svg" alt="" width="24" height="24" loading="lazy">当院について</a></li>
          <li><a href="<?php echo esc_url(home_url('/medical/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/file.svg" alt="" width="24" height="24" loading="lazy">診療案内</a></li>
          <li><a href="<?php echo esc_url(home_url('/staff/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/people.svg" alt="" width="24" height="24" loading="lazy">スタッフ紹介</a></li>
          <li><a href="<?php echo esc_url(home_url('/archive/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/pen.svg" alt="" width="24" height="24" loading="lazy">スタッフブログ</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/mail.svg" alt="" width="24" height="24" loading="lazy">お問い合わせ</a></li>
        </ul>
        <!-- /.bl_globalNav_list -->
        <address class="bl_headerNav_info">
          <p class="bl_headerNav_address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
          <div class="bl_headerNav_tel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tel.svg" alt="" width="28" height="28" loading='lazy' />
            <a href="tel:+03-1234-5678">03-1234-5678</a>
          </div>
        </address><!-- /.bl_headerNav_info -->
      </nav>
      <!-- /.bl_headerNav_list -->
    </div><!-- /.ly_header_inner -->

    <div class="ly_drawerNav" id="drawerNav" aria-hidden="true">
      <div class="ly_drawerNav_inner">
        <div class="bl_drawerNav_wrap">
          <nav class="bl_drawerNav" aria-label="drawer">
            <ul class="bl_drawerNav_list" role="menubar">
              <li><a href="<?php echo esc_url(home_url()) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/home.svg" alt="" width="24" height="24" loading="lazy">ホーム</a></li>
              <li><a href="<?php echo esc_url(home_url('/about/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/hospital.svg" alt="" width="24" height="24" loading="lazy">当院について</a></li>
              <li><a href="<?php echo esc_url(home_url('/medical/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/file.svg" alt="" width="24" height="24" loading="lazy">診療案内</a></li>
              <li><a href="<?php echo esc_url(home_url('/staff/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/people.svg" alt="" width="24" height="24" loading="lazy">スタッフ紹介</a></li>
              <li><a href="<?php echo esc_url(home_url('/archive/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/pen.svg" alt="" width="24" height="24" loading="lazy">スタッフブログ</a></li>
              <li><a href="<?php echo esc_url(home_url('/contact/')) ?>" role="menuitem"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/mail.svg" alt="" width="24" height="24" loading="lazy">お問い合わせ</a></li>
            </ul><!-- /.bl_drawerNav_list -->
          </nav><!-- /.bl_drawerNav -->
        </div><!-- /.bl_drawerNav_wrap -->
      </div><!-- /.ly_drawerNav_inner -->
    </div><!-- /.bl_drawerNav -->
  </header><!-- /.ly_header -->