/**
* Project: Jolly - Bootstrap Mega Drop Down Menu
* Author: Filiz ÖZER
* Author URI: www.jollythemes.com
* Dependencies: Bootstrap's mega menu plugin
* A professional Bootstrap mega menu plugin with tons of options.
*/

(function($) {
"use strict";
	// DROPDOWN WITH HOVER
	$(".jolly .dropdown").hover(
		function() { $(this).addClass('open') },
		function() { $(this).removeClass('open') }
	);
	
})(jQuery);