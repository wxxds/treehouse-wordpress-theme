<?php get_header(); ?>

		<div class="container col-12 no-padding">
			<header class="clearfix sticky-top" id="showLeftPush">
			<?php 

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img class="" src="'. esc_url( $logo[0] ) .'">';
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}

?>
				
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