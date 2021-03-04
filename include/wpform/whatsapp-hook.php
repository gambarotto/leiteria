<?php
/**
 * Integrate WPForms with CRM
 *
 * @author Diego
 * 
 * @param array $fields
 * @param array $entry
 * @param array $form_data
 * @param int $entry_id
 */
function dlc_wpform_whatsapp_redirect( $fields, $entry, $form_data, $entry_id ) {

	$url = `https://api.whatsapp.com/send?phone=551127091063&text=$Oi%20gostaria%20de%20fazer%20um%20pedido`;
	$body = array(
		'name'                => $fields['1']['value'],
		'email'               => $fields['2']['value'],
	);
		//$request = wp_remote_post( add_query_arg( $args, 'https://api.whatsapp.com/send?phone=551127091063&text=$' .'oi' ) );
		$wp_redirect($url);
		
}
