#!/usr/bin/php
<?php
require_once './pulllist/key.php';
require_once './pulllist/pulllist.php';
require_once './patron/key_idm.php';

//create Pulllist object, let it collect the actual pulllist from WMS and if it is collected create HTML files
$pulllist = new Pulllist($config['wskey'],$config['secret'],$config['ppid'],$config_idm['wskey'],$config_idm['secret'],$config_idm['ppid']);

if ($pulllist->get_pulllist()) {
	$pulllist->items2html();
}


?>