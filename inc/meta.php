<?php
/**
 * The template for Meta Info.
 *
 * @package WordPress
 * @package Bits
 * @since Bits 1.0
 */
 ?>

<div class="meta">
  <span class="meta_author"><em>by</em>
  <?php the_author() ?>
  <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
  <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?>

</div>
