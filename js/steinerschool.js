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

// function to set the height on fly
 function autoHeight() {
  console.log($('nav').height());
   $('#content').css('min-height', 0);
   $('#content').css('min-height', (
     $(document).height() 
     - $('header').height() 
     - $('nav').height()
     - $('footer').height()
   ));
 }

 // onDocumentReady function bind
 $(document).ready(function() {
   autoHeight();
 });

 // onResize bind of the function
 $(window).resize(function() {
   autoHeight();
 });