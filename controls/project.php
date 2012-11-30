<?php class project extends sn {
	
public static $json;

function __construct() {
	self::$json=array();
}

function engine() {
	switch (url::$action) {
		case "selectOtdel":
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			self::$json["trunc_date"]=timetable::$trunc_date;
			self::$json["otdel_id"]=timetable::$otdel_id;
			self::$json["html"]["timetable"]=timetable::$timetable_html;
			self::$json["callback"]="afterSelectOtdel";
			echo json_encode(self::$json);
		break;
		case "selectDate":
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			self::$json["trunc_date"]=timetable::$trunc_date;
			self::$json["otdel_id"]=timetable::$otdel_id;
			self::$json["html"]["timetable"]=timetable::$timetable_html;
			self::$json["callback"]="afterSelectDate";
			echo json_encode(self::$json);
		break;
		case "site":
			load("index.tpl");
			otdels::getOtdels();
			otdels::fetchOtdelsToHtml();
			otdels::addOtdelsToHtml();
			timetable::getTimetable();
			timetable::fetchTimetableToHtml();
			timetable::addTimetableToHtml();
			echo html();		
		break;
	}

}

} ?>
