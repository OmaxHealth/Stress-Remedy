var $ = jQuery;

/* jQuery Constructor: Page Listener */
jQuery(document).ready(function($){	
	
	initMobileNav();
	initAccordion();
	smoothScroll();
	newsletterPlaceholder();
	addWriteAReviewButton();
	showReviewForm();

});

// ===================================================================
// Global Function to control mobile navigation
// ===================================================================
function initMobileNav(){
	$('header nav.menu svg.hamburger').click(function(){
		var navMobile = $(this).parent();
		if (navMobile.hasClass('open')){
			navMobile.removeClass('open');
		} else {
			navMobile.addClass('open');
		}
	});
}

function initAccordion() {
	$(".accordion").on("click", ".accordion-header", function() {
 		$(this).toggleClass("active").next().slideToggle();
 		$(".fa-plus").attr( "class", "fa fa-minus" );
 	});
}

function smoothScroll() {
	$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top - 80
	    }, 1000);
	});
}

function newsletterPlaceholder() {
	$('#kla_email_klaviyo_emailsignup_widget-2').attr('placeholder', 'Email Address');
}

function addWriteAReviewButton() {
	$('.shortcode-site-reviews-summary').prepend('<button id="write-rev-btn">Write a review</button>');
}

function showReviewForm(){
	$('#write-rev-btn').click(function(){
		$('.shortcode-site-reviews-form').toggle();
	});
}