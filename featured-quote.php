<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


	<a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><div id="post-<?php the_ID(); ?>" class="entry-content entry-header-content">

	<header class="entry-header entry-header-video">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<p class="cat-links cat-links-featured"><?php 
$category = get_the_category(); 
if($category[0]){
echo $category[0]->cat_name;
}
?></p>
		</div><!-- .entry-meta -->
		<?php
			endif;
		?>

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
		<script type="text/javascript">
</script>
		<div class="entry-content-quote quote-header">
		
		
		
		
		<div class="quote-anim-container"><div class="quote-anim" id="quote-<?php the_ID(); ?>">
		<?php
		$content = get_the_content();
		echo strip_tags($content);
		?>
	
		</div></div>

		
		
		
				
		
		</div> <!-- .entry-content-quote -->
	</div></a><!-- .entry-content -->
	
	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	
		    <div id="single-post-container-<?php the_ID(); ?>" class="single-post-container"><?php	if(isset($_GET['id'])) {
		    				include("single-loaded.php");
		    			}
		    			?>
</div>
