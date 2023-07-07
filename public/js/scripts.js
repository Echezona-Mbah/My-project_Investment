$(function()
{
	
	$('.filed-checkbox label').change(function(event) {

        $(this).toggleClass('active');
        /* Act on the event */
    });

	
	var d = new Date();
	time_h=d.getHours();
	time_m=d.getMinutes();
	time_s=d.getSeconds();

	wr_clock();
	setInterval(wr_clock,1000);


	$(document).on('click','.box-modal',function(event) {
        $this=$(this);
        $('.wrap').remove();
        $('.wrapper').addClass('grey');
        var style=$this.data('style');
        var url=$this.attr('href');
        //var active=$this.data('active');
        $('.wrap').animate({'opacity':'0'},200).remove();
            if (style==undefined)
                {
                style='';
                }

            if (url==undefined)
                {
                var block=$this.attr('rel');
                var inner=$('#'+block).html();

                var inner_size=$this.data('width');
                }
            else
                {
                var inner='';
                var inner_size=$this.data('width');
                }

        var html="<div class='wrap' style='opacity:0;'  >"+
        "<div class='modal_block animated slideInDown ui-widget-content "+style+"'  style='width:"+inner_size+"px; '><div class='close'></div>"+
        "<div class='inset ajax_modal'>"+
        inner+
        "</div>"+
        "</div>"+
        "</div>";
        $('body').prepend(html);
        if (url!=undefined)
            {
                    $('.wrap').delay(1000).css({'opacity':'1','filter':'alpha(opacity=100)'});
                    $(".modal_block > .inner").load(url,function() {
                    });
            }
            else {
                    $('.wrap').delay(1000).css({'opacity':'1','filter':'alpha(opacity=100)'});
                }
            $( "#draggable" ).draggable({cursor: "move", handle: ".title"});



            $( ".modal_block .drag" ).draggable({cursor: "e-resize", axis: "x" ,containment: "parent", drag: function(event, ui) 
				{ 
					
					var data = sw();
					var compound=parseFloat($('.modal_block .compound').val());
					var days=parseFloat($('.modal_block .days_input').val());
					var c=ui.position.left;
					var e=parseFloat(data.min)+c*(data.max-data.min)/($(this).parent().width()-$(this).width()+3);
					var output=Math.round(e*Math.pow(10, 6)).toFixed(0)/Math.pow(10, 6);
					$('.modal_block .amount').val(output);
		 			calc(data, output, compound, days);	
				}
			});
			$( ".modal_block .comp" ).draggable({cursor: "e-resize", axis: "x" ,containment: "parent", drag: function(event, ui) 
				{ 
					var min=0;
					var max=100;
					var data = sw();
					var days=$('.modal_block .days_input').val();
					var amount=$('.modal_block .amount').val();
					var c=ui.position.left;
					var e=parseFloat(0)+c*(max-min)/($(this).parent().width()-$(this).width()+3);
		 			var compound=Number(Math.round(e).toFixed(0)*100/100);
		 			//compound = sw_comp(compound);

					$('.modal_block .compound').val(compound);
		 			calc(data, amount, compound, days);	
				}
			});

			$( ".modal_block .days" ).draggable({cursor: "e-resize", axis: "x" ,containment: "parent", drag: function(event, ui) 
				{ 
					var data = sw();
					var compound=$('.modal_block .compound').val();
					var amount=parseFloat($('.modal_block .amount').val());
					var c=ui.position.left;
					var e=parseFloat(data.day_min)+c*(data.day_max-data.day_min)/($(this).parent().width()-$(this).width()+3);
		 			var days=Math.round(e).toFixed(0)*100/100;
					$('.modal_block .days_input').val(days);
		 			calc(data, amount, compound, days);	
				}
			});


        	event.preventDefault();


        	


        /* Act on the event */
    });

    $(document).on('keypress, keydown', function(event)
    {
        var show=$(this).find('.wrap')[0];
        if (show!=undefined)
        {
            var code = event.keyCode ? event.keyCode : event.which;
            if (code==27)
            {
            $('.modal_block').removeClass('slideInDown').addClass('slideOutUp');
            $('.wrap').fadeOut('1000');
            $('.wrapper').removeClass('grey');

            }
        }
    });

    $(document).on('click','.close', function(event)
    {
        $('.modal_block').removeClass('slideInDown').addClass('slideOutUp');
        $('.wrap').fadeOut('1000');
        $('.wrapper').removeClass('grey');
    });



    calc();
	
	
		$(document).on('change keyup','.modal_block .amount', function()
		{
				var amount=Number($(this).val()*Math.pow(10, 6))/Math.pow(10, 6);
				var compound=$('.modal_block .compound').val();
				var days=$('.modal_block .days_input').val();
				var data = sw();
				if (amount>data.max) 
					{
						amount=data.max;
						$(this).val(amount);
						var data = sw();
					}
				var position=Math.round((amount-data.min)*($( ".modal_block .drag" ).parent().width()-$( ".modal_block .drag" ).width())/(data.max-data.min));
				if (position<0) position=0;
				$(".modal_block .drag").animate({'left': position+'px'},400);
				calc(data, amount, compound, days);	
		}).on('keypress','.modal_block .amount', isNumberKey);

		$(document).on('change keyup','.modal_block .days_input', function()
		{
				var amount=$('.modal_block .amount').val();
				var days=Number($(this).val());
				var compound=$('.modal_block .compound').val();
				var data = sw();
				if (days>data.days_max) 
				{
					days=data.days_max;
					$(this).val(days);
				}
				var position=Math.round((days-data.day_min)*($( ".modal_block .days" ).parent().width()-$( ".modal_block .days" ).width())/(data.day_max-data.day_min));
				if (position<0) position=0;
				$(".modal_block .days").animate({'left': position+'px'},400);
				
				calc(data, amount, compound, days);	
		}).on('keypress','.modal_block .days_input', isNumber);

	function isNumberKey(event) 
	{
		
		var charCode = (event.which) ? event.which : event.keyCode;
		console.log(charCode);
		if (charCode==46) return true;
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}

	function isNumber(event) 
	{
		var charCode = (event.which) ? event.which : event.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
	function sw()
	{
		data=[];
		data.comp_min = 0;
		data.comp_max = 4;
		data.min = 10;
		data.max = 100000;
		data.day_min = 1;
		data.day_max = 100;
		data.percent = 2.88;
		return data;
	}

	function sw_comp(comp)
	{
		var output = 0;
		switch (comp) 
		{
		case 1:
					output = 0;
				break;
		case 2:
					output = 20;
				break;
		case 3:
					output= 50;
				break;
		case 4:
					output= 100;
				break;
		}
		return output;
	}

	function calc(data, amount, compound, days) 
	{
		if (jQuery.isEmptyObject(data))
		{
			data = sw();
			amount = data.min;
			days = data.days_min;
			compound=0;
			//$('.modal_block .amount').val(data.min);
			$('.modal_block .days_input').val(data.days_min);
			
			calculate(amount,data.percent,days,compound);
		}
	
			calculate(amount,data.percent,days,compound);
	}

 function calculate(amount,percent,days,compound)
 {
 	
 	var compound = Number(compound);
 	var startsum=Number(amount);
	var dayprof=Number(percent);
	var daycount=Number(days);
	var sum=startsum;
	var sum2=0;
	for(var i=0;i<daycount;i++)
	{
		prof=sum*dayprof/100;
		sum2=sum2+prof*(100-compound)/100;
		prof=prof*compound/100;
		sum=sum+prof;
	}
	

	//var total=Math.round((Math.round(amount*percent*days*Math.pow(10, 8)).toFixed(0)/Math.pow(10, 8))*Math.pow(10, 6)).toFixed(0)/Math.pow(10, 6);
	

		var profit = Math.round((startsum*dayprof/100)*Math.pow(10, 6)).toFixed(0)/Math.pow(10, 6) || 0;
		var total = Math.round((sum+sum2)*Math.pow(10, 6)).toFixed(0)/Math.pow(10, 6) || 0;
	
	
 	//var profit = Math.round((amount+amount*percent*duration/100)*100).toFixed(0)/100;
 	
 	$('.profit').val('$'+profit);
 	$('.total').val('$'+total);
 }



});


	function dig2(d)
	{
		return ((d<10)?"0":"")+d;
	}
	function wr_clock(object)
	{
		$("#clock").html(dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s));
		$("#clock1").html(dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s));
		time_s++;
		if (time_s>=60)
		{
			time_s=0;
			time_m++;
			if (time_m>=60)
			{
				time_m=0;
				time_h++;
				if (time_h>=24)
				{
					time_h=0;
				}
			}
		}
	}
