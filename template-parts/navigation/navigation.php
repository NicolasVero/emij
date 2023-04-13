<!-- <span ><p class="encadre-menu">Testeuh</p></span> -->

<div class="navigation-menu-container">
	<div class="navigation-logo">
		<?php require "$directory/assets/svg/logo.php"; ?>
		<h2>Ecole de jazz et musiques actuelles</h2>
	</div>

<?php
	construct_menu_enseignements_1(wp_get_nav_menu_items('enseignement_1'));

?>



	<div class="navigation-menu-links">
		
		<div class="navigation-enseignements">
			<span><h3 class="encadre-menu">Enseignements</h3></span>
			<div>	
				<?php
					wp_nav_menu(array('theme_location' => 'enseignement_1')); 
					wp_nav_menu(array('theme_location' => 'enseignement_2')); 
				?>
			</div>
		</div>
		
		<div class="navigation-ecoles">			
			<span><h3 class="encadre-menu">Ecoles</h3></span> 
			<?php
				wp_nav_menu(array('theme_location' => 'ecole')); 
			?>
		</div>
	
	</div>	
</div>

  


<?php

function construct_menu_enseignements_1($datas) {
	
	foreach($datas as $data) {
		echo "<ul>";
		echo "<li>" . $data->description . "</li>";
		echo "<li>" . $data->title . "</li>";
		echo "<li>" . $data->url . "</li>";
		echo "</ul>";
	}
}