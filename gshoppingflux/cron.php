<?php

include dirname(__FILE__) . '/../../config/config.inc.php';
include dirname(__FILE__) . '/../../init.php';
include dirname(__FILE__) . '/gshoppingflux.php';

$start = (float) array_sum(explode(' ', microtime()));
$module = new GShoppingFlux();
$shop_id = Shop::getContextShopID();
$local_inventory = Tools::getIsset('local') && (bool) Tools::getValue('local');
$reviews = Tools::getIsset('reviews') && (bool) Tools::getValue('reviews');
$module->generateShopFileList($shop_id, $local_inventory, $reviews);
$end = (float) array_sum(explode(' ', microtime()));
exit('OK, export completed successfully. ' . ($end - $start) . 'sec');
