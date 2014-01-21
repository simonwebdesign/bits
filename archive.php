<?php
/**
 * The template for displaying Archive.
 *
 * @package Bits
 * @since Bits 1.0
 */

get_header(); ?>
<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <div class="flex_100">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if ( function_exists( 'sharing_display' ) ) remove_filter( 'the_content', 'sharing_display', 19 ); ?>
								<?php if ( function_exists( 'sharing_display' ) ) remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
        <div class="top-line"> </div>
        <div class="postdate center">
          <ul>
            <li class="posttime">
              <?php the_time('G:i'); ?>
            </li>
            <li class="post-status-icon <?php if ( get_post_format() ) { echo get_post_format_string( get_post_format() ); } else { echo 'Standard'; } ?>">
              <?php
												$format = get_post_format();
												get_template_part( 'icon', $format );
												?>
            </li>
            <li class="postmonth">
              <?php the_time('m/d') ?>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div class="pointer-wrap">
            <div class="pointer">&#9830;</div>
          </div>
          <div class="flex_100">
            <div class="entry"><div class="flex_pad">
              <?php get_template_part( 'format', get_post_format() ); ?></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <?php endwhile; ?>
        <?php get_template_part( '/inc/nav' );?>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
            <div class="clear"></div>

</div>

<?php get_footer(); ?>
