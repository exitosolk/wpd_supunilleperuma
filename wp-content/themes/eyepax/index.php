<?php

get_header();

?>

<div class="wpd-body">
<div class="row">
<div class="col-md-12">
		<h4 class="wpd-heading4">devil's</h4>
		<div class="wpd-h1wrapper">
			<h1 class="wpd-heading1">staircase</h1>
			<hr class="wpd-underline">
		</div>
	</div>
	</div>
<div class="row">	
<div class="col-md-7">
<h6 class="wpd-heading6">Devil's way but end is Heaven</h6>

<p class="wpd-para1">Very beautiful mist way with adventure hiking expirience also always with you.you can get a great snaps always that steps.</p>

<button class="wpd-explorebtn">explore</button>


</div></div></div>
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <!-- <article class="post">
            <h2><a href="<?php //the_permalink() ?>"><?php //the_title() ?></a></h2>
			<?php// the_content() ?>
        </article> -->
	
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer();

?>