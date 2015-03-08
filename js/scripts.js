$(function(){
	$('.ham').on('click', function(){
		// $('.navContainer').animate({ "right": "0vw" }, "slow" );
		console.log('click works');

		// menu variables
		var slideoutMenu = $('.navContainer');
		var slideoutWidth = $('.navContainer').width();

		// toggle class 
		slideoutMenu.toggleClass("open");

		// slide menu 
		if (slideoutMenu.hasClass("open")) {
			slideoutMenu.animate({
				right: "0px"
			})
		} else {
			slideoutMenu.animate({
				right: -slideoutWidth
			}, 250);
		}
	});


});