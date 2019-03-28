"use strict"
$('#butAddArticle').click(function() {
	this.style.backgroundColor = '#178994';
	$('#butChangeArticle').css('backgroundColor', '#66CDAA');
	$('.forma1').hide();
	$('.forma2').show();
})
$('#butChangeArticle').click(function() {
	this.style.backgroundColor = '#178994';
	$('#butAddArticle').css('backgroundColor', '#66CDAA');
	$('.forma1').show();
    $('.forma2').hide();
});
$('#goOut').click(function() {
localStorage.removeItem("local");
});
