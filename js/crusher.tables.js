(function(mw, $) {
	$("div#mw-content-text > table").each(function() {
		if ($(this).css('float') != 'right' && !$(this).hasClass('infoboxtable') && !$(this).hasClass('infobox')) {
			var maxWidth = $(this).css('max-width');
			if (maxWidth.indexOf('%') == -1) {
				//This only helps in Firefox.
				$(this).css('max-width', '100%');
			}
			$(this).wrap("<div style='max-width: 100%; overflow-x: auto;"+($(this).css('float') == 'left' ? " float: left;" : "")+"'></div>");
		}
	});
}(mediaWiki, jQuery));
