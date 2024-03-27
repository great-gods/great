<?php get_header(); ?>


<article id="homeBlog">
  <div class="wrapperL">
    <h2 class="homeTitle">
      <span>ブログ</span>
    </h2>
    <div>
      <?php
        $args = [
          'post_type' => 'blog', 
          'posts_per_page' => 4, 
        ];
        $my_query = new WP_Query($args); 
      ?>
      <?php if ($my_query->have_posts()): ?>

        <div class="el-row">

          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <div class="el-col">
            <a href="<?php echo get_permalink();?>" class="blogChild">
              <div class="flexImg">
                <?php the_post_thumbnail('full', array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'homepage-thumb' )); ?>
              </div>
              <div>
                <dl>
                  <dt class="newsDate"><?php echo get_the_date( 'Y/m/d' ); ?></dt>
                  <dd class="newsCate">
                    <?php
                      $terms = get_the_terms($post->ID,'news_cate');
                      if($terms.length > 0){
                        foreach( $terms as $term ) {
                          echo '<strong>'.$term->name.'</strong>';
                        };
                      };
                    ?>
                  </dd>
                </dl>
                <h3 class="newsTitle"><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
          
          <?php endwhile; ?>

        </div>

      <?php endif; wp_reset_postdata(); ?>
    </div>
    
    <div class="moreButton">
      <a href="/blog" class="circleBtnLink">もっと見る</a>
    </div>
  </div>
</article><!--/homeNews-->

<article id="homeNews">
  <div class="wrapperL">
    <h2 class="homeTitle">
      <span>お知らせ</span>
    </h2>
    <div>
      <?php
        $args = [
          'post_type' => 'news', 
          'posts_per_page' => 3, 
        ];
        $my_query = new WP_Query($args); 
      ?>
      <?php if ($my_query->have_posts()): ?>

        <div class="news-lists">

          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <div class="newsChild">
            <a href="<?php echo get_permalink();?>">
              <div class="newsLeft">
                <span class="newsDate"><?php echo get_the_date( 'Y/m/d' ); ?></span>
                <p class="newsCate">
                  <?php
                    $terms = get_the_terms($post->ID,'news_cate');
                    if($terms.length > 0){
                      foreach( $terms as $term ) {
                        echo '<strong>'.$term->name.'</strong>';
                      };
                    };
                  ?>
                </p>
              </div>
              <h3 class="newsTitle"><?php the_title(); ?></h3>
            </a>
          </div>
          
          <?php endwhile; ?>

        </div>

      <?php endif; wp_reset_postdata(); ?>
    </div>
    
    <div class="moreButton">
      <a href="/news" class="circleBtnLink">もっと見る</a>
    </div>
  </div>
</article><!--/homeNews-->


<?php get_footer(); ?>