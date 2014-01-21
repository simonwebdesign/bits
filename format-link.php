<div class="content-format-link">
  <div class="post-format-icon"></div>
    <h2 id="post-<?php the_ID(); ?>"  class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
    <?php if ( get_the_title() == '' ) { ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link">No Title</a>
    <?php } else { ?>
    <?php the_title(); ?>
    <?php } ?>
    </a></h2>
  <?php if (has_post_format('link')): ?>
  <?php
            $content = get_the_content();
            $linktoend = stristr($content, "http" );
            $afterlink = stristr($linktoend, ">");
            if ( ! strlen( $afterlink ) == 0 ):
            $linkurl = substr($linktoend, 0, -(strlen($afterlink) + 1));
            else:
            $linkurl = $linktoend;
            endif;
    ?>
  <a href="<?php echo $linkurl; ?>">
  <div class="post-format-icon"></div>
  <?php the_content(); ?>
  </a>
  <?php endif; ?>
</div>
