<?php
/*
 * お知らせ
 *
*/

get_header(); ?>

<main id="mainContent">

  <div class="wrapperL">
    <div class="breadCrumbs">
      <p>
        <a href="<?php echo home_url(); ?>" class="breadLink">TOP</a>
        <span>お知らせ一覧</span>
      </p>
    </div>
  </div><!-- Breadcrumbs -->

  <section id="pageContent">

    <ul class="el-list-button">
      <li><a href="/news" class="el-child-button">すべて</a></li>
      <?php
        $terms = get_terms('news_cate');
        if($terms.length > 0){
          foreach ( $terms as $term ){
            echo '<li><a href="'.get_term_link($term->slug,'news_cate').'" class="el-child-button">'.$term->name.'</a></li>';
          };
        };
      ?>
    </ul>

    <article id="pageNews">
      <div class="wrapperL">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
