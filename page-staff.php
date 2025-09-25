<?php get_header(); ?>

    <main>
      <section id="staff" class="staff">
        <div class="container">
          <div class="section-title">
            <h2>スタッフ紹介</h2>
          </div>
          <div class="doctors">
            <div class="doctor doctor-left">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/doctor-1.png' ); ?>" class="img" />
              <div class="profile">
                <p class="name">院長：大森 健一</p>
                <p class="subjects">一般診療・循環器科</p>
                <p class="introduction">
                  長年にわたり地域の動物たちを見守ってきた、当院の院長。<br />
                  確かな診療と温かい人柄で、飼い主さまからも厚い信頼を得ています。
                  「動物たちの声なき声に耳を傾けること」をモットーに、日々の診療にあたっています。<br />
                  趣味は釣りと盆栽。
                </p>
              </div>
            </div>

            <div class="doctor doctor-right">
              <div class="profile">
                <p class="name">副院長：大森 ひかり</p>
                <p class="subjects">一般診療・眼科・予防医療</p>
                <p class="introduction">
                  院長の娘であり、優しく丁寧な診察が魅力の獣医師。<br />
                  眼科診療を専門とし、目の不調や違和感にも的確に対応します。
                  「一緒に暮らす動物たちの毎日が、少しでも快適になるように」と、飼い主さまと同じ目線に立つ診療を心がけています。<br />
                  休日はカフェ巡りと読書が好き。
                </p>
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/doctor-2.png' ); ?>" class="img" />
            </div>

            <div class="doctor doctor-left">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/doctor-3.png' ); ?>" class="img" />
              <div class="profile">
                <p class="name">獣医師：佐々木 隼</p>
                <p class="subjects">一般診療・歯科・健康診断</p>
                <p class="introduction">
                  動物の歯の健康を大切に考える、歯科を得意とする獣医師。<br />
                  犬猫のデンタルケアについてわかりやすくアドバイスし、口腔ケアから健康を守ります。「何気ない不調のサインも見逃さない」を信条に、丁寧な問診と検査を大切にしています。<br />
                  趣味はキャンプ。
                </p>
              </div>
            </div>
          </div>

          <div class="medical-staff">
            <h3>ナース</h3>

            <ul class="staff-slider">

              <?php
              $args = array(
                  'post_type'      => 'medical_staff', // カスタム投稿タイプ名
                  'posts_per_page' => -1                // 全件取得
              );
              $staff_query = new WP_Query($args);

              if ( $staff_query->have_posts() ) :
                  while ( $staff_query->have_posts() ) :
                      $staff_query->the_post();
              ?>
              
              <li class="profile">
                <?php 
                $image = get_field('medical_staff_img'); 
                if( $image ) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="text">
                  <p class="name">動物看護師：<?php the_field('medical_staff_name'); ?></p>
                  <p class="rep">担当：<?php the_field('medical_staff_rep'); ?></p>
                  <p class="qualification">
                    保有資格：<?php the_field('medical_staff_qualification'); ?>
                  </p>
                </div>
                <p class="introduction">
                  <?php the_field('medical_staff_introduction'); ?>
                </p>
              </li>

              <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
            <p>comming soon...</p>
            <?php endif; ?>

            </ul>
          </div>

          <div class="service-staff">
            <h3>サービススタッフ</h3>

            <ul class="staff-slider">

            <?php
              $args = array(
                  'post_type'      => 'service_staff', // カスタム投稿タイプ名
                  'posts_per_page' => -1                // 全件取得
              );
              $staff_query = new WP_Query($args);

              if ( $staff_query->have_posts() ) :
                  while ( $staff_query->have_posts() ) :
                      $staff_query->the_post();
              ?>

              <li class="profile">
                <?php 
                $image = get_field('service_staff_img'); 
                if( $image ) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="text">
                  <p class="name"><?php the_field('service_staff_name'); ?></p>
                  <p class="rep">
                    担当：<?php the_field('service_staff_rep'); ?>
                  </p>
                  <p class="qualification">
                    資格：<?php the_field('service_staff_qualification'); ?>
                  </p>
                </div>
                <p class="introduction">
                  メッセージ：<br />
                  <?php the_field('service_staff_introduction'); ?>
                </p>
              </li>

              <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
            <p>comming soon...</p>
            <?php endif; ?>


            </ul>
          </div>
        </div>
      </section>
      <!-- ---------------------------------------------------------- -->

      <!-- スタッフ募集------------------------------------------------ -->

      <section id="job_offer" class="job_offer">
        <!-- 背景ウェーブ -->
        <svg
          class="svg-top"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320">
          <path
            fill="#FFFDFA"
            fill-opacity="1"
            d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,192C672,213,768,203,864,192C960,181,1056,171,1152,176C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <!-- ---------- -->

        <div class="container">
          <div class="section-title">
            <h2>私たちと一緒に働きませんか？</h2>
            <p>
              「この子たちのためにできることを」そんな想いを持つ方と、一緒に働けたら嬉しいです。
            </p>
          </div>

          <div class="wrapper">
            <h3>〜 現在募集中の職種 〜</h3>

            <div class="accordion">
              <div class="item">
                <button class="title">
                  動物看護師（正社員・パート） <span>＋</span>
                </button>

                <div class="content">
                  <dl>
                    <dt>業務内容</dt>
                    <dd>
                      診療補助、入院管理、受付業務、検査補助、ペットホテルケア
                      など
                    </dd>

                    <dt>応募資格</dt>
                    <dd>
                      動物看護師統一認定資格 または 愛玩動物看護師資格所持者<br />
                      <span>※未経験者・ブランクのある方も歓迎（丁寧に指導します）</span>
                    </dd>

                    <dt>勤務時間</dt>
                    <dd>
                      9:00～19:00 の間でシフト制（休憩あり）<br />
                      <span>※パートの方は時間・曜日応相談</span>
                    </dd>

                    <dt>休日・休暇</dt>
                    <dd>完全週休2日制、年末年始休暇、有給休暇</dd>

                    <dt>給与</dt>
                    <dd>
                      正社員：月給20万円〜（経験・能力により優遇）<br />
                      パート：時給1,100円〜1,500円
                    </dd>

                    <dt>昇給</dt>
                    <dd>年１回</dd>

                    <dt>加入保険</dt>
                    <dd>健康保険・厚生年金保険・雇用保険・労災保険</dd>

                    <dt>福利厚生</dt>
                    <dd>
                      <ul>
                        <li>制服貸与</li>
                        <li>交通費支給（上限あり）</li>
                        <li>研修・勉強会費用補助</li>
                        <li>スタッフ動物診療割引制度</li>
                        <li>バイク・自転車通勤OK</li>
                        <li>扶養内勤務OK（パート）</li>
                        <li>正社員登用制度あり（パートからのキャリアアップも）</li>
                        <li>保護活動への参加支援制度あり（任意参加）</li>
                      </ul>
                    </dd>
                    
                  </dl>
                </div>
              </div>

              <div class="item">
                <button class="title">
                  トリマー（正社員・パート） <span>＋</span>
                </button>

                <div class="content">
                  <dl>
                    <dt>業務内容</dt>
                    <dd>
                      犬猫のトリミング全般、ペットホテルの補助業務、受付・保護のサポート業務
                    </dd>

                    <dt>応募資格</dt>
                    <dd>
                      トリマー資格保持者または実務経験者<br />
                      <span>※未経験者は応相談</span>
                    </dd>

                    <dt>勤務時間</dt>
                    <dd>
                      正社員：9:00～19:00（休憩あり）<br />
                      パート：9:00～19:00の間で応相談、週2日〜
                    </dd>

                    <dt>休日・休暇</dt>
                    <dd>完全週休2日制、年末年始休暇、有給休暇</dd>

                    <dt>給与</dt>
                    <dd>
                      正社員：月給20万円〜（経験・能力により優遇）<br />
                      パート：時給1,100円〜1,500円
                    </dd>

                    <dt>昇給</dt>
                    <dd>年１回</dd>

                    <dt>加入保険</dt>
                    <dd>健康保険・厚生年金保険・雇用保険・労災保険</dd>

                    <dt>福利厚生</dt>
                    <dd>
                      <ul>
                        <li>制服貸与</li>
                        <li>交通費支給（上限あり）</li>
                        <li>研修・勉強会費用補助</li>
                        <li>スタッフ動物診療割引制度</li>
                        <li>バイク・自転車通勤OK</li>
                        <li>扶養内勤務OK（パート）</li>
                        <li>正社員登用制度あり（パートからのキャリアアップも）</li>
                        <li>保護活動への参加支援制度あり（任意参加）</li>
                      </ul>
                    </dd>

                  </dl>
                </div>
              </div>

              <div class="item">
                <button class="title">
                  受付・事務補助（正社員・パート） <span>＋</span>
                </button>

                <div class="content">
                  <dl>
                    <dt>業務内容</dt>
                    <dd>
                      受付対応、電話応対、会計処理、備品管理、清掃、ペットホテルの夜間対応スタッフ（24時間シフト制）も含む
                    </dd>

                    <dt>応募資格</dt>
                    <dd>
                      資格不問・未経験OK<br />
                      動物好きで明るく丁寧な対応ができる方歓迎<br />
                      <span>
                        ※以下のいずれかの資格保持者は優遇<br />
                        愛玩動物飼養管理士（1級・2級）・動物取扱責任者の資格要件を満たす方・ペットケアアドバイザー
                        等
                      </span>
                    </dd>

                    <dt>勤務時間</dt>
                    <dd>
                      正社員<br />
                      ・早番 8:00〜17:00<span>(朝の散歩・受付・会計・予約対応・事務処理・日中ホテル業務)</span><br />
                      ・中番 12:00〜21:00<span>(午後の受付・ペットのチェックイン／アウト・夕方の散歩など)</span><br />
                      ・夜勤 21:00〜翌8:00<span>(ペットの見守り、事務作業、清掃など)</span><br />
                      パート<br />
                      ・シフト：時間応相談、週3日〜OK
                    </dd>

                    <dt>休日・休暇</dt>
                    <dd>完全週休2日制、年末年始休暇、有給休暇</dd>

                    <dt>給与</dt>
                    <dd>
                      正社員：月給17万円〜（経験・能力により優遇）<br />
                      パート：時給1,000円〜1,300円<span>※夜勤手当あり（1回あたり3,000円）</span>
                    </dd>

                    <dt>昇給</dt>
                    <dd>年１回</dd>

                    <dt>加入保険</dt>
                    <dd>健康保険・厚生年金保険・雇用保険・労災保険</dd>

                    <dt>福利厚生</dt>
                    <dd>
                      <ul>
                        <li>制服貸与</li>
                        <li>交通費支給（上限あり）</li>
                        <li>研修・勉強会費用補助</li>
                        <li>スタッフ動物診療割引制度</li>
                        <li>バイク・自転車通勤OK</li>
                        <li>扶養内勤務OK（パート）</li>
                        <li>正社員登用制度あり（パートからのキャリアアップも）</li>
                        <li>保護活動への参加支援制度あり（任意参加）</li>
                      </ul>
                    </dd>
                    
                  </dl>
                </div>
              </div>
            </div>

            
            <a href="<?php echo esc_url( home_url( '/entry' ) ); ?>" class="btn">応募する</a>
          </div>
        </div>

        <!-- 背景ウェーブ -->
        <svg
          class="svg-bottom"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320">
          <path
            fill="#FFFDFA"
            fill-opacity="1"
            d="M0,96L48,90.7C96,85,192,75,288,96C384,117,480,171,576,192C672,213,768,203,864,192C960,181,1056,171,1152,176C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <!-- ---------- -->
      </section>

      <!-- ----------------------------------------------------------- -->
    </main>

<?php get_footer(); ?>