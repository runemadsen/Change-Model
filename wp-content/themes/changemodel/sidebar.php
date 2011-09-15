<div id="sidebar">

	<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
		<h2>Sessions</h2>
		<ul id="sessions">
    	<?php wp_list_pages('title_li=&exclude=8' ); ?>
		</ul>
    
   	<?php wp_loginout(); ?>
	
	<?php endif; ?>

</div>