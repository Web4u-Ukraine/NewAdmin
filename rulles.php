<?php
ini_set('short_open_tag', '0');
date_default_timezone_set('Europe/Kiev');
session_start();
$login=$_SESSION['admin'];
$access=$_SESSION['access'];
$puth='/contrast/admin';
$lang='rus';
ini_set("display_errors", "0");
error_reporting(E_ALL);

$inputstring=($_SERVER["REQUEST_URI"]);
$inputstring=str_replace(array("(",")","'","+"),'',$inputstring);
$splitArray = explode('/',$inputstring); 

if ($arg1=='admin'){
	$arg1=$splitArray[2];
	$arg2=$splitArray[3];
	$arg3=$splitArray[4];
	$arg4=$splitArray[5];
	$arg5=$splitArray[6];
	$arg6=$splitArray[7];
} else {
	$arg1=$splitArray[1];
	$arg2=$splitArray[2];
	$arg3=$splitArray[3];
	$arg4=$splitArray[4];
	$arg5=$splitArray[5];
	$arg6=$splitArray[6];
}


if ($arg1!=''){ $pref="$arg1"; }
if ($arg2!=''){ $pref="$arg2"; }
if ($arg3!=''){ $pref="$arg3"; }
if ($arg4!=''){ $pref="$arg4"; }
if ($arg5!=''){ $pref="$arg5"; }
if ($arg6!=''){ $pref="$arg6"; }

$mod=$arg3;

require 'Config.php';
include('db.php');
require 'class/Index.php';
require 'class/Module.php';
$index=new Index($lang, $login);
$module=new Module();
include('modules/header.php');
if ($arg3==''){
	include('modules/login.php');
} else {
	if ($login==''){
		header("Location: /contrast/admin/");
	}
	include('modules/top.php');
	if (file_exists('modules/'.$arg3.'.php')){
		include('modules/'.$arg3.'.php');
	} else {
		include('modules/index.php');
	}
}
include('modules/footer.php');
?>