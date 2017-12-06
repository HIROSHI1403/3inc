<?php

define('SRV_ROOT','/3inc-stage1');

define('GA','');
define('FB','');
define('TT','');
define('','');



function titles($meta_title,$meta_description){
	return array('title' => $meta_title,'discription' => $meta_description);
}

switch ($_SERVER["REQUEST_URI"]) {
	case '/':
		$title       = "株式会社トリニティ｜Trinity Inc.";
		$discription = "サブ｜株式会社トリニティ";
		$metas       = titles($title,$discription);
		break;

	default:
		$title       = "株式会社トリニティ｜Trinity Inc.";
		$discription = "サブ｜株式会社トリニティ";
		$metas       = titles($title,$discription);
		break;
}