<?php
/**
 * The template for Footer.
 *
 * @package Bits
 * @since Bits 1.0
 */
?>

<div style="clear: both"></div>
<div class="outer_footer_wrap">
  <div class="inner_footer_wrap">
    <div class="content">
      <div style="clear: both"></div>
      <div id="footer">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer2") ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer3") ) : ?>
        <?php endif; ?>
        <div style="clear: both"></div>
        &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Powered By Bits Wp Theme &amp; WordPress</div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body></html>