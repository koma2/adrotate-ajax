<?php

//$group_id = 1; // XXX

$group_id = $_GET['group_id'];

if (preg_match('/^[0-9]*$/', $group_id)) {
	require('../../../../wp-load.php');
	echo adrotate_group($group_id);
}

?>
