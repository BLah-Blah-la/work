// Кнопка наверх

$(document).ready(function () {
    $(document.body).append('<a id="back_top" href="#"></a>');
    $('#back_top').hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 120) {
            $('#back_top').fadeIn('slow');
        } else {
            $('#back_top').fadeOut('slow');
        };
    });

    $('#back_top').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        $('#back_top').fadeOut('slow').stop();
    });
});

// Прилипание меню

$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.sticky').addClass('sticky-top');
    } 
    else {
        $('.sticky').removeClass('sticky-top');
    }
});

// Скролл до элемента 

$('#menu a').click(function(){
    var el = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(el).offset().top - 50}, 800);
    return false;
});

// Скрываем "Показать еще"

$('a[data-toggle=collapse]').on('click',function() {
    $(this).hide();
})