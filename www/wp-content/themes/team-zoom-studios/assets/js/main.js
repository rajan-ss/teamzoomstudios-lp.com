(function ($) {
	$(document).ready(function () {

		/*
			This script enables inline style for the background-image from direct child with img tag.
		*/
		function initBgCover(context) {
			if (!context) context = $('body');
			context.find('.js-bg-cover').each(function () {
				var holder = $(this);
				var image = holder.find('> img').hide();
				var imageSrc = image.prop('src');
				holder.css({
					backgroundImage: 'url(' + imageSrc + ')',
				});
			});
		}
		initBgCover();
		/* End of the code block */

		/* smooth scroll*/
		var winWidth = $(window).width()
		$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
			if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
				var target = $(this.hash)
				target = target.length ? target : $("[name=" + this.hash.slice(1) + "]")
				if (target.length) {
					if (winWidth > 991) {
						$("html, body").animate(
							{
								scrollTop: target.offset().top - 50,
							},
							1000
						)
					} else {
						$("html, body").animate(
							{
								scrollTop: target.offset().top,
							},
							1000
						)
					}
					return false
				}
			}
		})

		const swiper = new Swiper(".mySwiper", {
			// Optional parameters
			loop: true,
			autoHeight: true,
			autoplay: {
				delay: 50000,
				pauseOnMouseEnter: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// Events
			on: {
				slideChange: function () {
					// Pause all videos before changing to the next slide
					pauseAllVideos();
				},
				slideChangeTransitionEnd: function () {
					// Play the video in the current slide
					playCurrentVideo();
				},
			},
		});

		function pauseAllVideos() {
			var videos = document.querySelectorAll('.swiper-video');
			videos.forEach(function (video) {
				video.pause();
			});
		}

		function playCurrentVideo() {
			var currentSlide = swiper.slides[swiper.activeIndex];
			var video = currentSlide.querySelector('.swiper-video');
			if (video) {
				video.play();
			}
		}

		/*
			This script calculate innerHeight of the #site - footer and add padding - bottom with the respective height on resize.
		*/
		function stickyFooter() {
			let stickyFooter = $('.sticky-footer');
			let stickyFooterHeight = stickyFooter.innerHeight();
			let siteFooter = $('.site-footer');
			siteFooter.css('padding-bottom', stickyFooterHeight);
		}
		stickyFooter();

		let debounceTimeout;
		$(window).on('resize', function () {
			clearTimeout(debounceTimeout);
			debounceTimeout = setTimeout(function () {
				stickyFooter();
			}, 250);
		});
		/* End of the code block */
	});

}(jQuery));