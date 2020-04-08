<?php
/**
 * Template Name: Whats new
 *
 * Version      : 1.0.0
 * Author       : redtea_rigth
 * Author URI   : http://redtea.jp
 * Created      : March 14, 2020
 */
?>

<ul>
<?php
  $args = array(
    'posts_per_page' => 5 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
