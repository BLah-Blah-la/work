$(init);
$(ini);
$(izzy);

function init(){
$('#2').bind('click', sayHello);
}
function sayHello(){
$("#customers-price_name :contains('Бизнес')").attr("selected", "selected");
}

function izzy(){
$('#3').bind('click', sayo);
}
function sayo(){
$("#customers-price_name :contains('Стандартный')").attr("selected", "selected");
}

function ini(){
$('#1').bind('click', sayHel);
}
function sayHel(){
$("#customers-price_name :contains('Экономный')").attr("selected", "selected");
}