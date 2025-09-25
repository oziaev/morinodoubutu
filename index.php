<?php get_header(); ?>

    <main>

        <div id="loading" class="loading">
      <div class="paws">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-paw.svg' ); ?>" alt="paw" class="paw paw1" />
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-paw.svg' ); ?>" alt="paw" class="paw paw2" />
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-paw.svg' ); ?>" alt="paw" class="paw paw3" />
      </div>
    </div>


      <div class="mainvisual">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/mainvisual.png' ); ?>" alt="" />

        <div class="text">
          <h2>小さな命に、大きなやさしさを。</h2>
          <h3>もりのどうぶつ病院は、あなたと共に歩みます。</h3>
        </div>

        <div class="reception_wrapper">
          <h3 class="title">診療・サービス受付時間</h3>

          <table class="reception_time">
            <tr>
              <th></th>
              <th></th>
              <th>月</th>
              <th>火</th>
              <th>水</th>
              <th>木</th>
              <th>金</th>
              <th>土</th>
              <th>日</th>
              <th>祝</th>
            </tr>

            <tr>
              <th>診療</th>
              <th>9:00 ~ 12:00<br />6:00 ~ 19:00</th>
              <td>●</td>
              <td>●</td>
              <td>▲</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>▲</td>
              <td></td>
            </tr>

            <tr>
              <th>ペットホテル</th>
              <th>24時間受付</th>
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
              <th>トリミング</th>
              <th>9:00 ~ 19:00</th>
              <td>●</td>
              <td>●</td>
              <td></td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td></td>
            </tr>

            <tr>
              <th>しつけ教室</th>
              <th>14:00 ~ 19:00<br />内で要相談</th>
              <td></td>
              <td></td>
              <td>●</td>
              <td></td>
              <td></td>
              <td></td>
              <td>●</td>
              <td></td>
            </tr>
          </table>

          <div class="reception-text">
            <p>▲ 午後休診</p>
            <p>臨時休診等は公式LINEからお知らせいたします。</p>
          </div>
        </div>
      </div>

      <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <h2>もりのどうぶつ病院について</h2>
            <p>
              病気の治療だけでなく、しつけや日常のケアまで。<br />
              私たちは、動物と人がもっと仲良く暮らせるお手伝いをしています。
            </p>
          </div>
        </div>

        <!-- ページリンク -------------------------------------------->
        <div class="service">
          <div class="content">
            <h3>サービス <span>〜 SERVICE 〜</span></h3>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/service.png' ); ?>" class="img" />

            <ul class="items">
              <li class="item">
                <a href="<?php echo esc_url( home_url( '/trimming' ) ); ?>">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about-1.png' ); ?>" alt="" />
                  <p class="text-1">トリミング</p>
                  <p class="text-2">trimming</p>
                </a>
              </li>

              <li class="item">
                <a href="<?php echo esc_url( home_url( '/hotel' ) ); ?>">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about-2.png' ); ?>" alt="" />
                  <p class="text-1">ペットホテル</p>
                  <p class="text-2">hotel</p>
                </a>
              </li>

              <li class="item">
                <a href="<?php echo esc_url( home_url( '/training' ) ); ?>">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about-3.png' ); ?>" alt="" />
                  <p class="text-1">ドッグトレーニング</p>
                  <p class="text-2">training</p>
                </a>
              </li>

              <li class="item">
                <a href="<?php echo esc_url( home_url( '/rescue' ) ); ?>">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/about-4.png' ); ?>" alt="" />
                  <p class="text-1">保護活動</p>
                  <p class="text-2">rescue</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- 診療科目 ---------------------------------------------------->
        <div class="medical_care_subjects">
          <div class="background">
            <h3>診療科目 <span>〜 SUBJECTS 〜</span></h3>
            <div class="container">
              <div class="subjects_pc">
                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-1.png' ); ?>" alt="" />
                    一般診療（内科・外科）
                  </dt>
                  <dd>
                    発熱・食欲不振・咳など、日常的な体調不良やケガの処置などに対応します。

                    <ul class="detail">
                      <li>風邪</li>
                      <li>嘔吐、下痢</li>
                      <li>誤飲</li>
                      <li>ケガ</li>
                      <li>避妊、去勢手術 など</li>
                    </ul>
                  </dd>
                </dl>

                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-2.png' ); ?>" alt="" />
                    歯科
                  </dt>
                  <dd>
                    お口のニオイや歯の汚れ、歯ぐきの腫れなどが気になるときに。

                    <ul class="detail">
                      <li>歯磨きのご相談</li>
                      <li>歯石</li>
                      <li>口内炎</li>
                      <li>口臭</li>
                      <li>食べにくさ など</li>
                    </ul>
                  </dd>
                </dl>

                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-3.png' ); ?>" alt="" />
                    循環器科
                  </dt>
                  <dd>
                    心臓や血管の病気は、早期発見がとても大切です。レントゲンやエコー検査での、心臓の健康をしっかりチェックします。

                    <ul class="detail">
                      <li>心臓病（僧帽弁閉鎖不全症など）</li>
                      <li>高血圧</li>
                      <li>不整脈 など</li>
                    </ul>
                  </dd>
                </dl>

                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-4.png' ); ?>" alt="" />
                    眼科
                  </dt>
                  <dd>
                    目やに・充血・涙が多いなど、見た目で気づきやすい症状にも丁寧に対応します。目のトラブルは進行が早いため、早めの受診をおすすめします。

                    <ul class="detail">
                      <li>結膜炎</li>
                      <li>角膜炎</li>
                      <li>白内障</li>
                      <li>涙やけ など</li>
                    </ul>
                  </dd>
                </dl>

                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-5.png' ); ?>" alt="" />
                    予防医療
                  </dt>
                  <dd>
                    フィラリアやノミ・ダニの予防、混合ワクチン接種など、年間を通してサポートいたします。

                    <ul class="detail">
                      <li>ワクチン接種</li>
                      <li>フィラリア予防</li>
                      <li>ノミ・ダニ対策</li>
                      <li>狂犬病予防接種 など</li>
                    </ul>
                  </dd>
                </dl>

                <dl class="item">
                  <dt>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-6.png' ); ?>" alt="" />
                    健康診断
                  </dt>
                  <dd>
                    年齢に応じた定期的な健康チェックで、病気の早期発見・予防をサポート。血液検査や画像診断を用いて、体の内側までしっかりチェックします。

                    <ul class="detail">
                      <li>シニアケア</li>
                      <li>血液検査</li>
                      <li>画像診断 など</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <!-- ----------------------------------------------------- -->
              <div class="accordion">
                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-1.png' ); ?>" alt="" />
                    一般診療（内科・外科）<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      発熱・食欲不振・咳など、日常的な体調不良やケガの処置などに対応します。
                    </p>
                    <ul class="detail">
                      <li>風邪</li>
                      <li>嘔吐、下痢</li>
                      <li>誤飲</li>
                      <li>ケガ</li>
                      <li>避妊、去勢手術 など</li>
                    </ul>
                  </div>
                </div>

                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-2.png' ); ?>" alt="" />
                    歯科<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      お口のニオイや歯の汚れ、歯ぐきの腫れなどが気になるときに。
                    </p>
                    <ul class="detail">
                      <li>歯磨きのご相談</li>
                      <li>歯石</li>
                      <li>口内炎</li>
                      <li>口臭</li>
                      <li>食べにくさ など</li>
                    </ul>
                  </div>
                </div>

                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-3.png' ); ?>" alt="" />
                    循環器科<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      心臓や血管の病気は、早期発見がとても大切です。レントゲンやエコー検査での、心臓の健康をしっかりチェックします。
                    </p>
                    <ul class="detail">
                      <li>心臓病（僧帽弁閉鎖不全症など）</li>
                      <li>高血圧</li>
                      <li>不整脈 など</li>
                    </ul>
                  </div>
                </div>

                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-4.png' ); ?>" alt="" />
                    眼科<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      目やに・充血・涙が多いなど、見た目で気づきやすい症状にも丁寧に対応します。目のトラブルは進行が早いため、早めの受診をおすすめします。
                    </p>
                    <ul class="detail">
                      <li>結膜炎</li>
                      <li>角膜炎</li>
                      <li>白内障</li>
                      <li>涙やけ など</li>
                    </ul>
                  </div>
                </div>

                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-5.png' ); ?>" alt="" />
                    予防医療<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      フィラリアやノミ・ダニの予防、混合ワクチン接種など、年間を通してサポートいたします。
                    </p>
                    <ul class="detail">
                      <li>ワクチン接種</li>
                      <li>フィラリア予防</li>
                      <li>ノミ・ダニ対策</li>
                      <li>狂犬病予防接種 など</li>
                    </ul>
                  </div>
                </div>

                <div class="item">
                  <button class="title">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/subjects-6.png' ); ?>" alt="" />
                    健康診断<span>＋</span>
                  </button>

                  <div class="content">
                    <p>
                      年齢に応じた定期的な健康チェックで、病気の早期発見・予防をサポート。血液検査や画像診断を用いて、体の内側までしっかりチェックします。
                    </p>
                    <ul class="detail">
                      <li>シニアケア</li>
                      <li>血液検査</li>
                      <li>画像診断 など</li>
                    </ul>
                  </div>
                </div>
                <!-- ---------------------------------------- -->
              </div>
            </div>
          </div>
        </div>

        <!-- 診療動物 --------------------------------------------->
        <div class="services">
          <div class="container">
            <div class="section-title">
              <h3>診療動物<span>〜 ANIMALS 〜</span></h3>
            </div>
            <ul>
              <li>
                <h4>犬・猫</h4>
                <div class="img-stack">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-dogcat-1.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-dogcat-2.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-dogcat-3.png' ); ?>" alt="" />
                </div>
              </li>
              <li>
                <h4>小動物</h4>
                <div class="img-stack">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-small-1.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-small-2.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-small-3.png' ); ?>" alt="" />
                </div>
              </li>
              <li>
                <h4>爬虫類</h4>
                <div class="img-stack">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-reptiles-1.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-reptiles-2.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-reptiles-3.png' ); ?>" alt="" />
                </div>
              </li>
              <li>
                <h4>エキゾチックアニマル</h4>
                <div class="img-stack">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-exotic-1.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-exotic-2.png' ); ?>" alt="" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/animal-exotic-3.png' ); ?>" alt="" />
                </div>
              </li>
            </ul>
            <p>
              ※一部の動物は対応できないこともありますので、事前にお電話でお問い合わせいただけるとスムーズです。
            </p>
          </div>
        </div>
      </section>

      <!-- ニュース -------------------------------------------------->
      <section id="news" class="news">
        <div class="container">

        <?php
        $args = array(
          'posts_per_page' => 1,  // 最新1件だけ
          'orderby'        => 'date',
          'order'          => 'DESC'
        );

        $latest_post = new WP_Query($args);

        if ($latest_post->have_posts()) :
          while ($latest_post->have_posts()) : $latest_post->the_post();
            ?>
          
          <article class="post">
            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="item">
              <ul class="article">
                <li class="date"><?php the_field('news_date'); ?></li>
                <li class="title">
                  <?php the_field('news_title'); ?>
                </li>
              </ul>

              <p class="next">お知らせ・ブログ一覧</p>
            </a>
          </article>

          <?php
                endwhile;
            else :
                ?>
                <p>表示できるお知らせはありません</p>
                <?php endif; ?>

        </div>
      </section>
      <!-- ------------------------------------------------------ -->

      <!-- カレンダー ------------------------------------->
      <section id="calendar" class="calendar">
        <div class="container">
          <div class="section-title">
            <h2>お休みカレンダー</h2>
          </div>

          
          <div class="wrapper">

            <?php echo do_shortcode('[xo_event_calendar holidays="all,pm"]'); ?>

          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>