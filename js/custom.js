$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 100)
    $('nav img').toggleClass('logo-image', $(this).scrollTop() > 100)
});