<?php
// Get Titan value for display with slider and looping 
	$titan = TitanFramework::getInstance( 'budayasaya' );
	$main_slider = $titan->getOption( 'main_slider' );
	$post_list_1 = $titan->getOption( 'post_list_1' );
	$post_list_2 = $titan->getOption( 'post_list_2' );
	$post_thumbnails_1 = $titan->getOption( 'post_thumbnails_1' );
	$post_thumbnails_2 = $titan->getOption( 'post_thumbnails_2' );
	$address = $titan->getOption( 'address' );
	$text_about = $titan->getOption( 'about' );
	$image_id_1 = $titan->getOption( 'image_menu_1' );
	$image_id_2 = $titan->getOption( 'image_menu_2' );
	$image_id_3 = $titan->getOption( 'image_menu_3' );
	$image_id_4 = $titan->getOption( 'image_menu_4' );
	
	//$image_menu = intval( array( $titan->getOption( 'image_menu_1' ), $titan->getOption( 'image_menu_2' ), $titan->getOption( 'image_menu_3' ), $titan->getOption( 'image_menu_4' ) ) );
	$image_src_1 = $image_id_1;
	if ( is_numeric( $image_id_1 )) {
		$imageAttachment_1 = wp_get_attachment_image_src( $image_id_1 );
		$image_src_1 = $imageAttachment_1[0];
	}

	$image_src_2 = $image_id_2;
	if ( is_numeric( $image_id_2 )) {
		$imageAttachment_2 = wp_get_attachment_image_src( $image_id_2 );
		$image_src_2 = $imageAttachment_2[0];
	}

	$image_src_3 = $image_id_3;
	if ( is_numeric( $image_id_3 )) {
		$imageAttachment_3 = wp_get_attachment_image_src( $image_id_3 );
		$image_src_3 = $imageAttachment_3[0];
	}

	$image_src_4 = $image_id_4;
	if ( is_numeric( $image_id_4 )) {
		$imageAttachment_4 = wp_get_attachment_image_src( $image_id_4 );
		$image_src_4 = $imageAttachment_4[0];
	}
?>