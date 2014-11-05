<?php
function db_connect() {
	$connection = mysql_connect(HOST, USER, PASS) 
		or die("No connect" . mysql_error());
		
		if(!$connection || !mysql_select_db(DB, $connection)) {
			return FALSE;
		}
		return $connection;
}

function db_result_to_array($result) {
	$res_array = array();
	$count = 0;
	while($row = mysql_fetch_array($result)) {
		$res_array[$count] = $row;
		$count++;
	}
	return $res_array;
}

function get_menu() {
	db_connect();
	
	$sql = sprintf("SELECT title, title_url FROM `menu`");
	$res = mysql_query($sql);
	$res = db_result_to_array($res);
	
	return $res;
}

function get_page_title($title) {
	db_connect();
	
	$sql = sprintf("SELECT title, keywords, description FROM `menu` WHERE title_url = '%s'",
					mysql_real_escape_string($title));
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	
	return $row;
}