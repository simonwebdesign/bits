<?php
/**
 * The template for Header.
 *
 * @package Bits
 * @since Bits 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
<title>
<?php bloginfo('name'); ?>
<?php wp_title('|'); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="to-top-jquery"><a href="#" onclick="totop();"><img src="<?php bloginfo('template_directory') ?>/images/to-top-jquery@2x.png" width="30" height="30" /></a></div>
<div class="outer_header_wrap">
  <div class="inner_header_wrap">
    <div id="header" class="flex_100 center">
      <h1><a href="#" id="pull">&#9776;</a> <a href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
        </a></h1>
      <div class="description">
        <?php bloginfo('description'); ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="outer_header_wrap">
  <div class="inner_header_wrap">
    <nav>
      <div id="navigation" class="flex_100">
        <?php wp_nav_menu( array('menu' => 'Long Menu' )); ?>
      </div>
    </nav>
  </div>
</div>
<div class="clear"></div>
