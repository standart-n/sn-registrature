<?php class timetable extends sn {
	
public static $doctor_id;
public static $trunc_date;
public static $times;
public static $timetable_html;

function __construct() {
	self::$doctor_id="all";
	self::$trunc_date=date('d.m.Y');
}

function getParamsFromUrl() {
	if (isset(url::$doctor_id)) {
		self::$doctor_id=url::$doctor_id;
	}
	if (isset(url::$trunc_date)) {
		self::$trunc_date=url::$trunc_date;
	}
	
}

function getFirstDoctorId() {
	if (self::$doctor_id=="all") {
		if (isset(doctors::$first_doctor_id)) {
			self::$doctor_id=doctors::$first_doctor_id;
		}
	}
}

function getTimetable($times=array(),$i=-1) {
	self::getParamsFromUrl();
	self::getFirstDoctorId();
	if (query(sql::getTimetable(array("dt"=>self::$trunc_date,"doc"=>self::$doctor_id)),$ms)) {
		foreach ($ms as $r) { $i++;
			if (isset($r->ID)) {
				$tm=self::editTime($r->TRUNC_TIME);
				$times[$i]['time']=$tm['t'];
				$times[$i]['sstatus']=toUTF($r->SSTATUS);
			}
		}
	}
	self::$times=$times;
}

function fetchTimetableToHtml() {
	assign('times',self::$times);
	assign('doctor_id',self::$doctor_id);
	assign('trunc_date',self::$trunc_date);
	self::$timetable_html=fetch("table.tpl");
}

function addTimetableToHtml() {
	innerHTML("#content-primary-table",self::$timetable_html);
}

function editTime($time,$tm=array()) {
	$tm['h']=substr($time,0,2);
	$tm['m']=substr($time,4,2);
	$tm['t']=substr($time,0,5);
	return $tm;
}

} ?>
