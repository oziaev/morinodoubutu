<?php get_header(); ?>

<main>
  <!-- ニュース -------------------------------------------------->
  <section id="news_list" class="news_list news">
    <div class="container">
      <div class="section-title">
        <h2>お知らせと日々のようす</h2>
      </div>

      <?php 
      // 投稿タイプを post に指定
      $args = array(
        'post_type'      => 'post',   // ← 通常の投稿
        'posts_per_page' => -1,       // 全件表示
        'orderby'        => 'date',
        'order'          => 'DESC',
      );
      $news_query = new WP_Query($args);

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();
      ?>

          <article class="post">
            <a href="<?php the_permalink(); ?>" class="item"> <!-- permalinkにする -->
              <ul class="article">
                <li class="date"><?php the_field('news_date'); ?></li>
                <li class="title">
                  <?php the_field('news_title'); ?>
                </li>
              </ul>
              <?php
              $image = get_field('news_img'); // ACFの画像フィールド
              if( $image ) :
                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="blog-img" />';
              endif;
              ?>
              <p class="next">続きを見る</p>
            </a>
          </article>

        <?php
        endwhile;
      else:
        ?>

        <p>表示できるお知らせはありません</p>
      <?php endif; ?>

    </div>
  </section>
  <!-- ------------------------------------------------------ -->
</main>

<?php get_footer(); ?>