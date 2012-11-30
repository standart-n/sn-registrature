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

function getTimetable($ms=array(),$s="") {
	$s.="select ";
	$s.="rg.D\$UUID as ID, ";
	$s.="rg.DOCTOR_ID as DOCTOR_ID, ";
	$s.="rg.TRUNC_DATE as TRUNC_DATE, ";
	$s.="rg.TRUNC_TIME as TRUNC_TIME, ";
	$s.="rg.SSTATUS as SSTATUS, ";
	$s.="rg.STATUS as STATUS ";
	$s.="from VW_REGISTRY rg ";
	$s.="where (1=1) ";
	$s.="and (rg.STATUS=0) ";
	if (isset($ms['doc'])) {
		if ($ms['doc']!="all") {
			$s.="and (rg.DOCTOR_ID='".$ms['doc']."') ";
		}
	}
	if (isset($ms['dt'])) {
		$s.="and (rg.TRUNC_DATE='".$ms['dt']."') ";
	}
	$s.="order by rg.TRUNC_TIME asc";
	return $s;
}


} ?>
