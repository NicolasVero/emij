<?php
while (have_posts()) : 
	
	echo '<div class="post">';
	the_post();
?>   
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); 
	

    include 'templates-part/professeurs-loop.php';

    echo do_shortcode('[contact-form-7 id="48" title="Formulaire de contact"]');
        // the_widget('WP_Widget_Archives');
        // the_widget('contact_widget');

    ?>

</div>
			
<?php endwhile; 
?>