$(function(){

    $(".dropdown-menu li a").click(function(){
	  $(this).parents(".input-group-btn").find('.btn').text($(this).text());
	  $(this).parents(".input-group-btn").find('.btn').val($(this).data('value'));
	});
});