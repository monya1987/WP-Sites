<?php
/**
 * Template Name: Update Page
 *
 * @package WordPress
 * @subpackage Baos
 * @since 2017
 */


function Generate_Featured_Image( $image_url, $post_id  ){
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if(wp_mkdir_p($upload_dir['path']))
        $file = $upload_dir['path'] . '/' . $filename;
    else
        $file = $upload_dir['basedir'] . '/' . $filename;
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => 'generated',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
}



$json = include("json.php");
// removing all posts by author 99
$postsToRemove = get_posts(array('author' => 99, 'posts_per_page' => -1));
foreach ($postsToRemove as $key => $data) {
    $post_ID = $data->ID;
    wp_delete_post($post_ID);
}
// removing images by post_content 'generated'
$imagePostsToRemove = get_posts(array(
    'post_type'=> 'attachment',
    'post_content' => 'generated',
    'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png'
));
foreach ($imagePostsToRemove as $key => $data) {
    $post_ID = $data->ID;
    wp_delete_attachment($post_ID, true);
}

$array = json_decode($json, true);

foreach ($array as $key => $value) {
    $developerTag = mb_strtolower(mb_ereg_replace(' ', '-', $value['fields']['developer']));
    $areaTag = mb_strtolower(mb_ereg_replace(' ', '-', $value['fields']['area']));
    $post_data = array(
        'post_title'     => $value['post_title'],
        'post_content'   => $value['post_content'],
        'post_status'    => 'publish',
        'post_author'    => 99,
        'post_category'  => array(6),
        'comment_status' => 'closed',
        'post_name'      => urlencode(mb_ereg_replace(' ', '_', $value['post_name'])),
        'post_parent'    => 0,
        'tags_input'     => array($developerTag, $areaTag)
    );
    // Вставляем данные в БД
    $post_id = wp_insert_post( wp_slash($post_data) );
    update_field( "field_5e0df56ad836b", $value['fields']['address'] , $post_id ); // Адрес.
    update_field( "field_5e0df6e92d0aa", $value['fields']['houseClass'], $post_id ); // Класс.
    update_field( "field_5e0df6fb2d0ab", $value['fields']['cnt_houses'], $post_id ); // Количество домов.
    update_field( "field_5e0df70e2d0ac", $value['fields']['floors'], $post_id ); // Этажность.
    update_field( "field_5e0df7242d0ad", $value['fields']['technologies'], $post_id ); // Технология строительства.
    update_field( "field_5e0df7372d0ae", $value['fields']['walls'], $post_id ); // Стены.
    update_field( "field_5e0df73f2d0af", $value['fields']['warming'], $post_id ); // Утепление.
    update_field( "field_5e0df7492d0b0", $value['fields']['heating'], $post_id ); // Отопление.
    update_field( "field_5e0df7562d0b1", $value['fields']['ceiling'], $post_id ); // Потолки.
    update_field( "field_5e0df76a2d0b2", $value['fields']['cnt_aparts'], $post_id ); // Количество квартир.
    update_field( "field_5e0df7832d0b3", $value['fields']['сondition'], $post_id ); // Состояние квартиры.
    update_field( "field_5e0df78b2d0b4", $value['fields']['closed_territory'], $post_id ); // Закрытая территория.
    update_field( "field_5e0df79e2d0b5", $value['fields']['parking'], $post_id ); // Паркинг.
    update_field( "field_5e0df8052d0b7", $value['fields']['price'], $post_id ); // Цена.
    update_field( "field_5e0f647421b0c", $value['fields']['room1'], $post_id ); // 1 комнатные от м2
    update_field( "field_5e0df9042d0ba", $value['fields']['room2'], $post_id ); // 2 комнатные от м2
    update_field( "field_5e0df9152d0bb", $value['fields']['room3'], $post_id ); // 3 комнатные от м2
    update_field( "field_5e15dd8e08c4d", $value['fields']['room4'], $post_id ); // 4 комнатные от м2
    update_field( "field_5e15dd9f08c4e", $value['fields']['room2flors'], $post_id ); // Двухуровневые от м2.
    update_field( "field_5e0e069623934", $value['fields']['area'], $post_id ); // Район.
    update_field( "field_5e0e06af23935", $value['fields']['developer'], $post_id ); // Застройщик

    Generate_Featured_Image( 'http://garant.od.ua/wp-content/themes/new-apart/images/'.$value['image'], $post_id );
}
