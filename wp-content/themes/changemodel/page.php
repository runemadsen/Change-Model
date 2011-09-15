<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="container">
		
		<div id="header">
			<div id="logo">
				<a href="http://itp.nyu.edu/changemodel/">
					<img width="300" height="100" alt="Just another WordPress site" src="http://itp.nyu.edu/changemodel/wp-content/uploads/2011/08/cropped-change_model.jpg" />
				</a>
			</div>

			<ul class="menu" id="menu-change-model">
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187" id="menu-item-187">
					<a href="http://itp.nyu.edu/changemodel/?page_id=71">About</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191" id="menu-item-191">
					<a href="http://itp.nyu.edu/changemodel/?page_id=2">Program</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-116 current_page_item menu-item-186" id="menu-item-186">
					<a href="http://itp.nyu.edu/changemodel/?page_id=116">People</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188" id="menu-item-188">
					<a href="http://itp.nyu.edu/changemodel/?page_id=17">Workshops</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189" id="menu-item-189">
					<a href="http://itp.nyu.edu/changemodel/?page_id=13">Registration</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190" id="menu-item-190">
					<a href="http://itp.nyu.edu/changemodel/?page_id=10">Why</a>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190" id="menu-item-190">
					<a href="#">Wiki</a>
				</li>
			</ul>               
		</div>
		
		<div id="left">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
			
				<h1><?php the_title(); ?></h1>

				<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				</div>

				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

			</div>

			<?php //comments_template(); ?>

			<?php endwhile; endif; ?>
			
		</div>
		
		<div id="right">
			<?php get_sidebar(); ?>
		</div>
		<div class="clear"></div>

		<?php get_footer(); ?>
	
</body>

</html>


















	
