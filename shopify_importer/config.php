<?php
/*=======================================
 * General Settings 
=========================================*/
define('instant_update',true);
define('dataFOLDER',base_dir.'data/');
define('products_base_key','products');
define('collection_base_key','custom_collections');

define('product_category_term','product_cat');
define('product_tag_term','product_tag');
define('product_vendor_term','Brands');
define('product_type_term','Product Type');

define('product_status','publish');
define('product_post_type','product');
define('product_varient_post_type','product_variation');
define('product_author',1);


/*=======================================
 * Shopify Settings
========================================*/
define('site_url','https://v-belt-guys.myshopify.com/');
define('api_key','e928e1755d57ca9cd535796bf4135481');
define('api_pass','3e51335330146768d4c8ef5c321f1649');
define('product_fetch_limit','250');
define('collections_fetch_limit','250');


/*======================================
 * Shopify URL Settings
=======================================*/
define('product_count_url','admin/products/count.json');
define('product_json_url','admin/products.json');

define('collections_count_url','admin/custom_collections/count.json');
define('collections_json_url','admin/custom_collections.json'); 



/*======================================
 * File Save Settings
========================================*/
define('product_count_file','productsCOUNT.json');
define('product_json_file','product_json{$count}.json');
define('collections_count_file','collectionsCOUNT.json');
define('collections_json_file','collections_json{$count}.json');
$messageLogs = array();
?>
