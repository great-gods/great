<?php
/*
 * ブログ
 *
*/

get_header(); ?>

<main id="mainContent">

  <div class="wrapperL">
    <div class="breadCrumbs">
      <?php
        $terms = get_the_terms($post->ID,'blog_cate');
        if($terms.length > 0){
          foreach( $terms as $term ) {
            echo '<p>
              <a href="'.home_url().'" class="breadLink">TOP</a>
              <a href="/blog" class="breadLink">ブログ一覧</a>
              <a href="'.get_term_link($term->slug,'blog_cate').'" class="breadLink">'.$term->name.'</a>
              <span>'.the_title().'</span>
            </p>';
          };
        };
      ?>
    </div>
  </div><!-- Breadcrumbs -->

  <section id="pageContent">

    <article id="pageArticle">
      <div class="wrapperL">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div>

            <h2 class="articleTitle"><?php the_title(); ?></h2>
            <?php
              // the content (pretty self explanatory huh)
              the_content();

              /*
              * Link Pages is used in case you have posts that are set to break into
              * multiple pages. You can remove this if you don't plan on doing that.
              *
              * Also, breaking content up into multiple pages is a horrible experience,
              * so don't do it. While there are SOME edge cases where this is useful, it's
              * mostly used for people to get more ad views. It's up to you but if you want
              * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
              *
              * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
              *
              */
              wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
              ) );
            ?>
          </div>

        <?php endwhile; ?>
        <?php endif; ?> 

      </div>
    </article>

  </section>

</main>

<?php get_footer(); ?>
