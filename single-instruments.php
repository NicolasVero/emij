<?php

get_header();

include 'template-parts/slider.php';


while (have_posts()) : 
	the_post();
	
	echo '<div class="post">';
?>   
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); 
	

    include 'template-parts/instruments/professeurs-loop.php';
    include 'template-parts/index/contact-form.php';
    

    ?>

<!-- //TODO A enlever ? -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.712025900769!2d1.0071511218552984!3d49.28290701451484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e11ed67ff583a1%3A0x9406924f7a782929!2sI.U.T%20d&#39;Elbeuf!5e0!3m2!1sfr!2sfr!4v1680598393911!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



</div>
			
<?php endwhile; 


    get_footer();

?>