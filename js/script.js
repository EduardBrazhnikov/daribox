"use strict"
/*Предупреждение на странице интим*/
$(document).ready(function() { 
	var myhref = document.location.href;
	var myurl = myhref.split('/');
	if (myurl[3] == 'intim' && localStorage.getItem('age') == null) {
	$('#overlay18').css('display', 'block');
	}
$('.popup__close18').click(function() {
	$('#overlay18').css('display', 'none');
	localStorage.setItem('age',18)
});
$('.comeBack').click(function() {
	location.href = '/';
});
/*Клик по вопросу*/
$('#question').on('click', function(){
		$('#answer').slideToggle(1000,function(){
		})
	})
/*Клики по боксам*/
$('.vkl1').click(function() {
   this.style.backgroundColor = '#32CD32';
   $('.order1').css('backgroundColor', '#32CD32');
   $('.vkl2').css('backgroundColor', '#fff');
   $('.vkl3').css('backgroundColor', '#fff');
   $('.vkl4').css('backgroundColor', '#fff');
   $('.order2').css('backgroundColor', '#1E90FF');
   $('.order3').css('backgroundColor', '#1E90FF');
   $('.order4').css('backgroundColor', '#1E90FF');
   $('.triangle-down1').css('display', 'block');
   $('.triangle-down2').css('display', 'none');
   $('.triangle-down3').css('display', 'none');
   $('.triangle-down4').css('display', 'none');
   $('.they').css('display', 'block');
   $('.hi').css('display', 'block');
   var cost = $('.css-tag1').html();
   var nameBox = $('.textBox1').html();
   $('#cost').html(cost);
   $('#nameBox').html(nameBox);
})
$('.vkl2').click(function() {
   this.style.backgroundColor = '#32CD32';
   $('.order2').css('backgroundColor', '#32CD32');
   $('.vkl1').css('backgroundColor', '#fff');
   $('.vkl3').css('backgroundColor', '#fff');
   $('.vkl4').css('backgroundColor', '#fff');
   $('.order1').css('backgroundColor', '#1E90FF');
   $('.order3').css('backgroundColor', '#1E90FF');
   $('.order4').css('backgroundColor', '#1E90FF');
   $('.triangle-down1').css('display', 'none');
   $('.triangle-down2').css('display', 'block');
   $('.triangle-down3').css('display', 'none');
   $('.triangle-down4').css('display', 'none');
   $('.they').css('display', 'block');
   $('.hi').css('display', 'block');
   var cost = $('.css-tag2').html();
   var nameBox = $('.textBox2').html();
   $('#cost').html(cost);
   $('#nameBox').html(nameBox);
})
$('.vkl3').click(function() {
   this.style.backgroundColor = '#32CD32';
   $('.order3').css('backgroundColor', '#32CD32');
   $('.vkl2').css('backgroundColor', '#fff');
   $('.vkl1').css('backgroundColor', '#fff');
   $('.vkl4').css('backgroundColor', '#fff');
   $('.order2').css('backgroundColor', '#1E90FF');
   $('.order1').css('backgroundColor', '#1E90FF');
   $('.order4').css('backgroundColor', '#1E90FF');
   $('.triangle-down1').css('display', 'none');
   $('.triangle-down2').css('display', 'none');
   $('.triangle-down3').css('display', 'block');
   $('.triangle-down4').css('display', 'none');
   var cost = $('.css-tag3').html();
   var nameBox = $('.textBox3').html();
   $('#cost').html(cost);
   $('#nameBox').html(nameBox);
})
$('.vkl4').click(function() {
   this.style.backgroundColor = '#32CD32';
   $('.order4').css('backgroundColor', '#32CD32');
   $('.vkl2').css('backgroundColor', '#fff');
   $('.vkl3').css('backgroundColor', '#fff');
   $('.vkl1').css('backgroundColor', '#fff');
   $('.order2').css('backgroundColor', '#1E90FF');
   $('.order3').css('backgroundColor', '#1E90FF');
   $('.order1').css('backgroundColor', '#1E90FF');
   $('.triangle-down1').css('display', 'none');
   $('.triangle-down2').css('display', 'none');
   $('.triangle-down3').css('display', 'none');
   $('.triangle-down4').css('display', 'block');
   $('.they').css('display', 'none');
   $('.hi').css('display', 'none');
   $('#radio2').attr("checked", true);
   var cost = $('.css-tag4').html();
   var nameBox = $('.textBox4').html();
   $('#cost').html(cost);
   $('#nameBox').html(nameBox);
})
 $("input#public").change(function(){
    if ($(this).prop('checked')) {
		$('#hide').fadeIn(300);
    } else {
        $('#hide').fadeOut().show(); 
        }
});
 $(".myselfText").change(function(){
    if ($(this).prop('checked')) {
		$('.postcardText').fadeIn(300);
    } else {
        $('.postcardText').fadeOut().show(); 
        }
});
/*Оплата открытки*/
 $(".abroad").change(function(){
    if ($(this).prop('checked')) {
		$('.liqpayAmount').val('160');	
        $(".locally").prop("checked", false);
        $("input[name='otherСountries']").val('160');		
    } 
	else {
		$('.liqpayAmount').val('35');
		$(".locally").prop("checked", true);
		$("input[name='ukraine']").val('35');
	}
});
 $(".locally").change(function(){
    if ($(this).prop('checked')) {
		$('.liqpayAmount').val('35');
        $(".abroad").prop("checked", false);
        $("input[name='ukraine']").val('35');		
    } 
	else {
		$('.liqpayAmount').val('160');
		$(".abroad").prop("checked", true);
		$("input[name='otherСountries']").val('160')
	}
});
$("#form").submit(function(){
  getAndRecMail();
});
var getAndRecMail = function(){
  var senderName = $("input[name='senderName']").val();
  var senderStreet = $("input[name='senderStreet']").val();
  var senderCity = $("input[name='senderCity']").val();
  var senderRegion = $("input[name='senderRegion']").val();
  var senderCountry = $("input[name='senderCountry']").val();
  var senderIndex = $("input[name='senderIndex']").val();
  var recipientName = $("input[name='recipientName']").val();
  var recipientStreet = $("input[name='recipientStreet']").val();
  var recipientCity = $("input[name='recipientCity']").val();
  var recipientRegion = $("input[name='recipientRegion']").val();
  var recipientCountry = $("input[name='recipientCountry']").val();
  var recipientIndex = $("input[name='recipientIndex']").val();
  var whom = $("input[name='whom']").val();
  var postcard = $("textarea[name='postcard']").val();
  var our = $("input[name='our']").val();
  var fromInp = $("input[name='from']").val();
  var ukraine = $("input[name='ukraine']").val();
  var otherСountries = $("input[name='otherСountries']").val();
  var numberTelephon = $("input[name='numberTelephon']").val();
  var postData = '';
  var recipientData = '';
  var objMail = {senderName: senderName, 
  senderStreet: senderStreet, 
  senderCity: senderCity, 
  senderRegion: senderRegion, 
  senderCountry: senderCountry, 
  senderIndex: senderIndex,
  recipientData: recipientData,
  recipientName: recipientName, 
  recipientStreet: recipientStreet, 
  recipientCity: recipientCity, 
  recipientRegion: recipientRegion,
  recipientCountry: recipientCountry, 
  recipientIndex: recipientIndex,
  postData: postData,  
  whom: whom, 
  postcard: postcard,
  fromInp: fromInp, 
  ukraine: ukraine, 
  otherСountries: otherСountries,  
  numberTelephon: numberTelephon};
  var sendMailLocal = JSON.stringify(objMail);
  localStorage.setItem('mail',sendMailLocal); 
}
/*Мобильное меню*/
$('.butM').click(function(e) {
    var $Mnavigation = $('.Mnavigation');
    if ($Mnavigation.css('display') != 'block') {
        $Mnavigation.show("slow");
        var firstClick = true;
        $(document).bind('click.myEvent', function(e) {
            if (!firstClick && $(e.target).closest('.Mnavigation').length == 0) {
                $Mnavigation.hide("slow");
                $(document).unbind('click.myEvent');
            }
            firstClick = false;
        });
    }
    e.preventDefault();
});
/*Слайдер*/
var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 5000;
var navBtnId = 0;
var translateWidth = 0;
var switchInterval = setInterval(nextSlide, slideInterval);
    $('#viewport').hover(function() {
        clearInterval(switchInterval);
    }, function() {
        switchInterval = setInterval(nextSlide, slideInterval);
    });
    $('#next-btn').click(function() {
        nextSlide();
    });
    $('#prev-btn').click(function() {
        prevSlide();
    });
    $('.slide-nav-btn').click(function() {
        navBtnId = $(this).index();
        if (navBtnId + 1 != slideNow) {
            translateWidth = -$('#viewport').width() * (navBtnId);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navBtnId + 1;
        }
    });
function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('#slidewrapper').css('transform', 'translate(0, 0)');
        slideNow = 1;
    } else {
        translateWidth = -$('#viewport').width() * (slideNow);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow++;
    }
}		
function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = -$('#viewport').width() * (slideCount - 1);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow = slideCount;
    } else {
        translateWidth = -$('#viewport').width() * (slideNow - 2);
        $('#slidewrapper').css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        });
        slideNow--;
    }
}
/*Кнопки 'Что внутри?'*/
$('#buttonPresent').click(function() {
	$('#overlayP').css('display', 'block');
})
$('.popup__closeP').click(function() {
	$('#overlayP').css('display', 'none');
});
$('#buttonSweets').click(function() {
	$('#overlayS').css('display', 'block');
})
$('.popup__closeS').click(function() {
	$('#overlayS').css('display', 'none');
});
$('#buttonMix').click(function() {
	$('#overlayM').css('display', 'block');
})
$('.popup__closeM').click(function() {
	$('#overlayM').css('display', 'none');
});
$('#buttonIntim').click(function() {
	$('#overlayI').css('display', 'block');
})
$('.popup__closeI').click(function() {
	$('#overlayI').css('display', 'none');
});
/*Клики по блокам "Подарки, Сладости и т.д"*/
$('.circlePresent').click(function() {
	location.href = '/present';
});
$('.circleSweets').click(function() {
	location.href = '/sweets';
});
$('.circleMix').click(function() {
	location.href = '/mix';
});
$('.circleIntim').click(function() {
	location.href = '/intim';
});
/*Корзина*/
$('.basket').click(function() {
	$('#overlay').show();
})
$('.popup__close').click(function() {
	$('#overlay').hide();
	localStorage.removeItem('openCard');
	location.reload();
});
$('#specification').click(function() {localStorage.removeItem('openCard');});
$('.continue').click(function() {localStorage.removeItem('openCard');});
$('#logBut').click(function() {localStorage.setItem('openCard', 7)});
 $('#agree').change(function() {
	if ($(this).prop('checked')==false) {
		$('#logBut').hide();
	}
	else if ($(this).prop('checked')==true) {
		$('#logBut').show();
	}
});
var localOpenCard = localStorage.getItem('openCard');
if (localOpenCard == 1 || localOpenCard == 7){$('#overlay').show();}
var localNumber = localStorage.getItem('cardRound');
if (localStorage.getItem('cardRound') == null){
			$('.basketCircle').html(0);
		}
		else{
			$('.basketCircle').html(localNumber);
		};
function addNumberInBasket () {
	var number = $('.basketCircle').html();
	var quantLocal = localStorage.getItem('card');
	var arrLocal = JSON.parse(quantLocal);
	var summed = 0;
	for (var i=0; i < arrLocal.length ; ++i) {
		summed += arrLocal[i].quant;
	}
	localStorage.setItem('cardRound', summed);
}
$(document).on('click', '.plus', function()  {
var atrPlus = $(this).attr('dataPlus'); 
var arrPlus = atrPlus.split('-');
var lastPlus = arrPlus.pop();
var idPlus = arrPlus.shift();
var plus = +lastPlus + 1;
var plusFromStorage = [];
			plusFromStorage = localStorage.getItem('card');
			var arrPlusStorage = JSON.parse(plusFromStorage);
            for (var i=0; i < arrPlusStorage.length ; ++i) {
				if (arrPlusStorage[i].id == idPlus) {
				arrPlusStorage[i].quant = plus;
			}}
var plusToStorage = JSON.stringify(arrPlusStorage)
localStorage.setItem('card',plusToStorage)
$('.presentBasket').html('<h4>Вы заказываете:</h4><br>');
load ();	
})
$(document).on('click', '.minus', function()  {
var atrMinus = $(this).attr('dataMinus');
var arrMinus = atrMinus.split('-');
var lastMinus = arrMinus.pop();
var idMinus = arrMinus.shift();
if (lastMinus != '1') {
var minus = +lastMinus - 1;	
}
else {var minus = +lastMinus}
var minusFromStorage = [];
			minusFromStorage = localStorage.getItem('card');
			var arrMinusStorage = JSON.parse(minusFromStorage);
            for (var i=0; i < arrMinusStorage.length ; ++i) {
				if (arrMinusStorage[i].id == idMinus) {
				arrMinusStorage[i].quant = minus;
			}}
var minusToStorage = JSON.stringify(arrMinusStorage)
localStorage.setItem('card',minusToStorage)
$('.presentBasket').html('<h4>Вы заказываете:</h4><br>');
load ();
})
function load () {
if (localStorage.getItem('openCard') == 7) {
	$('.rowBasket').html('<p style="margin: auto; font-size: 1.5em;">Ваш заказ отправлен</p>');
	$('.popup').css('height', '300px');
	}
else if(localStorage.getItem('card') == null || localStorage.getItem('card').length == 2){
	$('.rowBasket').html('<p style="margin: auto; font-size: 1.5em;">Корзина пуста</p>');
	$('.popup').css('height', '300px');
}
else{
	var stringFromStorage = localStorage.getItem('card');
	var arrFromStorage = JSON.parse(stringFromStorage);
	var arrSumPrice = [];
	for(var i = 0; i <arrFromStorage.length;i++){
		var newObjPlus = {id: arrFromStorage[i].id, quant: arrFromStorage[i].quant, 
		toString: function() { return this.id + '-' + this.quant;}};
		var sumPriceElem = arrFromStorage[i].price * arrFromStorage[i].quant;
		arrSumPrice.push(sumPriceElem);
		$('.presentBasket').append('<div style="border-bottom: 2px solid #808080; padding-bottom: 0.5em; text-align: center;">' + '<span style="color: #483D8B;">' + arrFromStorage[i].name + '</span>'
		+ '<img class="Delete" src="views/image/Delet.png" data="'+ arrFromStorage[i].id +'">'
		+ '<img id="imgBasket" src="views/image/box_sm.png">'
		+ '<p>'+'Пол получателя: ' + arrFromStorage[i].sex + '</p>' 
		+ '<p>'+'Возраст получателя: ' + arrFromStorage[i].age + '</p>'
		+ '<div class="rowQuant"><buton class="minus" dataMinus="'+ newObjPlus +'">&mdash;</buton><p>'+'Кол-во: ' + arrFromStorage[i].quant + '</p><buton class="plus" dataPlus="'+ newObjPlus +'">+</buton></div>'		
		+ '<p>'+'Цена: ' + sumPriceElem + ' грн' + '</p>'
		+ '</div>' + '<br>');
    }
var resultSum = arrSumPrice.reduce(function(prev, next) {
  return prev + next;
}, 0);
var newStr = stringFromStorage.replace(/"/g, '');
var newStr0 = newStr.replace(/price/g, 'Цена за еденицу');
var newStr1 = newStr0.replace(/]/g, '');
var newStr2 = newStr1.replace(/name/g, 'Название бокса');
var newStr3 = newStr2.replace(/id/g, 'Номер заказа');
var newStr4 = newStr3.replace(/{/g, '<br><br>');
var newStr5 = newStr4.replace(/sex/g, 'Пол получателя');
var newStr6 = newStr5.replace(/:/g, '-');
var newStr7 = newStr6.replace(/age/g, 'Возраст получателя');
var newStr8 = newStr7.replace(/quant/g, 'Кол-во данного бокса');
var newStr9 = newStr8.replace(/textBox/g, 'Текст на открытке');
var newStr10 = newStr9.replace(/,/g, '<br>');
var newStr11 = newStr10.replace(/}/g, '');
var newStr12 = newStr11.slice(1);
$('#dataLocalStor').val(newStr12);
}
$('.presentBasket').append('<div style="border-top: 2px dotted; border-bottom: 2px dotted; padding: 0.7em; font-size: 1.5em; margin-bottom: 1.5em; color: #228B22">' + 'К оплате: ' + resultSum + '</div>');

}
load();
function first() {
	var name = $('#nameBox').text();
	var price = $('#cost').text();
	var sex = $('input[name=option]:checked').val();
	var age = $('#sortSel').val();
	var textBox = $('#hide').val();
	var today = new Date();
	            var second = today.getSeconds();
				var minute = today.getMinutes();
	            var random = Math.floor(Math.random() * 1000);
	            var id = second + minute + '' + random;
	var obj = {id: id, name: name, price: price, sex: sex, age: age, quant: 1, textBox: textBox};
	if(localStorage.getItem('card') == null){
		    var arrToStorage = [];
			arrToStorage.push(obj);
			var jsonToStorage = JSON.stringify(arrToStorage);
			localStorage.setItem('card',jsonToStorage);
		}else{
			var stringFromStorage = [];
			stringFromStorage = localStorage.getItem('card');
			var arrFromStorage = JSON.parse(stringFromStorage);
            for (var i=0; i < arrFromStorage.length ; ++i) {
				if (arrFromStorage[i].name == obj.name && arrFromStorage[i].sex == obj.sex && arrFromStorage[i].age == obj.age) {
				arrFromStorage[i].quant = arrFromStorage[i].quant + 1;
				var flag = 1;
			 }} 	 
function addObj() {
            arrFromStorage.push(obj);
			var jsonToStorage = JSON.stringify(arrFromStorage)
			localStorage.setItem('card',jsonToStorage) 	
} 
if (!flag) {
addObj();
var flag = 0;
}
else {
var jsonToStorage = JSON.stringify(arrFromStorage)
localStorage.setItem('card',jsonToStorage)	
}	
		}
	}
$('#button1').click(function() {
	first();
	addNumberInBasket ();
	localStorage.setItem('openCard', 1);
})
$(document).on('click', '.Delete', function() {
var arrForDelStorage = localStorage.getItem('card');
var DelStorage = JSON.parse(arrForDelStorage); 
var atr = $(this).attr('data');
for ( var i = 0; i < DelStorage.length; i++ ) {
    if (DelStorage[i].id == atr) {
        DelStorage.splice(i, 1);
    }
	
}
var storedAdd = JSON.stringify(DelStorage);
localStorage.setItem('card',storedAdd);
addNumberInBasket ();
$('.presentBasket').html('<h4>Вы заказываете:</h4><br>');
load();
})
});

