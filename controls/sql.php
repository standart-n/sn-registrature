<?php class sql extends sn {
	
public static $action;
public static $callback;

function __construct() {

}

function getAllDoctors($s="") {
	$s.="select * from doctors where 1=1";
	return $s;
}

} ?>
