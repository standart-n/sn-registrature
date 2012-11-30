<!DOCTYPE html>
<html>
<head>
<title>Standart-N</title>
<meta name="description" content="Standart-N" />
<meta name="keywords" content="Standart-N" />
<meta name="Revesit" content="3" />
<meta name="Document-state" content="Dynamic" />
<meta name="Copyright" Lang="eng" content="2012 standart-n.ru" />
<meta name="Copyright" Lang="ru" content="2012 НВП Стандарт-Н" />
<meta name="robots" content="all" />
<meta http-equiv="Content-Language" content="ru" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="sn-project/favicon.ico" rel="icon" type="image/x-icon">
<link href="sn-project/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="sn-project/style/main.css" rel="stylesheet" type="text/css"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="sn-project/lib/jQuery.1.7.min.js" type="text/javascript"></script>
<script src="sn-project/lib/jQuery.ui.1.8.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		var sn_js=["",".conf",".ajax",".events",".triggers"];
		$.each(sn_js,function(i){
			$.getScript("sn-project/script/jQuery.sn"+this+".js",function(){
				if (i==sn_js.length-1) { $("#sn").sn(); }
			});      
		});
	});
</script>
</head>
<body>
<div id="sn"></div>
<div id="wrap">
	<div id="header">
	</div>
	<div id="main">
		<div id="content">
			<div id="content-side">
				<div id="content-side-calendar">
					<div id="datepicker"></div>
				</div>
				<div id="content-side-otdels">
				</div>
				<!--
				<div id="content-side-docs">
				</div>
				-->
			</div>
			<div id="content-primary">
				<div id="content-primary-table">
				</div>
			</div>
		</div>
		<div id="bottom">		
		</div>
	</div>
</div>
</body>
</html>
