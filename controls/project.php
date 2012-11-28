<?php class project extends sn {

function __construct() {

}

function engine() {
	
	self::getDoctors();
	echo html();

}

function getDoctors($docs=array(),$i=-1) {
	if (query(sql::getAllDoctors(),$ms)) {
		foreach ($ms as $r) { $i++;
			if (isset($r->CAPTION)) {
				$docs[$i]['caption']=toUTF($r->CAPTION);
			}
		}
	}
	assign('docs',$docs);	
	innerHTML("#content-side-docs",fetch("docs.tpl"));
}

} ?>
