<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include(dirname(__FILE__).'/gshoppingflux.php');

$start = (float) array_sum(explode(' ',microtime()));
$module=new GShoppingFlux();
$shop_id = Shop::getContextShopID();
$local_inventory = Tools::getIsset('local') && (bool)Tools::getValue('local');
$module->generateShopFileList($shop_id, $local_inventory);
$end = (float) array_sum(explode(' ',microtime()));
die ('OK, export completed successfully. '.($end-$start).'sec');

?>
