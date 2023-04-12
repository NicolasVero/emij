<?php

//GESTION DES EXTRAITS

function the_excerpt_posttypes($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo '<p class="excerpt-article">';
			echo mb_substr( $subex, 0, $excut );
			echo '[...]</p>';
		} else {
			echo '<p class="excerpt-article">' . $subex . '[...]</p>';
		}
		//echo '<span class="button"><i class="ti-arrow-right"></i>En savoir plus</span>';
	} else {
		echo '<p class="excerpt-article">' . $excerpt . '[...]</p>';
	}
}

function the_excerpt_news($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo '<p class="excerpt-article">';
			echo mb_substr( $subex, 0, $excut );
			echo '[...]</p>';
		} else {
			echo '<p class="excerpt-article">' . $subex . '[...]</p>';
		}
		//echo '<aside><button>Lire la suite<i class="ti-arrow-right"></i></button></aside>';
	} else {
		echo '<p class="excerpt-article">' . $excerpt . '[...]</p>';
	}
}