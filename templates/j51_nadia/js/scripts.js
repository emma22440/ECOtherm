(function($) {"use strict";

	$(document).ready(function() {

		// Split hornav menu
		var $lis = $(".hornav > ul > li");
		$lis.slice(0, Math.floor($lis.length/2)).addClass("menu-split");

		// Slicknav - Mobile Menu
		$('.hornavmenu .hornav').slicknav();

		// Add parent-hover class to hovered parent items
		$('#moomenu li').hover(function () {
			$(this).addClass('parent-hover');
			}, function () {
			$(this).removeClass('parent-hover');
		});

		// Smoothscroll
		$('.scrollto').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
					scrollTop: target.offset().top
					}, 800);
					return false;
				}
			}
		});

		// Bootstrap stuff
		$(document).ready(function()
		{
			$('*[rel=tooltip]').tooltip()

			// Turn radios into btn-group
			$('.radio.btn-group label').addClass('btn');
			$(".btn-group label:not(.active)").click(function()
			{
				var label = $(this);
				var input = $('#' + label.attr('for'));

				if (!input.prop('checked')) {
					label.closest('.btn-group').find("label").removeClass('active btn-success btn-danger btn-primary');
					if (input.val() == '') {
						label.addClass('active btn-primary');
					} else if (input.val() == 0) {
						label.addClass('active btn-danger');
					} else {
						label.addClass('active btn-success');
					}
					input.prop('checked', true);
				}
			});
			$(".btn-group input[checked=checked]").each(function()
			{
				if ($(this).val() == '') {
					$("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
				} else if ($(this).val() == 0) {
					$("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
				} else {
					$("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
				}
			});
		})


	});
})(jQuery);