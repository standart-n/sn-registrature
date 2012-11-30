(function($){

	var methods={
		init:function(options)
		{
			return this.each(function(){
				var def={
					'href':"none"
				};
				$.extend(true,def,options);
				var href=def.href;
				switch (href.replace(/(.*)#(.*)/,"$2")){
					case "autoload":
						var sn=$(this).data('sn');
						$(this).snTriggers('doctors');
						$(this).snTriggers('calendar');
					break;
					case "selectDate":
						$(this).snAjax('sendRequest',{'action':'selectDate','debug':false});
					break;
					case "selectDoctor":
						$(this).snAjax('sendRequest',{'action':'selectDoctor','debug':false});
					break;
					case "afterSelectDate":
						var sn=$(this).data('sn');
						if (sn.result) {
							if (sn.result.html) {
								if (sn.result.html.timetable) {
									$("#content-primary-table").html(sn.result.html.timetable);
								}
							}							
						}
					break;
					case "afterSelectDoctor":
						var sn=$(this).data('sn');
						if (sn.result) {
							if (sn.result.html) {
								if (sn.result.html.timetable) {
									$("#content-primary-table").html(sn.result.html.timetable);
								}
							}							
						}
					break;
					case "close":
						$(this).hide();
					break;
				}
			});
		}
	};

	$.fn.snEvents=function(sn){
		if (!sn) { var sn={}; }
		if ( methods[sn]) {
			return methods[sn].apply(this,Array.prototype.slice.call(arguments,1));
		} else if (typeof sn==='object' || !sn) {
			return methods.init.apply(this,arguments);
		} else {
			$.error('Метод '+sn+' не существует');
		}		
	};		
})(jQuery);
