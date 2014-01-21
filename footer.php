<?php
/**
 * The template for Footer.
 *
 * @package Bits
 * @since Bits 1.0
 */
?>

<div class="clear"></div>
<div class="outer_footer_wrap">
  <div class="inner_footer_wrap">
    <div class="content">
      <div id="footer">
        <div class="footer-widgets">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
          <?php endif; ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer2") ) : ?>
          <?php endif; ?>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer3") ) : ?>
          <?php endif; ?>
          <div class="clear"></div>
        </div>
        <div class="footer-credit">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Powered By Bits Wp Theme &amp; WordPress</div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body></html>