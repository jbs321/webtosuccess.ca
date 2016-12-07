jQuery( document ).ready(function() {

	// ---------------------------------------------------------
	// Back to Top
	// ---------------------------------------------------------
	jQuery( window ).scroll(function() {

		if ( jQuery( this ).scrollTop() > 100 ) {
			jQuery( '#back-top' ).addClass( 'show-totop' );
		} else {
			jQuery( '#back-top' ).removeClass( 'show-totop' );
		}
	});

	jQuery( '#back-top a' ).click(function() {
		jQuery( 'body,html' ).stop( false, false ).animate({
			scrollTop: 0
		}, 800 );
		return false;
	});

		// ---------------------------------------------------------
	// accordion numbrers
	// ---------------------------------------------------------

		var count = 1;
		jQuery('.cherry-accordion .cherry-spoiler-title').each(function(){
				if(count<=9){
						jQuery(this).prepend("<span class='dropcap'>0"+count+"</span>");
				}else{
						jQuery(this).prepend("<span class='dropcap'>"+count+"</span>");
				}
				count++;
		});

		 if (jQuery('.extra-slider')[0]){
			jQuery('.extra-slider').slick({
			 infinite: true,
			 slidesToShow: 6,
			 slidesToScroll: 1,
			 responsive: [
					 {
						 breakpoint: 1024,
						 settings: {
							 slidesToShow: 4,
							 slidesToScroll: 1,
						 }
					 },
					 {
						 breakpoint: 600,
						 settings: {
							 slidesToShow: 3,
							 slidesToScroll: 1
						 }
					 },
					 {
						 breakpoint: 480,
						 settings: {
							 slidesToShow: 2,
							 slidesToScroll: 1
						 }
					 }
				]
			});
		 } else{}


		var hamburgerArea = jQuery('#header'),
		logoArea = jQuery('#static-area-header-top');

		if(hamburgerArea[0]) {
				hamburgerAreaSize();

				jQuery(window).on('resize scroll orientationChange', function() {
						hamburgerAreaSize();
				});

		}

		 function hamburgerAreaSize() {
				 var windowHeight = jQuery(window).height(),
					adminAreaHeight = jQuery('#wpadminbar').height();
					menuHeight = jQuery('#static-area-header-top').height();

				 jQuery('.motoslider_wrapper').addClass('full-height').css({
					'height': (windowHeight - adminAreaHeight) + 'px'
				 });
		}

		hamburgerAreaSize();

	// ---------------------------------------------------------
	// services & spoilers
	// ---------------------------------------------------------

	var $cherrySpoiler = jQuery('.cherry-spoiler'),
		bar = jQuery('#wpadminbar').length > 0 ? 28 : 0;

	if ( $cherrySpoiler.length > 0 ) {
		window.addEventListener("hashchange", cherrySpoilerHashchange, false);
	}

	function cherrySpoilerHashchange() {
		var currentHash = window.location.hash.substr(1);

		$cherrySpoiler.each( function( index ) {
			$this = jQuery(this);
			if ( currentHash === $this.data( 'anchor' ) ) {
				scrollToSpoiler( $this );
			};
		} );
	}

	function scrollToSpoiler( $el ) {
		// Activate tab
		if ( $el.hasClass( 'cherry-spoiler-closed' ) ) $el.find( '.cherry-spoiler-title:first' ).trigger( 'click' );

		// Scroll-in tabs container
		window.setTimeout( function () {
			jQuery( window ).scrollTop( $el.offset().top - bar - 10 );
		}, 100 );
	}

});
