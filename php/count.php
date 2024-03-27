<!-- set Smart Custom Fields-->
<!-- 1、获取数组 -->
<?php
  $images = SCF::get('R_image');
  echo wp_get_attachment_image($images[0]['result_image'] , 'large' );
?>

<!-- 2、获取单个 -->
<?php $time = SCF::get('result_time'); echo $time; ?>

<!-- 3、资料链接 -->

<!-- terms获取 -->
<!-- https://recooord.org/wordpress-get-the-term/ -->

<!-- Smart Custom Fields -->
<!-- https://www.i-ryo.com/entry/2018/12/05/210617 -->

<!-- WordPress 自定义查询 WP_Query 所有参数 -->
<!-- https://www.cnblogs.com/kinblog/p/12216560.html -->

<!-- 文章路径按照数字设置 -->
<!-- https://yuki.world/wordpress-post-permalink-customize/ -->

<!-- 设置 Custom Post Type UI -->
<!-- https://webst8.com/blog/wordpress-custom-post-type-ui/ -->

<!-- Smart Custom Fields の日付ピッカーの使用方法 -->
<!-- https://b-risk.jp/blog/2019/12/smart-custom-fields-datepicker/ -->

<!-- 图片追加的方式 -->
<?php echo get_template_directory_uri(); ?>/library/images/txt_page_blog.svg"

<!-- 缩略图 -->
<?php the_post_thumbnail('full', array( 'alt' => trim(strip_tags( $post->post_title )), 'title'    => trim(strip_tags( $post->post_title )),'class' => 'homepage-thumb' )); ?>

<!-- 日期 -->
<!-- 可以设置日期格式 -->
<?php echo get_the_time('Y年m月d日');?>
<?php echo get_the_date('Y年m月d日');?>
<!-- 不能设置 -->
<?php get_the_time(get_option('date_format'));?>

<!-- 主题文件包 -->
<!-- https://github.com/squibbleFish/theme-bones/tree/master -->

<!-- form插件 -->
<!-- MW WP Form -->