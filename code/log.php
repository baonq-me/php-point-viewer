<?php
session_start();
///////		sub function		/////////////////////////////////
function show_site_access() {
	global $tpl;
	$tpl->assign('count_access', show_count('access'));
?>