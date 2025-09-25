<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mori no Doubutsu Hospital</title>
      <?php wp_head(); ?>
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo esc_url( home_url() ); ?>" class="logo">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.png' ); ?>" />
        </a>
      </h1>

      <nav>
        <ul>
          <li><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url( home_url() ); ?>#about">診療案内</a></li>
          <li><a href="<?php echo esc_url( home_url( '/trimming' ) ); ?>">トリミング</a></li>
          <li><a href="<?php echo esc_url( home_url( '/hotel' ) ); ?>">ペットホテル</a></li>
          <li><a href="<?php echo esc_url( home_url( '/training' ) ); ?>">ドッグトレーニング</a></li>
          <li><a href="<?php echo esc_url( home_url( '/rescue' ) ); ?>">保護活動</a></li>
          <li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>">スタッフ紹介</a></li>
          <li><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a></li>
          <li><a href="tel:0000-00-0000"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-phone.svg' ); ?>" /></a></li>
        </ul>
      </nav>

      <div class="toggle">
        <p>MENU</p>
        <span></span>
        <span></span>
      </div>
      <div class="mask"></div>
    </header>
