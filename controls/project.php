<?php class project extends sn {
	
public static $json;

function __construct() {
	self::$json=array();
}

function engine() {
	switch (url::$action) {
		case "selectDoctor":
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			self::$json["trunc_date"]=timetable::$trunc_date;
			self::$json["doctor_id"]=timetable::$doctor_id;
			self::$json["html"]["timetable"]=timetable::$timetable_html;
			self::$json["callback"]="afterSelectDoctor";
			echo json_encode(self::$json);
		break;
		case "selectDate":
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			self::$json["trunc_date"]=timetable::$trunc_date;
			self::$json["doctor_id"]=timetable::$doctor_id;
			self::$json["sql"]=sql::getTimetable(array("dt"=>timetable::$trunc_date,"doc"=>timetable::$doctor_id));
			self::$json["html"]["timetable"]=timetable::$timetable_html;
			self::$json["callback"]="afterSelectDate";
			echo json_encode(self::$json);
		break;
		case "site":
			load("index.tpl");
			doctors::getDoctors();
			doctors::fetchDoctorsToHtml();
			doctors::addDoctorsToHtml();
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			timetable::addTimetableToHtml();
			echo html();		
		break;
	}

}

} ?>
