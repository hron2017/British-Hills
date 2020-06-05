//====================  Mobile Menu ========================//
$(window).resize(function (event) {
	adaptive_function();
});
function adaptive_header(w, h) {
	var headerText = $('.header__text'),
		headerContent = $('.header__content'),
		introBody = $('.intro-body');

	if (w < 1250) {
		if (!headerContent.hasClass('done')) {
			headerContent.addClass('done');
			introBody.prepend(headerText);
		}
	} else {
		if (headerContent.hasClass('done')) {
			headerContent.removeClass('done');
			headerContent.prepend(headerText);
		}
	}
}
function adaptive_function() {
	var w = $(window).outerWidth();
	var h = $(window).outerHeight();
	adaptive_header(w, h);
}
adaptive_function();

