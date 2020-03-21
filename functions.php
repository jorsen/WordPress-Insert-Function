<?php
//WordPress Function.php
if(isset($_POST['submitreason'])){
    insert_reasoncomplete();
}
if(isset($_POST['submitdecline'])){
    insert_reasondecline();
}

function insert_reasoncomplete(){
    global $wpdb;

    $table=$wpdb->prefix.'reason';
    $id = isset( $_POST['id'] ) ? sanitize_text_field( $_POST['id'] ) : '';
    $post_id = isset( $_POST['post_id'] ) ? sanitize_text_field( $_POST['post_id'] ) : '';
    $reason = isset( $_POST['reason'] ) ? sanitize_text_field( $_POST['reason'] ) : '';
    $appointment = new WC_Appointment( $appointment_id );
    $appointment_id = $wp->query_vars['wcfm-appointments-details'];
    $post_data=array(
        'id' => NULL,
        'post_id' => $post_id,
        'reason' => $reason
    );
    $wpdb->insert( $table, $post_data,array('%s','%s','%s'));
    $page_url = home_url( $wp->request );
    $redirect_to = add_query_arg($page_url);

    wp_safe_redirect( $redirect_to );
    exit;
}

function insert_reasondecline(){
    global $wpdb;

    $table=$wpdb->prefix.'reason';
    $id = isset( $_POST['id'] ) ? sanitize_text_field( $_POST['id'] ) : '';
    $post_id = isset( $_POST['reasonpost_id'] ) ? sanitize_text_field( $_POST['reasonpost_id'] ) : '';
    $reason = isset( $_POST['reason_comment'] ) ? sanitize_text_field( $_POST['reason_comment'] ) : '';
    $appointment = new WC_Appointment( $appointment_id );
    $appointment_id = $wp->query_vars['wcfm-appointments-details'];
    $post_datadecline=array(
        'id' => NULL,
        'post_id' => $post_id,
        'reason' => $reason
    );
    $wpdb->insert( $table, $post_datadecline,array('%s','%s','%s'));
    $page_url = home_url( $wp->request );
    $redirect_to = add_query_arg($page_url);

    wp_safe_redirect( $redirect_to );
    exit;
}
?>