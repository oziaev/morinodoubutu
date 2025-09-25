<?php get_header(); ?>

    <main>

            <!-- 家族募集--------------------------------------------- -->
      <section class="wanted wanted-page">
        <div class="container">

          <div class="section-title">
            <h2>家族募集中</h2>
          </div>

          <ul class="wanted-list">

          <?php
          $args = array(
            'post_type'      => 'wanted',  // 保護活動投稿タイプ
            'posts_per_page' => -1,        // 全件表示
            'orderby'        => 'date',
            'order'          => 'DESC',
          );
          $wanted_query = new WP_Query($args);

          if ($wanted_query->have_posts()) :
              while ($wanted_query->have_posts()) : $wanted_query->the_post();
          ?>

            <li>
              <!-- フェードイン -------------------------------------- -->
              <?php
              $image = get_field('wanted_img'); // ACFの画像フィールド
              if( $image ) :
                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="img" />';
              endif;
              ?>
              <!-- -------------------------------------- -->

              <div class="text">
                <p class="status">ステータス
                  <span><?php the_field('wanted_status'); ?></span>
                </p>
                
                <dl>
                  <dt>名前:</dt>
                  <dd><?php the_field('wanted_name'); ?></dd>
                  
                  <dt>性別:</dt>
                  <dd><?php the_field('wanted_gender'); ?></dd>
                  
                  <dt>年齢:</dt>
                  <dd><?php the_field('wanted_age'); ?></dd>
                  
                  <dt>性格:</dt>
                  <dd><?php the_field('wanted_character'); ?></dd>
                </dl>
              </div>
            </li>

              <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
            <p>現在募集中の子はいません</p>
            <?php endif; ?>

          </ul>

          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn">お問い合わせ</a>
          <a href="javascript:history.back()" class="back">戻る<img src="<?php echo esc_url(get_template_directory_uri() . '/img/back-logo.png'); ?>" alt=""></a>

        </div>
      </section>
      <!-- ------------------------------------------------------ -->

      
    </main>

<?php get_footer(); ?>