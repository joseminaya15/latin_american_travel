$('#principal .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	autoplayTimeout : 5000
});
$('#experiencia .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		},
		600:{
			items : 2
		},
		1200:{
			items : 3
		}
	},
	navigation : false,
	nav : true,
	loop : false,
	dots: false,
	autoplay : false,
	autoplayTimeout : 5000,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
});