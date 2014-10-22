$(document).ready(function() {

	$(".nav li").on("click", function() {
		$(".nav li").removeClass("active");
		$(this).addClass("active");
	});
	$("#btn1").on("click", function() {
		$(".nav li").removeClass("active");
		$("#lisec1").addClass("active");
	});
	$("#btn2").on("click", function() {
		$(".nav li").removeClass("active");
		$("#lisec2").addClass("active");
	});
	$("#frmlorem").submit(function(e){
		$.ajax({
			type: "POST",
			url : "lorem",
			data : $( '#frmlorem' ).serialize(),
			success : function(data){
				$("#txtareaparas").val(data);

			}
		},"json");
	});

	$("#frmusers").submit(function(e){
		$.ajax({
			type: "POST",
			url : "users",
			data : $( '#frmusers' ).serialize(),
			success : function(data){
				$("#textareausers").val(data);

			}
		},"json");
	});


});