/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

$(document).ready(function () {
	$('ul.sub-menu').each(function () {
		var menuCount = $(this).children('li').length;
		if (menuCount == 2) {
			$(this).addClass('submenu-two');
		} else if (menuCount > 2) {
			$(this).addClass('submenu-three');
		}
	});
	$('a#nav-button').on('click', function () {
		$('#primary-menu').slideToggle();
	});
});