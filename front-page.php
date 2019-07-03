<?php get_header(); ?>

<div id="fullscreenFela" style="display:none;">
	
</div>

		<div class="container col-12 no-padding">
			<header class="clearfix sticky-top" id="showLeftPush">
			<?php 

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img class="img-fluid float-left" src="'. esc_url( $logo[0] ) .'">';
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}

?> <span class="text-white float-left mark-words">Mouche n MILK</span>
				
			</header>
			<div class="main" style="display:none;">
				<section>
					<h2>Slide Menus</h2>
					<!-- Class "cbp-spmenu-open" gets applied to menu -->
					<button id="showLeft">Show/Hide Left Slide Menu</button>
					<button id="showRight">Show/Hide Right Slide Menu</button>
					<button id="showTop">Show/Hide Top Slide Menu</button>
					<button id="showBottom">Show/Hide Bottom Slide Menu</button>
				</section>
				<section class="buttonset">
					<h2>Push Menus</h2>
					<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
					<button>Show/Hide Left Push Menu</button>
					<button id="showRightPush">Show/Hide Right Push Menu</button>
				</section>
			</div>
			
			<!--- good shit goes here---->
			
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="byebyevideo">		
<div class="row">
	
	
<div class="cover">
<p class="h2 text-white" style="color:#fff;">
Mouche n MILK	
	</p>
<P class="text-white">
Giving you the opportunity to re explore Africa through the lens of an artist by changing the depiction of it one country at a time.
	</P>
	

	<div class="downArrow bounce">
  <img  id="hide" width="80" height="80" alt="" src="https://www.mouchenmilk.com/wp-content/uploads/2019/05/arrow-down.png" />
</div>
	
	
</div>

<div class="video-wrapper hidden-xs" data-video-id="Jb9KypSdLaI"  data-video-start="17" data-video-end="140" data-video-width-add="100" data-video-height-add="100" style="height: 800px;">
  <div class="video-overlay" style="background-color: transparent; opacity: .002"></div>
					  <div class="tv">
						    <div class="screen mute" id="tv"></div>
					  </div>
				</div>	
	
	
	
</div>
			</div>
			
			
					<!---<p class="h1 page-title"><?php the_title();?></p>--->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	   
				   <?php if (have_posts()) : while(have_posts()) : the_post();?>
				    
				   
	
			
		
		<?php the_content();?>
					<?php endwhile; endif;?>
				</div>
				    

			
			<!--- good shit starts here --->
			
			
			
		</div>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
	
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>






<?php get_footer(); ?>