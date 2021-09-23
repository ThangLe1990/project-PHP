$(".delete").click(function(e) {
	e.preventDefault();
	var dataURL = $(this).attr("data-url");
	$("#confirmModal a") . attr("href", dataURL);
	$("#confirmModal") . modal("show");
});
