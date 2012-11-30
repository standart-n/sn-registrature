<?php class url extends sn {
	
public static $action;
public static $callback;

public static $doctor_id;
public static $trunc_date;

function __construct() {
	self::$action="site";

	if (isset($_REQUEST["action"])) {
		self::$action=trim(strval($_REQUEST["action"]));
	}
	if (isset($_REQUEST["callback"])) {
		self::$callback=trim(strval($_REQUEST["callback"]));
	}

	if (isset($_REQUEST["trunc_date"])) {
		$dt=trim(strval($_REQUEST["trunc_date"]));
		if ($dt!="") {
			//if (preg_match("/[0-9]{2}\.[0-9]{2}\.[0-9]{4}/",$dt)) {
				self::$trunc_date=$dt;
			//}
		}
	}

	if (isset($_REQUEST["doctor_id"])) {
		$dc=trim(strval($_REQUEST["doctor_id"]));
		if ($dc!="") {
			self::$doctor_id=$dc;
		}
	}

}

} ?>
