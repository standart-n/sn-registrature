(function($){

	var methods={
		init:function(options)
		{
			return this.each(function(){
			});
		},
		calendar:function()
		{
			th=$(this);
			sn=$(this).data('sn');
			
			$.datepicker.regional['ru']={
				clearText:'Очистить',clearStatus: '',
				minDate:"0",
				closeText:'Закрыть',closeStatus:'',
				prevText:'<Пред', prevStatus:'',
				nextText:'След>',nextStatus:'',
				currentText:'Сегодня',currentStatus:'',
				monthNames:['Январь','Февраль','Март','Апрель','Май','Июнь',
							'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
				monthNamesShort:['Янв','Фев','Мар','Апр','Май','Июн',
								'Июл','Авг','Сен','Окт','Ноя','Дек'],
				monthStatus:'',yearStatus:'',
				weekHeader:'Не',weekStatus:'',
				dayNames:['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
				dayNamesShort:['вск','пнд','втр','срд','чтв','птн','сбт'],
				dayNamesMin:['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
				dayStatus:'DD',dateStatus:'D, M d',
				dateFormat:'dd-mm-yy',firstDay:1, 
				initStatus:'',isRTL:false
			};
			$.datepicker.setDefaults($.datepicker.regional['ru']);
			//$("#datepicker").datepicker();			
			$(function(){
				$("#datepicker").datepicker({
					onSelect:function(dateText,inst)
					{
						alert(dateText);
					}
				});
			});
			
			
		}		
	};

	$.fn.snTriggers=function(sn){
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
