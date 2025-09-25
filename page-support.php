<?php get_header(); ?>

<main>

        <!-- ------------------------------------ -->

        <section class="support-fixed_page">
          <div class="container">
            
            <div class="section-title">
              <h2>ご支援のお願い</h2>
              <p>私たちの活動は、みなさまのあたたかなご支援によって支えられています。<br>
                保護された動物たちが安心して暮らせるよう、物資やご寄付、ボランティアなど、できる形でのご協力をお願いしています。
              </p>
            </div>
            
            <div class="accordion">

              <div class="item">
                <button class="title">募集中の物資 <span>＋</span> </button>
                
                <div class="content">
                  <div class="text">
                    <ul>
                      <li>ドライフード・缶詰（犬猫）</li>
                      <li>ペットシーツ</li>
                      <li>毛布・タオル（洗濯済のもの歓迎）</li>
                      <li>ケージ・キャリー・ベッド類</li>
                      <li>おもちゃ・爪とぎ・首輪・リード など</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="item">
                <button class="title">ボランティア協力について <span>＋</span> </button>
                
                <div class="content">
                  <div class="text">
                    <ul>
                      <li>お掃除・お世話</li>
                      <li>搬送ボランティア</li>
                      <li>一時預かり（条件あり）</li>
                      <li>写真撮影やSNS発信のサポート</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            
          </div>
        </section>
        
        <!-- ----------------------------------------------- -->

        <!-- 支援方法-------------------------------------- -->

        <section class="method">
          <div class="container">

            <ul class="lists">

              <li class="list">
                <h3>送り先</h3>
                <p>〒123-4567</p>
                <p>長野県○○町</p>
                <p>もりのどうぶつ病院内<br>保護部宛 </p>
                <p>TEL：0000-00-0000</p>
                <div class="attention">
                  <p>※送料はご負担をお願いいたします</p>
                  <p>※直接のお持ち込みも歓迎です（事前にお電話ください）</p>
                </div>
              </li>
              
              <li class="list">
                <h3>銀行振込</h3>
                <dl>

                  <dt>銀行名</dt>
                  <dd>：○○銀行</dd>
                  
                  <dt>支店名</dt>
                  <dd>：○○支店</dd>

                  <dt>口座種別</dt>
                  <dd>：普通</dd>

                  <dt>口座番号</dt>
                  <dd>：1234567</dd>

                  <dt>口座名義</dt>
                  <dd>：もりのどうぶつ動物病院 保護基金<br>（モリノドウブツビョウイン ホゴキキン）</dd>

                </dl>
                <div class="attention">
                  <p>※振込後にご一報いただけますと幸いです</p>
                </div>
              </li>

              <li class="list">
                <h3>ボランティア協力<br>応募方法</h3>
                
                <ul>
                  <li>
                   
                    0000-00-0000
                  </li>
                  <li>
                    お問い合わせフォームより
                  </li>
                </ul>
                <div class="attention">
                  <p>※ご希望の内容・可能な曜日や時間をお知らせください</p>
                </div>
              </li>

              <li class="list">
                <h3>注意事項</h3>

                <ul class="list-inner">
                  <li>支援物資・寄付ともに領収書の発行をご希望の場合はご連絡ください</li>
                  <li>営利目的での利用・転売は固くお断りします</li>
                  <li>いただいた支援は、活動報告で適切に公開します</li>
                </ul>
              </li>

            </ul>
            <a href="<?php echo esc_url( home_url( '/rescue' ) ); ?>#support" class="back">戻る<img src="http://morinodoubutu.local/wp-content/uploads/2025/09/back-logo.png" alt=""></a>
          </div>
        </section>

        <!-- ---------------------------------------------- -->

        <!-- カレンダー ------------------------------------->
      <section id="calendar" class="calendar">
        <div class="container">
          <div class="section-title">
            <h2>お休みカレンダー</h2>
          </div>
          
          <div class="wrapper">
            <div class="text">
              <?php echo do_shortcode('[xo_event_calendar holidays="all,pm"]'); ?>
            </div>
          </div>
            
        </div>

      </section>

      
    </main>

    <?php get_footer(); ?>