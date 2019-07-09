$(window).scroll(function() {
    if ($(document).scrollTop() > 930) {
        $('.navbar').addClass('navbar-shrink');
    }
    else {
        $('.navbar').removeClass('navbar-shrink');
    }
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Owl carousel
$('.owl-partners').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// Owl carousel
$('.owl-portfolio').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
          ],
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

// Owl carousel
$('.owl-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
          ],
    dots:false,
    autoplay:true,
    smartSpeed:850,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

  // hide #back-top first
  $("#back-top").hide();

  // fade in #back-top

  $(window).scroll(function () {
  	if ($(this).scrollTop() > 300) {
  		$('#back-top').fadeIn();
  	} else {
  		$('#back-top').fadeOut();
  	}
  });

  // scroll body to 0px on click
  $('#back-top a').on("click", function(){
  	$('body,html').animate({
  		scrollTop: 0
  	}, 800);
  	return false;
  });

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(function() {    
    $('.stats-bar').appear();
    $('.stats-bar').on('appear', function() {
    var fx = function fx() {
    $(".stat-number").each(function (i, el) {
        var data = parseInt(this.dataset.n, 10);
        var props = {
            "from": {
                "count": 0
            },
                "to": {
                "count": data
            }
        };
        $(props.from).animate(props.to, {
            duration: 1000 * 1,
            step: function (now, fx) {
                $(el).text(Math.ceil(now));
            },
            complete:function() {
                if (el.dataset.sym !== undefined) {
                  el.textContent = el.textContent.concat(el.dataset.sym)
                }
            }
        });
    });
    };
    
    var reset = function reset() {
        console.log($(this).scrollTop())
        if ($(this).scrollTop() > 90) {
            $(this).off("scroll");
          fx()
        }
    };
    
    $(window).on("scroll", reset);
});
    });
$(window).load(function() {
    $('.flexslider').flexslider();
    $(".card").flip();
    $('.select-basic-1').select2();
    $( "#accordion" ).accordion();
    var myValidateLanguage = {
        errorTitle: 'Form submission failed!',
        requiredFields: 'You have not answered all required fields',
        badTime: 'You have not given a correct time',
        badEmail: 'Molimo provjerite ispravan unos email adrese',
        badTelephone: 'You have not given a correct phone number',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'You have not given a correct date',
        lengthBadStart: 'The input value must be between ',
        lengthBadEnd: ' characters',
        lengthTooLongStart: 'The input value is longer than ',
        lengthTooShortStart: 'The input value is shorter than ',
        notConfirmed: 'Input values could not be confirmed',
        badDomain: 'Incorrect domain value',
        badUrl: 'The input value is not a correct URL',
        badCustomVal: 'The input value is incorrect',
        andSpaces: ' and spaces ',
        badInt: 'Unos mora biti brojčani',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'You have to choose at least ',
        badNumberOfSelectedOptionsEnd: ' answers',
        badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
        badAlphaNumericExtra: ' and ',
        wrongFileSize: 'The file you are trying to upload is too large (max %s)',
        wrongFileType: 'Only files of type %s is allowed',
        groupCheckedRangeStart: 'Please choose between ',
        groupCheckedTooFewStart: 'Please choose at least ',
        groupCheckedTooManyStart: 'Please choose a maximum of ',
        groupCheckedEnd: ' item(s)',
        badCreditCard: 'The credit card number is not correct',
        badCVV: 'The CVV number was not correct',
        wrongFileDim : 'Incorrect image dimensions,',
        imageTooTall : 'the image can not be taller than',
        imageTooWide : 'the image can not be wider than',
        imageTooSmall : 'the image was too small',
        min : 'min',
        max : 'max',
        imageRatioNotAccepted : 'Image ratio is not accepted'
    }
    $.validate({
      language : myValidateLanguage
    });
  });