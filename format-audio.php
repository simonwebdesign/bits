
<div class="content-format-audio">
  <div class="post-format-icon"></div>
    <h2 id="post-<?php the_ID(); ?>"  class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
    <?php if ( get_the_title() == '' ) { ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
    <?php } else { ?>
    <?php the_title(); ?>
    <?php } ?>
    </a></h2>
  <?php the_content(); ?>
</div>
