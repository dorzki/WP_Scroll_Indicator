(function ( $ ) {

	function scrollIndicator() {

		let _scroll = $( window ).scrollTop();
		let _height = $( document ).height() - $( window ).height();

		$( '.dorzki-scroll-indicator-wrapper .scroll-bar' )
			.css( 'width', (_scroll / _height * 100) + '%' );

	}

	$( window ).scroll( scrollIndicator );

})( jQuery );