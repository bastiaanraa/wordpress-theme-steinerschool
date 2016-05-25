$(document).ready(function() {
	$('#nav').affix({
      offset: {
        top: $('header').height()
      }
	});
	$('#subnav').affix({
      offset: {
        top: $('header').height()
      }
	});
});
