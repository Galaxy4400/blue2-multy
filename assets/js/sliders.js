//===============================================================
document.querySelectorAll('[data-swiper]').forEach(slider => {
	slider.classList.add('swiper');

	if (slider.classList.contains('swiper-bild')) return;

	const sliderWrapper = slider.firstElementChild;
	const sliderItems = Array.from(sliderWrapper.children);

	sliderWrapper.classList.add('swiper-wrapper');

	sliderItems.forEach(slide => slide.classList.add('swiper-slide'));

	slider.classList.add('swiper-bild');
});

//===============================================================
//===============================================================
//===============================================================


const quotesSlider = new Swiper('.quotes-slider', {
	speed: 1500,
	spaceBetween: 25,
	slidesPerView: 1,
	navigation: {
		prevEl: '.quotes-slider-arrows__arrow_prev',
		nextEl: '.quotes-slider-arrows__arrow_next',
		disabledClass: "_disabled",
	},
	pagination: {
		el: '.quotes-slider-pagination__body',
		bulletClass: 'quotes-slider-pagination__bullet',
		bulletActiveClass: '_active',
		clickable: true,
	},
	breakpoints: {
		320: { slidesPerView: 1 },
		1301: { slidesPerView: 2 },
	}
});


//===============================================================
const partnersSlider = new Swiper('.partners-slider', {
	speed: 5000,
	loop: true,
	allowTouchMove: false,
	autoplay: {
		delay: 0,
	},
	spaceBetween: 12,
	slidesPerView: 'auto',
	breakpoints: {
		320: {
			spaceBetween: 12,
			slidesPerView: 'auto', 
		},
		480: {
			spaceBetween: 24,
			slidesPerView: 'auto',
		},
		1301: {
			spaceBetween: 24,
			slidesPerView: 4,
		},
	}
});


//===============================================================
const block5Slider = new Swiper('.block-3-slider', {
	speed: 1500,
	slidesPerView: 'auto', 
	breakpoints: {
		320: {
			enabled: true,
			spaceBetween: 12,
		},
		480: {
			enabled: true,
			spaceBetween: 24,
		},
		768: {
			enabled: false,
		},
	}
});