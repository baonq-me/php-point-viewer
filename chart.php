﻿<?php
session_start();
include_once('config/config.php');
include_once('class/xtemplate/xtemplate.class.php');
include_once('function/function.php');
		foreach ($_SESSION['chart'] as $class => $point) {
			$chart['total_point'][$class] = $point['total_point'];
			$chart['total_add_point'][$class] = $point['total_add_point'];
			$chart['total_subtr_point'][$class] = $point['total_subtr_point'];
		}
$tpl->parse('main');
$tpl->out('main');
?>