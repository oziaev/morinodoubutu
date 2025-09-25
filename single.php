<?php get_header(); ?>

    <main>
      <!-- ニュース -------------------------------------------------->
      <section id="news_list" class="news_list news">

        <div class="container">
          <div class="section-title">
            <h2>お知らせと日々のようす</h2>
          </div>
          <!--  -->

        <?php 
      if (have_posts()) : 
        while (have_posts()) : the_post(); 
      ?>

          <article class="single">
              <ul class="article">
                <li class="date"><?php the_field('news_date'); ?></li>
                <li class="title">
                  <?php the_field('news_title'); ?>
                </li>
                <li><?php the_field('news_text'); ?></li>
              </ul>
              
              <?php
              $image = get_field('news_img'); // ACFの画像フィールド
              if( $image ) :
                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="blog-img" />';
              endif;
              ?>
              <a href="javascript:history.back()" class="back">戻る<img src="http://morinodoubutu.local/wp-content/uploads/2025/09/back-logo.png" alt=""></a>
          </article>

              <?php
        endwhile;
      else:
        ?>

        <p>表示できるお知らせはありません</p>
      <?php endif; ?>

          <!--  -->
        </div>
      </section>
      <!-- ------------------------------------------------------ -->
    </main>

<?php get_footer(); ?>