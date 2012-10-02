<?php
/*
Template Name: Front Page
 * The template for displaying the front page.
 *
 * @package Standard
 * @since 3.0
 */
?>
<?php get_header(); ?>
<?php $presentation_options = get_option( 'standard_theme_presentation_options' ); ?>

<div id="wrapper">
	<div class="container" id="player">
	<div class="row-fluid">
  <div class="span12">
    <div class="row-fluid">
      <div class="span6"><h1>discover.</h1><h1>build.</h1><h1>succeed.</h1></div>
      <div class="span6"><iframe src="http://player.vimeo.com/video/48627492" width="460" height="259" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/48627492">paisley driving the boat</a> from <a href="http://vimeo.com/jeremyandapril">Jeremy Bagwell</a> on <a href="http://vimeo.com">Vimeo</a>.</p></div>
    </div>
  </div>
</div></div>
	<!-- <div id="video-player"> <div id="player"> <iframe src="http://player.vimeo.com/video/50073448" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> </div> </div> -->
	<div class="container">
		<div class="row">

				<?php if ( 'left_sidebar_layout' == $presentation_options['layout'] ) { ?>
					<?php get_sidebar(); ?>
				<?php } // end if ?>
							
				<div id="main" class="<?php echo 'full_width_layout' == $presentation_options['layout'] ? 'span12 fullwidth' : 'span8'; ?> clearfix" role="main">
				
					
				
					<?php if ( have_posts() ) { ?>
						<?php while ( have_posts() ) {
							 the_post(); ?>
							<div id="post-<?php the_ID(); ?> format-standard" <?php post_class( 'post' ); ?>>
								<!-- <div class="post-header clearfix">
									<h1 class="post-title"><?php the_title(); ?></h1>	
								</div>  --><!-- /.post-header -->						
								<div id="content-<?php the_ID(); ?>" class="entry-content clearfix">
									<div class="content">
										<?php the_content(); ?>
									</div><!-- /.entry-content -->
								</div><!-- /.entry-content -->
							</div> <!-- /#post- -->
						<?php } // end while ?>
					<?php } // end if ?>
					<?php comments_template( '', true ); ?>
				</div><!-- /#main -->
			
				<?php if ( 'right_sidebar_layout' == $presentation_options['layout'] ) {  ?>
					<?php get_sidebar(); ?>
				<?php } // end if ?>
				
		</div><!--/ row -->
	</div><!--/container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>