<?php  

/*
Template Name: ギャラリーページ
*/
get_header();

?>

<section class="gallery__archive">
  <div class="inner">
    <h2 class="gallery__archiveTitle">2023年度EBR</h2>
    <div class="gallery__archiveList">
      <?php  
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => -1,
        'category_name' => 'ebr2023'
      );
      $gallery_query = new WP_Query($args);
      if($gallery_query->have_posts()) :
        while($gallery_query->have_posts()) : $gallery_query->the_post();
        if(has_post_thumbnail()) :
      ?>
      
      <div class="gallery__archiveList__item">
        <?php the_post_thumbnail('full',array('class' => '')); ?>
      </div>
      <?php  
      endif;
    endwhile;
    wp_reset_postdata();
    else :
      ?>
      <p>ギャラリー画像はありません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>