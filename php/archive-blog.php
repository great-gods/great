<?php
/*
 * ブログ
 *
*/

get_header(); ?>

<main id="mainContent">

  <div class="wrapperL">
    <div class="breadCrumbs">
      <p>
        <a href="<?php echo home_url(); ?>" class="breadLink">TOP</a>
        <span>ブログ一覧</span>
      </p>
    </div>
  </div><!-- Breadcrumbs -->

  <section id="pageContent">

    <ul class="el-list-button">
      <li><a href="/blog" class="el-child-button">すべて</a></li>
      <?php
        $terms = get_terms('blog_cate');
        if($terms.length > 0){
          foreach ( $terms as $term ){
            echo '<li><a href="'.get_term_link($term->slug,'blog_cate').'" class="el-child-button">'.$term->name.'</a></li>';
          };
        };
      ?>
    </ul>

    <article id="pageBlog" class="wrapperL">
      <div class="el-row">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

        <?php else: ?>

          <p class="noError">しばらく追加内容はありませんので、お楽しみに！ </p>

        <?php endwhile; ?>
        <?php endif; ?>
        
      </div>
    </article>

    <?php bones_page_navi(); ?>

  </section>

</main>

<?php get_footer(); ?>
