<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>


	<div id="post-<?php the_ID(); ?>" class="entry-content entry-header-content">
	<header class="entry-header entry-header-video">
		<div class="entry-meta">
		
			<div class="post-dicht social2" rel="<?php the_ID(); ?>" id="x-<?php the_ID(); ?>" style="width:14px;height:18px;border:1px solid black;cursor:pointer;font-size:12px;padding-top:2px;padding-left:5px;margin:20px 20px 0 20px;color:black;float:right;">X</div> 
		
			<?php if($_GET['id']!="2" && $GLOBALS["nieuwe-bezoeker"] == 0) { ?> <p class="cat-links"><?php 
								the_title();
?></p><?php } ?>


		</div><!-- .entry-meta -->


		<div class="entry-meta">
			<!--<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a>
			</span>-->

			<?php //twentyfourteen_posted_on(); ?>

			<!--<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>-->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

		
	<div class="entry-content-image entry-header-image featured-page">

	
	<?php if($_GET['id']=="2" || $GLOBALS["nieuwe-bezoeker"] == 1) { ?> 
			<div id="achtergrond-welkom">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel1.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel2.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel3.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel4.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel5.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel6.gif" /><br>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/regel7.gif" />
			</div>
<?php } ?>
	
	<?php if($_GET['id']=="2" || $GLOBALS["nieuwe-bezoeker"] == 1) { ?> 
	
	<div id="page-content-container">
	<p class="page-title page-welcome" id="welkom-tekst">
		BODY IN REVOLT&nbsp;&nbsp;<span style="font-weight:normal;">|</span>&nbsp;&nbsp;LE CORPS EN REVOLTE&nbsp;&nbsp;<span style="font-weight:normal;">|</span>&nbsp;&nbsp;LICHAAM IN OPSTAND
	</p><?php } ?>
	
	
			
	
		<?php
			the_content();
			
		?>
	
		
	<?php if($_GET['id']=="2" || $GLOBALS["nieuwe-bezoeker"] == 1) { ?> </div> <?php } ?>
	
		</div>

<script> 
 $.ajaxSetup({cache:false});
  $("#x-<?php the_ID(); ?>").click(function(){
    $("#post-<?php the_ID(); ?>").animate({height:'0px'});	 
    	//$("#post-<?php the_ID(); ?>").html("");  
        	$url = "http://bodyinrevolt.ickamsterdam.com/";	 
	        history.pushState("", "", $url);
			return false;       
});
</script> 


</div>
