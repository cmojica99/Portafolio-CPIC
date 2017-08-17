
	jQuery(document).ready(function ($) {


		$('.owl-carousel').owlCarousel({
			items:3,
			loop:true,
			margin:10,
			nav:true,
			navText: ['<i class="galeriaprev fa fa-chevron-left"></i>','<i class="galerianext fa fa-chevron-right"></i>'],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1,
					nav:true
				}
			}
		});
		$('.owl-carousel').owlCarousel({
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
					nav:true,
					loop:false
				}
			}
		});
	});    


