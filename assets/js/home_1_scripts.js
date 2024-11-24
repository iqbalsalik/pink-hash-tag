$(function () {

    // ------------ team images width same height -----------
    // var images = $(".tc-team-style1 .team-card .img, .img_sm_h");
    // images.each(function () {
    //   var width = $(this).width();
    //   $(this).height(width);
    // });


    // projects change background 
    $('.tc-services-st1 .service-card').on('mouseenter click', function () {
        var tab_id = $(this).attr('data-tab');
        $('.tc-services-st1 .service-card').removeClass('current');
        $(this).addClass('current');

        $('.glry-img .tab-img ').removeClass('current');
        $("#" + tab_id).addClass('current');

        if ($(this).hasClass('current')) {
            return false;
        }
    });


});


// ------------ swiper sliders -----------
$(document).ready(function () {

    // ------------ tc-header-slider1 -----------
    var swiper = new Swiper('.tc-header-st1 .header-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        effect: "fade",
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-header-st1 .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.tc-header-st1 .swiper-next',
            prevEl: '.tc-header-st1 .swiper-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 6000,
        },
        loop: false,
    });


    // ------------ blog slider -----------
    var swiper = new Swiper('.tc-blog-st1 .posts-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1500,
        pagination: {
            el: '.tc-blog-st1 .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.tc-blog-st1 .swiper-next',
            prevEl: '.tc-blog-st1 .swiper-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            787: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });

});



// ------------ gsap scripts -----------
$(function () {

    // ------ body bg effect ------


});

var tabs = document.getElementById('icetab-container').children;
var tabcontents = document.getElementById('icetab-content').children;

var myFunction = function() {
	var tabchange = this.mynum;
	for(var int=0;int<tabcontents.length;int++){
		tabcontents[int].className = ' tabcontent';
		tabs[int].className = ' icetab';
	}
	tabcontents[tabchange].classList.add('tab-active');
	this.classList.add('current-tab');
}	


for(var index=0;index<tabs.length;index++){
	tabs[index].mynum=index;
	tabs[index].addEventListener('click', myFunction, false);
}


var selector = '.nav li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});





