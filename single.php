<?php 
/**
 * The template for displaying Single Posts.
 *
 * @package Bits
 * @since Bits 1.0
 */
get_header(); ?>

<div class="outer_wrap">
  <div class="inner_wrap">
    <div class="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
      <h1 class="entry-title center">
        <?php the_title(); ?>
        <?php edit_post_link('Edit'); ?>
      </h1>
      <div class="bread-crumb center">
        <?php bits_breadcrumb();?>
      </div>
      <div class="postmetadata center">
        <?php get_template_part('inc/meta'); ?>
      </div>
      <div class="flex_vert_pad"></div>
      <div class="flex_100">
        <div class="flex_100">
          <div <?php post_class('slideDown') ?> id="post-<?php the_ID(); ?>">
            <div class="entry">
              <?php the_content(); ?>
            </div>
            <div class="postmetadata">
              <div class="author">
                <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); }?>
                <div class="authorinfo">
                  <h3>About <span rel="author">
                    <?php the_author_posts_link(); ?>
                    </span> </h3>
                  <?php the_author_meta('description'); ?>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="comment-block">
            <?php comments_template(); ?>
          </div>
          <?php endwhile; endif; ?>
          <div>
            <?php wp_link_pages(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
