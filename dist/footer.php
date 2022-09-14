<footer class="ly_footer">
  <div class="ly_footer_inner">
    <div class="bl_footer_info">
      <div class="bl_footer_logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php bloginfo('name'); ?>">
      </div><!-- /.bl_footer_logo -->
      <address class="bl_footer_address">
        <p>〒166-0001</p>
        <p>東京都杉並区阿佐谷北7-3-1</p>
      </address><!-- /.bl_footer_address -->
      <div class="bl_footer_telLink">
        <a href="tel:+03-1234-5678"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tel.svg" alt="" width="28" height="28" loading='lazy' />03-1234-5678</a>
        <p>(年中無休 AM9:00〜PM22:00)</p>
      </div><!-- /.bl_footer_telLink -->
      <div class="bl_footer_btnWrap">
        <a href="<?php echo esc_url(home_url('/reserve/')) ?>" class="el_btn el_btn_solid">Web予約</a>
        <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="el_btn el_btn_border">お問い合わせ</a>
      </div><!-- /.bl_footer_btnWrap -->
      <div class="bl_footer_schedule">
        <table>
          <thead>
            <tr>
              <td>診療時間</td>
              <td>月</td>
              <td>火</td>
              <td>水</td>
              <td>木</td>
              <td>金</td>
              <td class="el_label_schedule el_label_schedule__blue">土</td>
              <td class="el_label_schedule el_label_schedule__red">日</td>
              <td class="el_label_schedule el_label_schedule__red">祝</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>9:00~12:00</th>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
            <tr>
              <th>13:00~22:00</th>
              <td>●</td>
              <td>●</td>
              <td class="hp_color__bk">/</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
          </tbody>
        </table>
      </div><!-- /.bl_footer_schedule -->
      <div class="bl_footer_map">
        <iframe src="<?php echo get_template_directory_uri(); ?>/assets/img/empty.gif" srcset="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6847.575976668459!2d132.47135918751167!3d34.39774346657834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355a9f53bc20533b%3A0x28413f32450be7eb!2z5bqD5bO26aeF!5e0!3m2!1sja!2sjp!4v1663155352023!5m2!1sja!2sjp" width="315" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="みなみ歯科の所在地が示されたマップ"></iframe>
      </div><!-- /.bl_footer_map -->
    </div><!-- /.bl_footer_info -->

    <div class="bl_footerNav_wrap">
      <nav class="bl_footerNav" aria-label="footerNav">
        <ul class="bl_footerNav_list" role="menubar">
          <li class="bl_footerNav_item" role="none">
            <a role="menuitem" href="<?php echo esc_url(home_url('/about/')) ?>">当院について</a>
            <ul class="bl_footerNav_secondList" role="menu">
              <li class="bl_footerNav_secondItem" role="none"><a href="<?php echo esc_url(home_url('/about/#policy')) ?>">ポリシーと特徴</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a href="<?php echo esc_url(home_url('/about/#appearance')) ?>">当院の様子</a></li>
            </ul><!-- /.bl_footerNav_secondList -->
          </li>
          <li class="bl_footerNav_item" role="none">
            <a role="menuitem" href="<?php echo esc_url(home_url('/staff/')) ?>">スタッフ紹介</a>
            <ul class="bl_footerNav_secondList" role="menu">
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/staff/#director')) ?>">院長のあいさつ</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/staff/#staffList')) ?>">スタッフ</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/about/#archive')) ?>">スタッフブログ</a></li>
            </ul><!-- /.bl_footerNav_secondList -->
          </li>
          <li class="bl_footerNav_item" role="none">
            <a role="menuitem" href="<?php echo esc_url(home_url('/medical/')) ?>">診療内容</a>
            <ul class="bl_footerNav_secondList" role="menu">
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#general')) ?>">一般歯科</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#child')) ?>">小児歯科</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#safety')) ?>">予防歯科</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#denture')) ?>">入れ歯</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#orthodontia')) ?>">矯正歯科</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#white')) ?>">ホワイトニング</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#surgery')) ?>">口腔外科</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/medical/#laser')) ?>">レーザー治療</a></li>
            </ul><!-- /.bl_footerNav_secondList -->
          </li>
          <li class="bl_footerNav_item" role="menuitem">
            <p>お問い合わせ</p>
            <ul class="bl_footerNav_secondList" role="menu">
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/contact/')) ?>">お問い合わせフォーム</a></li>
              <li class="bl_footerNav_secondItem" role="none"><a role="menuitem" href="<?php echo esc_url(home_url('/reserve/')) ?>">Web予約</a></li>
            </ul><!-- /.bl_footerNav_secondList -->
          </li>
        </ul><!-- /.bl_footerNav_list -->
      </nav><!-- /.bl_footerNav -->
    </div><!-- /.bl_footerNav_wrap -->

    <div class="bl_footer_copyWrap">
      <copy class="el_copy">&copy; 2020-2021 みなみ歯科クリニック</copy>
    </div><!-- /.bl_footer_copyWrap -->
  </div><!-- /.ly_footer_inner -->
</footer><!-- /.ly_footer -->

<button class="el_btn el_btn_toTop">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow.svg" alt="" width="21" height="21" loading="lazy" />
</button><!-- /.el_btn_toTop -->

<div class="bl_spBottom">
  <div class="bl_spBottom_tel">
    <a href="tel:+03-1234-5678">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tel.svg" alt="" width="18" height="18" loading="lazy" />
      03-1234-5678
    </a>
  </div><!-- /.bl_spBottom_tel -->
  <p class="bl_spBottom_time">(年中無休 AM9:00〜PM22:00)</p>
  <div class="bl_spBottom_reserveBtn">
    <a href="el_btn el_btn_rec">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/device.svg" alt="" width="43.5" height="25.5" loading="lazy" />
      Web予約はこちら
    </a>
  </div><!-- /.bl_spBottom_reserveBtn -->
</div><!-- /.bl_spBottom -->

<?php wp_footer(); ?>
</body>

</html>