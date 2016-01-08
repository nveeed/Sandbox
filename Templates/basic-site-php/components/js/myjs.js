$(function(){
	// add 'active' class to the current page's link
	var currentPage = $("body").attr("id");
	$(".navigation li#"+currentPage).addClass("active");

	// make nav links work
	$(".navigation li").click(function(event) {
		// load the page
		var page = $(this).attr('id');
		$("#content").load(page+'.php');
		// make the link active
		$(".navigation li").removeClass('active');
		$(this).addClass('active');
		$("body").attr("id",page);
	});
});