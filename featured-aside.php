<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


	<div class="entry-content entry-header-content entry-content-longtext-container" id="post-<?php the_ID(); ?>">
	
		<header class="entry-header entry-header-video">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<p class="cat-links cat-links-aside cat-links-featured"><a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php 
$category = get_the_category(); 
if($category[0]){
echo $category[0]->cat_name;
}
?></a></p>
		</div><!-- .entry-meta -->
		<?php
			endif;

			/*if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;*/
?>
	</header><!-- .entry-header -->
	
		<div class="entry-content-longtext longtext-header">
		<?php
			the_content();
			
		?>
		</div>
	</div><!-- .entry-content -->

	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
		    <div id="single-post-container-<?php the_ID(); ?>" class="single-post-container">
			    <?php	if(isset($_GET['id'])) {
		    				include("single-loaded.php");
		    			}
		    			?>

		    </div>
