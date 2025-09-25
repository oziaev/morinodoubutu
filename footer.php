    <footer>
      <!-- 背景ウェーブ ------------------------------------------->
      <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <!-- 上の薄い波 -->
          <path
            fill="#DAE6D2"
            fill-opacity=".7"
            d="M0,160L80,138.7C160,117,320,75,480,85.3C640,96,800,160,960,202.7C1120,245,1280,267,1360,277.3L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          <!-- 下の濃い波 -->
          <path
            fill="#DAE6D2"
            fill-opacity="1"
            d="M0,192L48,197.3C96,203,192,213,288,218.7C384,224,480,224,576,213.3C672,203,768,181,864,154.7C960,128,1056,96,1152,85.3C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
      </div>
      <!-- ------------------------------------------------------- -->

      <div class="container">
        <a href="<?php echo esc_url( home_url() ); ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" /></a>

        <div class="footer-top">
          <div class="info-left">
            <div class="overview">
              <h3>病院概要</h3>
              <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>#about">診療案内</a></li>
                <li><a href="<?php echo esc_url( home_url( '/trimming' ) ); ?>">トリミング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/hotel' ) ); ?>">ペットホテル</a></li>
                <li><a href="<?php echo esc_url( home_url( '/training' ) ); ?>">ドッグトレーニング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/rescue' ) ); ?>">保護活動</a></li>
                <li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
                <li><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></li>
              </ul>
            </div>

            <div class="pey">
              <h3>お支払い方法</h3>
              <p>現金またはキャッシュレス決済</p>
            </div>
          </div>

          <div class="info-right">
            <div class="contact">
              <h3>ご予約・お問い合わせ</h3>
              <ul>
                <li>
                  <a href="tel:0000-00-0000">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-phone.svg' ); ?>" alt="" />
                    0000-00-0000
                  </a>
                </li>

                <li>
                  <a href="https://www.instagram.com/">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-instagram.svg' ); ?>" alt="" />
                    Instagram
                  </a>
                </li>

                <li>
                  <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-line.svg' ); ?>" alt="" />
                    公式LINE
                  </a>
                  <p>※友だち追加して、いつでもご予約・お問い合わせOK！</p>
                </li>
              </ul>
            </div>

            <div class="pay-insurance">
              <div class="insurance">
                <h3>取扱保険</h3>
                <ul>
                  <li>アニコム損害保険</li>
                  <li>アイペット損害保険</li>
                </ul>
                <p>
                  ※他の保険会社の場合は、飼い主様から直接、保険会社に請求いただきます。
                </p>
              </div>
            </div>
          </div>

          <div class="access">
            <div class="access-inner">
              <h3>アクセス</h3>

              <div class="text">
                <p class="address">
                  〒123-4567<br />
                  長野県○○町
                </p>
                <div class="text-inner">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/access-1.png' ); ?>" alt="" />
                  <p class="car">駐車場10台完備</p>
                </div>
              </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1650353.4229644362!2d136.71244398088328!3d36.10941453681933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d012318c98c6b%3A0x25c2b4f04bf0b94!2z6ZW36YeO55yM!5e0!3m2!1sja!2sjp!4v1758267842664!5m2!1sja!2sjp" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="careers-link">
            <p>小さな命に寄り添うお仕事、始めませんか？</p>
            <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>#job_offer" class="btn">採用情報はこちら</a>
          </div>

          <div class="support-link">
            <p>小さな命を守るために、あなたの力を貸してください。</p>
            <a href="<?php echo esc_url( home_url( '/support' ) ); ?>" class="btn">寄付のお願いはこちら</a>
          </div>
        </div>

        <div class="to-top">
          <div class="inner">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-paw.svg' ); ?>" alt="" />
            <p>top</p>
          </div>
        </div>
      </div>

      <div class="footer">
        <p>&copy;Mori no Doubutsu Hospital</p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
