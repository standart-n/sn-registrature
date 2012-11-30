<?php class sql extends sn {
	
public static $action;
public static $callback;

function __construct() {

}

function getAllDoctors($s="") {
	$s.="select ";
	$s.="dc.D\$UUID as ID, ";
	$s.="dc.CAPTION as CAPTION ";
	$s.="from VW_DOCTORS dc ";
	$s.="where (1=1) ";
	$s.="and (dc.MMBSH<>'') ";
	return $s;
}

function getAllOtdels($s="") {
	$s.="select ";
	$s.="do.D\$UUID as ID, ";
	$s.="do.CAPTION as CAPTION ";
	$s.="from DOCTORS_OTDEL do ";
	$s.="where (1=1) ";
	return $s;
}

function getTimetable($ms=array(),$s="") {
	$s.="select ";
	$s.="count(rg.D\$UUID) as COUNT_ID, ";
	$s.="rg.TRUNC_TIME as TRUNC_TIME ";
	$s.="from VW_REGISTRY rg ";
	$s.="where (1=1) ";
	$s.="and (rg.STATUS=0) ";
	if (isset($ms['doc'])) {
		if ($ms['doc']!="all") {
			$s.="and (rg.DOCTOR_ID='".$ms['doc']."') ";
		}
	}
	if (isset($ms['otdel'])) {
		if ($ms['otdel']!="all") {
			$s.="and (rg.OTDEL_ID='".$ms['otdel']."') ";
		}
	}
	if (isset($ms['dt'])) {
		$s.="and (rg.TRUNC_DATE='".$ms['dt']."') ";
	}
	if (isset($ms['otdel'])) {
		$s.="GROUP by rg.TRUNC_TIME ";
	}
	$s.="order by rg.TRUNC_TIME asc";
	return $s;
}


} ?>
