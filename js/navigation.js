/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

$(document).ready(function () {
	$('a#nav-button').on('click', function () {
		$('#primary-menu').slideToggle();
	});
});
