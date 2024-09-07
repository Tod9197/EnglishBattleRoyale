<?php  

/*
Template Name: 画像一覧ページ
*/
get_header();

?>

<!-- メインビジュアル -->
<section class="mainVisual -gallery">
    <h1 class="mainVisual__title -gallery">gallery</h1>
</section>

<!-- 申し込みリンク -->
<div class="requestLink">
  <div class="requestLink__flex">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">(ゲストの方)<br>　申し込む</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text -student">(門下生)<br>申し込む</p>
    </a>
  </div>
</div>

<div class="requestLink -mobile">
  <div class="requestLink__flex -mobile">
    <a class="requestLink__item -guest" href="https://docs.google.com/forms/d/e/1FAIpQLSeN66tRCIuVy8_pssjk8pJMNnZeN5tHjHtCJwJsNybvOeVeBw/viewform" id="js-request-guest" target="_blank" rel="noopener noreferrer">
      <p class="requestLink__text">申し込む<br>(ゲストの方)</p>
    </a>
    <a class="requestLink__item -student" href="https://docs.google.com/forms/d/e/1FAIpQLScj2b2ZH2SKMyr6FCwwrMk-jblrtCCySUv3Il8_u3893Rt24w/viewform" id="js-request-student">
      <p class="requestLink__text -student">申し込む<br>(門下生)</p>
    </a>
  </div>
</div>
<!-- 申し込みリンクここまで -->

<section class="galleryArchive" id="gallery">
  <div class="inner">
    <h2 class="galleryArchive__title">2023年度EBR</h2>
    <div class="galleryArchive__list">
      <?php  
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => 8,
        'category_name' => 'ebr2023',
        'paged' => $paged
      );
      $gallery_query = new WP_Query($args);

      if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post();
          if (has_post_thumbnail()) : ?>
      
            <div class="galleryArchive__listItem">
              <?php the_post_thumbnail('full', array('class' => '')); ?>
            </div>
      
          <?php  
          endif;
        endwhile; 
      ?>
    </div>

    <!-- ページネーション -->
    <div class="galleryArchive__pagination">
      <?php  
      echo paginate_links(array(
        'total' => $gallery_query->max_num_pages,
        'current' => $paged,
        'prev_text' => __('←'),
        'next_text' => __('→'),
      ));
      ?>
    </div>

    <?php
      wp_reset_postdata();
      else :
    ?>
      <p>ギャラリー画像はありません。</p>
    <?php endif; ?>
  </div>
  <!-- モーダル -->
  <div class="modal" id="imageModal" >
    <div class="modal__wrap">
    <span class="modal__close">&times;</span>
    <img class="modal__content" id="modalImage">
    <div id="caption"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
