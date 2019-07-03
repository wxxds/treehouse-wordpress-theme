<!doctype html>
<html class="no-js">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<title><?php the_title();?></title>
	

	<?php wp_head(); ?>
</head>
	
	
	
<script>
var vid = document.getElementById("myVideo");
var vid2 = document.getElementById("myVideo2");
var vid3 = document.getElementById("myVideo3");
	
function enablePreload() { 
  vid.preload = "auto";
} 


function enablePreload() { 
  vid2.preload = "auto";
} 
	
function enablePreload() { 
  vid3.preload = "auto";
} 
	
} 
</script> 
	
	
	<script>
    lightbox.option({
       'maxWidth': 1920,
    'maxHeight': 1080
    })


</script>	
<body class="cbp-spmenu-push <?php the_title();?>-<?php the_ID();?>" <?php body_class(); ?> >


<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3></h3>
	<p>
<?php $blog_title = get_bloginfo(); ?>
	</p>
<?php wp_nav_menu
( array( 'theme_location' => 'top-menu',
'menu_class' => 'mouchen-nav' 

) ); 

?>

<span class="glyphicon glyphicon-search" aria-hidden="true"></span>

		</nav>
	

	
