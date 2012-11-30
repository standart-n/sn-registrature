<?php class doctors extends sn {
	
public static $first_doctor_id;
public static $docs;
public static $doctors_html;

function __construct() {
	
}

function getDoctors($docs=array(),$i=-1) {
	if (query(sql::getAllDoctors(),$ms)) {
		foreach ($ms as $r) { $i++;
			if ($i==0) {				
				self::$first_doctor_id=$r->ID;
			}
			$docs[$i]['id']=$r->ID;
			$docs[$i]['caption']=toUTF(self::editFamily($r->CAPTION));
		}
	}
	self::$docs=$docs;
}

function fetchDoctorsToHtml() {
	assign('docs',self::$docs);
	self::$doctors_html=fetch("docs.tpl");
}

function addDoctorsToHtml() {
	innerHTML("#content-side-docs",self::$doctors_html);
}

function editFamily($name="",$s="") {
	$ms=explode(" ",$name);
	if ((isset($ms[1])) && (isset($ms[2]))) {
		$s=$ms[0]." ".substr($ms[1],0,1).". ".substr($ms[2],0,1).". ";
	}	
	return $s;
}

} ?>
