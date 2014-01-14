<?php
/**
 * The template for Function. Make changes at your own risk.
 *
 * @package Bits
 * @since Bits 1.0
 */

function bits_setup(){
	// Add RSS links to <head> section
		add_theme_support( 'automatic-feed-links' );
			
	// Add Custom BG
		add_theme_support( 'custom-background' );
	
	// Enable post thumbnails
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(200, 200, true);

	// ADD POST FORMATS
		add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ) );

	// Editor Support
		add_editor_style();
}
add_action( 'after_setup_theme', 'bits_setup' );

// Set Content Width
if ( ! isset( $content_width ) )
	$content_width = 728;

// Odd Even Post Class
function bits_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'even' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'bits_post_class' );
global $current_class; 
$current_class = 'odd';
	
// Add Bread Crumbs
function bits_breadcrumb() {
	echo bloginfo('name');
	if (!is_front_page()) {
		echo ' <a href="';
		echo home_url();
		echo '">Home';
		echo "</a> / ";
		if (is_category() || is_single()) {
			the_category(' ');
			if (is_single()) {
				echo " / ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
	else {
		echo 'Home';
	}
}

// Add Widgets
function bits_widgets_init() {
	register_sidebar(array(
		'id' => 'main-sidebar',
		'name' => 'Main Sidebar',
		'before_widget' => '<div class="flex_100">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'footer-1',
		'name' => 'Footer1',
		'before_widget' => '<div class="flex_33">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'footer-2',
		'name' => 'Footer2',
		'before_widget' => '<div class="flex_33">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'footer-3',
		'name' => 'Footer3',
		'before_widget' => '<div class="flex_33">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action ( 'widgets_init', 'bits_widgets_init' );


// Add Template for comments and pingbacks
	if ( ! function_exists( 'bits_comment' ) ) :

function bits_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
  <div id="comment-<?php comment_ID(); ?>">
    <div class="comment-author vcard"> <?php echo get_avatar( $comment, 40 ); ?> <?php printf( __( '%s <span class="says">says:</span>', 'bits' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?> </div>
    <!-- .comment-author .vcard -->
    <?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation"> <?php echo 'Your feedback is awaiting moderation.' ?> </em> <br />
    <?php endif; ?>
    <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
      <?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'bits' ), get_comment_date(),  get_comment_time() ); ?>
      </a>
      <?php edit_comment_link( __( '(Edit)', 'bits' ), ' ' );
			?>
    </div>
    <!-- .comment-meta .commentmetadata -->
    
    <div class="comment-body">
      <?php comment_text(); ?>
    </div>
    <div class="reply">
      <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <!-- .reply --> 
  </div>
  <!-- #comment-##  -->
  
  <?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
<li class="post pingback">
  <p> <?php echo 'Pingback:' ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( __( '(Edit)', 'bits' ), ' ' ); ?>
  </p>
  <?php
			break;
	endswitch;
}
endif;
	
?>
