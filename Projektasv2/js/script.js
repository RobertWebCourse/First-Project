$(document).ready(function(){
    $('.parallax').parallax();
});
$(document).ready(function(){
    $('.carousel').carousel();
});

	var $preloader = $('#p_prldr'),
    $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');    