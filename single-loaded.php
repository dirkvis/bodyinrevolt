<style type="text/css">
	
	.social:hover {
		cursor:pointer;
	}

<?php if (has_post_format( 'Gallery' )) { ?>

.loaded-content-container div p {
	font-size: 1em;
}

.loaded-content-container div p img {
	width:auto;
	height: auto;
}

div.loaded-tags {
	clear:both;
}

<?php } else { ?>

.loaded-content-container div p {
	font-size: 2em;
}

<?php } ?>

@-ms-viewport {
	width: device-width;
}

@viewport {
	width: device-width;
}

@media screen and (min-width: 100px) {

	.loaded-content, 
	.loaded-content p {
		font-size: 0.5em;
	}
	
	
	.loaded-content-container {
		background-color: #111;
		color: #eee;
		padding: 2em;
	}
	
	.social {
		height:8px;
		width:8px;
		top:-10px;
		right:-10px;
		position:relative;
		float:right;
		margin:12px !important;
		font-size:5px;
		text-align:center;
	}
	
	.social img { 
		width: 24px;
		height: auto;
	}
	
	#social-print {
		display: none;
	}
	
	.social2 {
		top:-25px;
		right:-25px;
		position:relative;
		float:right;
		margin:8px !important;
		text-align:center;
	}
}

@media screen and (min-width: 672px) {

	.loaded-content, 
	.loaded-content p {
		font-size: 0.7em;
	}
	
	
	.loaded-content-container {
		background-color: #111;
		color: #eee;
		padding: 4em;
	}
	
	.social {
		height:48px;
		width:48px;
		top:-60px;
		right:-60px;
		position:relative;
		float:right;
		margin:10px !important;
		font-size:50px;
		text-align:center;
	}
	
	#social-print {
		display: block;
	}
	
	.social img { 
		width: 48px;
		height: auto;
	}
	
	.social2 {
		top:-65px;
		right:-65px;
		position:relative;
		float:right;
		margin:20px !important;
		text-align:center;
	}
}

@media screen and (min-width: 1200px) {

	.loaded-content, 
	.loaded-content p {
		font-size: 1em;
	}
	
	.loaded-content-container {
		background-color: #111;
		color: #eee;
		padding: 10em;
	}
	
	.social {
		height:60px;
		width:60px;
		top:-100px;
		right:-100px;
		position:relative;
		float:right;
		margin:10px !important;
		font-size:50px;
		text-align:center;
	}
	
	#social-print {
		display: block;
	}
	
	.social img { 
		width: 60px;
		height: auto;
	}
	
	.social2 {
		top:-150px;
		right:-150px;
		position:relative;
		float:right;
		margin:20px !important;
		text-align:center;
	}
}

</style>


<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
    
    
   //dichtklappen van posts      
 
 $.ajaxSetup({cache:false});
 
 /*$(".post-dicht").click(function(){
  	var post_rel = $(this).attr("rel");
    $("#single-post-container-" + post_rel).animate({height:'0px'});
    }); // goeie code, maar hij klapt niet meer goed open...*/
           
        $(".post-dicht").click(function(){
            var post_rel = $(this).attr("rel");
            //$("#single-post-container-" + post_rel).animate({height:'0px'},500);
			$("#single-post-container-" + post_rel).html("");	
        	$url = "http://bodyinrevolt.ickamsterdam.com/";	 
	        history.pushState("", "", $url);
			return false;
        }); 
      
      
</script>

	<div class="loaded-content-container">

	<div class="post-dicht social2" rel="<?php the_ID(); ?>" style="width:20px;height:20px;border:1px solid white;cursor:pointer;font-size:12px;padding-top:2px;margin:0px 0 0 20px;">X</div> 

<div class="social" onClick="window.print()" id="social-print"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/print.jpg" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/print-hover.jpg'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/print.jpg'" width="80px"></div>

<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo curPageURL(); ?>"><div class="social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/mail-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png'" width="80px"></div></a>

<a href="javascript:fbShare('<?php echo curPageURL(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)"><div class="social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png'" width="80px"></img></div></a>

<a class="twitter popup" href="http://twitter.com/share"><div class="twitter-share-button social"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-hover.png'" onmouseout="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png'" width="80px"></img></div></a>

<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>

	<div class="loaded-content">

						<p><?php the_title(); ?></p>
		
						<?php the_content(); ?>
						
						</div>
				<div class="loaded-excerpt" style="font-size:0.5em;">
                <?php 
                	if ( !has_excerpt() ) {
						echo '';
					} else { 
						the_excerpt();
					}?>
                	
				</div>
				<div class="loaded-tags">
                <p style="font-size:1em;">Tags: <?php the_tags('', ', ', ', ');?>
                <?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?></p>

				</div>
          
	</div>
	
