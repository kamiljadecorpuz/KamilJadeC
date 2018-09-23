

/*$(function() {
    $('.lazy').Lazy();
});

*/
/*             


var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").hidden = false;
}
*/


$(document).ready(function() {
	$('img').on('click', function () {
		var image = $(this).attr('src');
		$('#myModal').on('show.bs.modal', function () {
		$(".img-thumbnail").attr("src", image);
		
		});
	});

	$('a').on('click', function () {
		var image1 = $(this).attr('src');
		$('#myModal').on('show.bs.modal', function () {
		$(".img-thumbnail").attr("src", image1);

		});
	});

 
	$('.owl-carousel_1').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{items:2},
			600:{items:3},
			1000:{items:8}
		}
	});
					
	$('.owl-carousel2').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{items:1},
			600:{items:3},
			1000:{items:3}
		}
	});
				
	var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:1,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true
		});
		$('.play').on('click',function(){
			owl.trigger('autoplay.play.owl',[3000])
		});
		$('.stop').on('click',function(){
			owl.trigger('autoplay.stop.owl')
		});
						
						
						
						
	var owl = $('.owl-carousel3');
		owl.owlCarousel({
			items:1,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:4000,
			autoplayHoverPause:true,
			responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
			
		});
		$('.play').on('click',function(){
			owl.trigger('autoplay.play.owl',[3000])
		});
		$('.stop').on('click',function(){
			owl.trigger('autoplay.stop.owl')
		});
						
						
	var owl = $('.owl-carousel4');
		owl.owlCarousel({
			items:1,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
			
			
		}
			
		});
		$('.play').on('click',function(){
			owl.trigger('autoplay.play.owl',[3000])
		});
		$('.stop').on('click',function(){
			owl.trigger('autoplay.stop.owl')
		});
		
		$('.owl-carousel5').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				
				
			}
		}
	});									
});
			
	
// function aboutMe(){
// document.getElementById('aboutme').hidden = false; 
// document.getElementById('experience').hidden = true; 
// document.getElementById('portfolio').hidden = true; 
// document.getElementById('contact').hidden = false; 
// document.getElementById('head').hidden = false; 
// }


// function experience(){
// document.getElementById('aboutme').hidden = true; 
// document.getElementById('experience').hidden = false; 
// document.getElementById('portfolio').hidden = true; 
// document.getElementById('contact').hidden = false; 
// document.getElementById('head').hidden = true; 
// }


// function portfolio(){

// document.getElementById('head').hidden = true; 
// document.getElementById('contact').hidden = true; 
// document.getElementById('aboutme').hidden = true; 
// document.getElementById('experience').hidden = true; 
// document.getElementById('portfolio').hidden = false; 
// }



