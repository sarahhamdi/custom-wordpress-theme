$(function(){

	$( "div.hamburger" ).click(function() {
	  // $('div.nav').css('display', 'block');
	  $('div.hamburger').css('display', 'none');
	  $('div.nav').toggle('fast', function(){});
	  
	});

	$( "img.hamburger-close" ).click(function() {
	  // $('div.nav').css('display', 'block');
	  $('div.nav').toggle('fast', function(){
	  	$('div.hamburger').css('display', 'block');
	  });

	 
	})

	if ($('a').href('') == $('a').href('http://twitter.com') ) {
		$('a').text('hello!');
	}

});