<?php

// don't call the file directly

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function action49_project_done() {
		global $wpdb;
		$id = intval($_POST["id"]);
		$status=2;
		$table = "wp_ks49_customer";
		if($wpdb->update( $table, array( 'status' => $status), array( "id" => $id)) === FALSE){
			echo "false";
		}else{
			echo "true";
		}
		wp_die();
}