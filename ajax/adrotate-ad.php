<?php

$banner_id = $_GET['banner_id'];

if (preg_match('/^[0-9]*$/', $banner_id)) {
	require('../../../../wp-load.php');
	echo adrotate_ad($banner_id);
}

?>
