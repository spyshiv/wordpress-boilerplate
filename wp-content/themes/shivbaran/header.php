<?php
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<?php
		//the '__before_body' hook is used by TC_header_main::$instance->tc_head_display()
		do_action( '__before_body' );
	?>

	<body <?php body_class(); ?> <?php echo apply_filters('tc_body_attributes' , 'itemscope itemtype="http://schema.org/WebPage"') ?>>

    <?php do_action( '__before_page_wrapper' ); ?>

    <div id="tc-page-wrap" class="<?php echo implode( " ", apply_filters('tc_page_wrap_class', array() ) ) ?>">

  		<?php do_action( '__before_header' ); ?>

  	   	<header class="<?php echo implode( " ", apply_filters('tc_header_classes', array('tc-header' ,'clearfix', 'row-fluid') ) ) ?>" role="banner">
  			<?php
  				// The '__header' hook is used with the following callback functions (ordered by priorities) :
  				//TC_header_main::$instance->tc_logo_title_display(), TC_header_main::$instance->tc_tagline_display(), TC_header_main::$instance->tc_navbar_display()
  				do_action( '__header' );
  			?>
  		</header>
  		<?php
  		 	//This hook is used for the slider : TC_slider::$instance->tc_slider_display()
  			do_action ( '__after_header' )
  		?>