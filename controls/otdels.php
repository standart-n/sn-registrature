<?php class otdels extends sn {
	
public static $first_otdel_id;
public static $otdels;
public static $otdels_html;

function __construct() {
	
}

function getOtdels($otdels=array(),$i=-1) {
	if (query(sql::getAllOtdels(),$ms)) {
		foreach ($ms as $r) { $i++;
			if ($i==0) {				
				self::$first_otdel_id=$r->ID;
			}
			$otdels[$i]['id']=$r->ID;
			$otdels[$i]['caption']=toUTF($r->CAPTION);
		}
	}
	self::$otdels=$otdels;
}

function fetchOtdelsToHtml() {
	assign('otdels',self::$otdels);
	self::$otdels_html=fetch("otdels.tpl");
}

function addOtdelsToHtml() {
	innerHTML("#content-side-otdels",self::$otdels_html);
}

} ?>
