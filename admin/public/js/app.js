Scrollbar.initAll();
$(document).ready(function(){
	// Fixed header
	$("header").sticky({topSpacing:0});
	
	// Click icon menu
	$(document).on("click", ".icon-menu", function(){
		$("nav").toggleClass("actived");
	});

	// Menu
	$('.toggle').click(function(e) {
		e.preventDefault();
		let $this = $(this);
		if ($this.next().hasClass('show')) 
		{
			$this.next().removeClass('show');
			$this.next().slideUp(350);
		} 
		else 
		{
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
		}
	});

	// Tab
	function activeTab(obj)
	{
		$('ul.tab li').removeClass('active');
		$(obj).addClass('active');
		var id = $(obj).find('a').attr('href');
		$('.tab-item').hide();
		$(id).show();
	}
	$('.tab li').click(function(){
		activeTab(this);
		return false;
	});
	activeTab($('.tab li:first-child'));
});
// Choose date
$(".chon-ngay").datepicker({
	changeMonth: true,
	changeYear: true,
	showOtherMonths: true,
	selectOtherMonths: true,
	dateFormat: 'yy-mm-dd',
	regional: 'vi-VN',
	yearRange: "1960:2030"
});