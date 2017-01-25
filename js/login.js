	$(document).ready(function () {
		$("ul.tabs_login li").click(function () {
			$("ul.tabs_login li").removeClass("active_login");
			$(this).addClass("active_login");
			$(".tab_content_login").hide();
			var activeTab = "div#" + $(this).find("a").attr("id");
			$(activeTab).show();
		});
	});