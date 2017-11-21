var katalog_height = 0;

/*==================ACCORDION=======================*/

jQuery(document).ready(function($) {

       $('.accordion .content').hide().prev().prev().click(function(){
        $(this).addClass('active').css({
            'color' : '#d26834'
        });
        //$(this).next('.arrow').hide();
        $('.accordion .head').not(this).css({
            'color' : '#6d6d6d'
        })
        $('.accordion .content').not(this).slideUp().prev('.arrow').fadeIn('fast');
        $(this).next().next().not(':visible').slideDown().prev('.arrow').fadeOut('fast');

    });
   $('.accordion .content').first().slideDown().prev('.arrow').hide();
   $('.accordion .head').first().css({
        'color' : '#d26834'
   });

});


/*==================ACCORDION=======================*/


/*=================СМЕНА КАРТИНОК ВОЗЛЕ АККОРДИОНА========*/

function look(e)
{

document.querySelector('.visible').classList.remove('visible');
document.querySelector( '#' + e.getAttribute('forid') ).classList.add('visible');

};

/*=================СМЕНА КАРТИНОК ВОЗЛЕ АККОРДИОНА========*/




jQuery(document).ready(function($) {
    $('#s04 ul li a').click(function(){
        $('#s04 li.active').removeClass('active');
        $('#s04 li a[href="' + $(this).attr('href') + '"]').parent().addClass('active');

        var url = $(this).attr('href');

        $('#content').load(url, function(){
            // console.log($(this).find('.product a.btn'));
            $(this).find('.product a.btn').on('click', function(){ 
                popup(2, this) 
            });
            $(this).find('a.prev').on('click', function(){ 
                popup(1, this) 
            });

            katalog_height = parseInt($('#s04').css('height'));
        });

        return false
    });

    url = $('#s04 .nav li.active a').attr('href');

    $('#content').load(url, function(){
        $(this).find('.product a.btn').on('click', function(){ 
            popup(2, this) 
        });
        $(this).find('a.prev').on('click', function(){ 
            popup(1, this) 
        });

        katalog_height = parseInt($('#s04').css('height'));


    });
});


$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {

    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    if (window.innerWidth < 799)
      return;

    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        if ($this.is(':hover')) {
            advance()
            return;
        }
        move(currentIndex + 1);
      } else {
        if ($this.is(':hover')) {
            advance()
            return;
        }
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});


$(document).ready(function() {
  $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 500);
    return false;
  });



    d = new Date();
    d.setDate(d.getDate() + 1);

    day = d.getDate();
    month = d.getMonth() + 1;

    day = (day > 9 ? day : '0' + day);
    month = (month > 9 ? month : '0' + month);

    $('.ddate').html( 'Завтра ' + day + '.' + month + '.' + d.getFullYear() );


    d.setDate(d.getDate() + 2);

    day = d.getDate();
    day = (day > 9 ? day : '0' + day);

    month = d.getMonth() + 1;
    month = (month > 9 ? month : '0' + month);

    if (vis != '1')
        $('#popup1 .discount').html(
              '<p>Скидка действительна<br/> до <span>' 
                + day + '.'+ month + '.'+ d.getFullYear()
            + '</span></p>');



  popup_html = $('#popup1').html();
});


function popup(nm, e) {
    popupElm = document.getElementById("popup-bg");
    if (nm == -1) {
        if ($('#popup01').css('display') !== 'none' || $('#popup02').css('display') !== 'none') {
            $('.popup').removeClass('visible');
            popup(1);
        } else {
            popupElm.classList.remove('visible');
            document.querySelector('body').style.overflow = 'auto';
        }

    } else {
        elm = popupElm.getElementsByClassName('popup');
        if (typeof nm != 'undefined')
            for (var i = elm.length - 1; i >= 0; i--) {
                if (elm[i].id == 'popup' + nm) {
                    elm[i].classList.add('visible');
                    popupElm.classList.add('visible');
                    document.querySelector('body').style.overflow = 'hidden';

                    /* инфо о товаре из каталога */
                    if (nm == 1 && typeof e != 'undefined') {

                        parent_box = $(e).parents('.product');
                        if (parent_box.length == 0 || parent_box == window) {
                            parent_box = $(e).parents('.tovar');
                            index = $(parent_box).index('.tovar');
                            replace_to = tovar_akcii;
                        } else {
                            index = $(parent_box).index('.product');
                            replace_to = tovar_katalog;
                        }


                        if (typeof replace_to[index] != 'undefined') {

                          cena = (vis == '1' ? replace_to[index].cena : replace_to[index].cena_visit2);


                          cla = (replace_to[index].ostalos < 4 ? 'animate red' : replace_to[index].ostalos < 16 ? 'orange' : '');
                          ostatok = '<p>Осталось: <span class="ostatok ' + cla + '">' + replace_to[index].ostalos + ' шт.</span></p>';


                          $('#popup1').html(
                              popup_html
                                  .replace('{{opisanie_li}}', '<ul>' + replace_to[index].opisanie_li + '</ul>')
                                  .replace('{{opisanie}}', '<p>' + replace_to[index].opisanie + '</p>')
                                  .replace('{{cena}}', '<p>' + cena + '</p>')
                                  .replace('{{cena_old}}', '<p>' + replace_to[index].cena_old + '</p>')
                                  .replace('{{li}}', '<ul>' + replace_to[index].li + '</ul>')
                                  .replace('{{ostalos}}', ostatok)
                                  .replace('{{sprava}}', replace_to[index].sprava)
                                  .replace('{{about}}', replace_to[index].about)
                                  .replace('{{name}}', replace_to[index].name)
                                  .replace('{{kartinki}}', replace_to[index].kartinki)
                                  .replace('{{foto}}', replace_to[index].foto)
                          );
                        }
                        

                            

                        $(elm[i]).find('input[name="tovar"]').val( $(e).find('.tar p').html() );

                    } else
                    /* товар из каталога */
                    if (nm == 2 && typeof e != 'undefined') {
                        e = $(e).parents('.product');
                        $(elm[i]).find('input[name="tovar"]').val( $(e).find('.tar p').html() );
                    }

                } else {
                    elm[i].classList.remove('visible');
                }
            }
        else {
            popupElm.classList.add('visible');
            document.querySelector('body').style.overflow = 'hidden';
        }
    }
}


function showForm(n, e){
    popup(-1);
    popup(n);

    $('#popup' + n).find('input[name="tovar"]').val( $(e).parents('.content').find('.block p:first').text() );
}

function hrefTube() {
    elm = document.getElementsByClassName('ytbtn');
    for (var i = elm.length - 1; i >= 0; i--) {
        changehref(elm[i])
    }

    function changehref(e) {
        if (typeof e != 'undefined' && e != null && e.getAttribute('href') > '') {
            var id = (e.getAttribute('href').match(/watch\?v\=([a-zA-Z0-9_-]{5,11})/) || [])[1];
            e.setAttribute('href', '#' + id);
        }
    }
}

function startTube(e) {
    if (e == null) return false;
    var id = e.getAttribute('href').substring(1);
    if (e.classList.contains('ytreplace')) {
        console.log(e.querySelector('img').clientWidth);
        console.log(e.querySelector('img').clientHeight);
        iframe = document.createElement("iframe");
        iframe.width = e.querySelector('img').clientWidth;
        iframe.height = e.querySelector('img').clientHeight;
        iframe.frameborder = 0;
        iframe.allowfullscreen = "true";
        iframe.style.background = "url(\"data:image/svg+xml;utf8, <svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='50px' width='120px'><text x='0' y='15' fill='gray' font-size='20'>Loading...</text></svg>\") no-repeat 50% 50%";
        iframe.src = 'http://www.youtube.com/embed/' + id + '?rel=0&autoplay=1';
        iframe.style.border = "none";
        e.parentNode.replaceChild(iframe, e);
    } else {
        yt = document.querySelector('.popupTube');
        yt.innerHTML = '<iframe width="560" height="315" src="http://www.youtube.com/embed/' + id + '?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';
        yt.style.display = 'block';
    }
}

function hideTube() {
    $('.popupTube').hide();
    document.querySelector('.popupTube').innerHTML = '';
}
window.onload = function() {
    document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
    hrefTube();
    $('.ytbtn').on('click', function() {
        startTube(this)
    });
    $('.youtube').on('click', function() {
        startTube(this)
    });
    $('.popupTube').on('click', function() {
        hideTube()
    });
};

/*====================ПОДСКАЗКА================*/

jQuery(document).ready(function($) {
    $('.otvet').hide();

    $katalognav_ul = $('#katalognav ul');

    $('#katalognav .btn').click(function(event) {
        if ($katalognav_ul.css('display') == 'none') {
            $('#katalognav .btn span').hide();
            $katalognav_ul.show();
        } else {
            $katalognav_ul.hide();
            $('#katalognav .btn span').show();
        }
    });



    if (window.innerWidth < 600)
        showMobKatalog();

    $('#s04 .product a.btn').on('click', function(){ popup(2, this) });

});

/*====================ПОДСКАЗКА================*/


function showMobKatalog() {
    var katalog_top = $('#s04').offset().top;

    window.onscroll = throttle(function() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;

        if (katalog_top <= scrolled && katalog_top + katalog_height >= scrolled) {
            if ($('#katalognav').css('display') != 'block')
                $('#katalognav').css('display', 'block');
        } else
            if ($('#katalognav').css('display') != 'none')
                $('#katalognav').css('display', 'none');

    }, 400);
}


function throttle(fn, threshhold, scope) {
  threshhold || (threshhold = 250);
  var last,
      deferTimer;
  return function () {
    var context = scope || this;
  
    var now = +new Date,
        args = arguments;
    if (last && now < last + threshhold) {
      // hold on to it
      clearTimeout(deferTimer);
      deferTimer = setTimeout(function () {
        last = now;
        fn.apply(context, args);
      }, threshhold);
    } else {
      last = now;
      fn.apply(context, args);
    }
  };
}


jQuery(document).ready(function($) {

    var topSlide = $('.topSlide');
    currentIndex = 0;
    slidesLength = topSlide.length;

  function topSlide_run() {
    if (window.innerWidth < 799)
      return;

    if (typeof timeout != 'undefined')
        clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < slidesLength) {
        // if (topSlide.is(':hover')) {
        //     topSlide_run()
        //     return;
        // }
        topSlide_animate(currentIndex + 1);
      } else {
        // if (topSlide.is(':hover')) {
        //     topSlide_run()
        //     return;
        // }
        topSlide_animate(0);
      }
    }, 4000);
  }
  function topSlide_animate(n){
    if ($(topSlide).find('.ml:hover').length > 0){
        topSlide_run();
        return;
    }
    $this = $('.slide_' + n);
    if ($this.length > 0) {
        currentIndex = n;
        prevIndex = n - 1;
    } else {
        currentIndex = 0;
        prevIndex = topSlide.length;
        $this = $('.topSlide_novis');
    }
    if (prevIndex == 0)
        $prev = $('.topSlide_novis');
    else
        $prev = $('.slide_' + prevIndex);


    // $(topSlide).css({
    //     display: 'none',
    //     opacity: 0
    // });
    
        // $('.topSlide').css('opacity', 1);

    $prev.css({opacity: 1, 'z-index': 9}).animate({opacity: 0}, 200, function() {
        // if (prevIndex == 0)
        //     $(this).css('z-index', '0');

        $prev.css('z-index', '0');
    });
    $this.css({opacity: 1, 'z-index': currentIndex+1, display: 'block'});

    // console.log(currentIndex, prevIndex);

    // $prev
    


    topSlide_run();
  }

    topSlide_run();

});
