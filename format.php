<div class="content-format-standard">
  <div class="post-format-icon"></div>
  <?php if ( has_post_thumbnail()) { ?>
  <?php the_post_thumbnail(); ?>
  <h2 id="post-<?php the_ID(); ?>"  class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
    <?php if ( get_the_title() == '' ) { ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
    <?php } else { ?>
    <?php the_title(); ?>
    <?php } ?>
    </a></h2>
  <?php the_excerpt(); ?>
  <?php } else { ?>
  <h2 id="post-<?php the_ID(); ?>"  class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
    <?php if ( get_the_title() == '' ) { ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
    <?php } else { ?>
    <?php the_title(); ?>
    <?php } ?>
    </a></h2>
  <?php the_excerpt(); ?>
  <?php } ?>
  <div class="clear"></div>
</div>
