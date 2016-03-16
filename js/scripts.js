$(function(){

	// $( "div.hamburger" ).click(function() {
	//   // $('div.nav').css('display', 'block');
	//   $('div.hamburger').css('display', 'none');
	//   $('div.nav').fadeIn('fast', function(){});
	  
	// });

	// $( "img.hamburger-close" ).click(function() {
	//   // $('div.nav').css('display', 'block');
	//   $('div.nav').fadeIn('fast', function(){
	//   	$('div.hamburger').css('display', 'block');
	//   });

	 
	// })

	// if ($('a').href('') == $('a').href('http://twitter.com') ) {
	// 	$('a').text('hello!');
	// }


	// toggles nav hamburger animation + displays nav
	$('div.hamburger').on('click', function(){
		$('div.nav').fadeToggle();
		$(this).children().toggleClass('open toggle-close');

	});

	// closes nav when someone clicks on a nav link
	// $('div.hamburger').on('click', function(){
	// 	$('div.nav').fadeOut();
	// 	$('div.hamburger').children().toggleClass('toggle-close open');
	// 	// $(this).children().toggleClass('open toggle-close');
	// });


});