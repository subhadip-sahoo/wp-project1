<?php
/* Template Name: Customers */
get_header();
global $post;
?>
<div class="main_contaner">
<?php /*?><h2><?php the_title();?></h2>
<?php
    $get_all_images = $wpdb->get_results("SELECT `meta_value` FROM {$wpdb->prefix}postmeta WHERE meta_key = '_easy_image_gallery' AND post_id = {$post->ID}", ARRAY_A);
    if(!empty($get_all_images)){
        foreach ($get_all_images as $image_ids) {
            $ids = explode(',', $image_ids['meta_value']);
            foreach ($ids as $id) {
                $get_img_src = $wpdb->get_results("SELECT guid FROM {$wpdb->prefix}posts WHERE ID = {$id}", ARRAY_A);
                if(!empty($get_img_src)){
                    foreach ($get_img_src as $img_src) {
                        $img = vt_resize('', $img_src['guid'], 175, 129, TRUE);
?>
                    <a class="fancybox" href="<?php echo $img_src['guid'];?>" data-fancybox-group="gallery"><img src="<?php echo $img['url'];?>" alt="" /></a>
<?php
                    }
                }   
            }
        }
    }
?>
<br><br><br><?php */?>

<h3>Few of Our Clients</h3>
<div class="centerclass">
<?php 
    $all_customers = get_post_meta($post->ID, 'wpcf-logo', false);
    foreach($all_customers as $customer){
?>
<div class="clientlogo">
    <img border="0" src="<?php echo $customer;?>">
</div>
<?php
    }
?></div>

<div class="clr"></div>
<!--<p>Please click on the client logos to see the product (s) supplied</p>-->
<div class="clr"></div>
</div>
<?php get_footer();?>

