 
$(".month-table .image-edit").on("click", function(event){
 
	$("#input_id").val($(this).parent().parent().find("td:nth-child(1)").text());
	$("#input_date").val($(this).parent().parent().find("td:nth-child(2)").text());
	$("#input_name").val($(this).parent().parent().find("td:nth-child(3)").text());
	$("#input_description").val($(this).parent().parent().find("td:nth-child(4)").text());
});



$("#clear_btn").on("click", function(event){
	$("#input_id").val("");
	$("#input_date").val("");
	$("#input_name").val("");
	$("#input_description").val("");
});