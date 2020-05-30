// Clicking on ArrowDown icon, smooth scroll
let downArrow = document.getElementById("down-arrow");

downArrow.addEventListener("click", function() {
    document.getElementById('quiensoy').scrollIntoView({ 
        behavior: 'smooth' 
      });
});

// Clicking on Contactame Button, smooth scroll to contact area

let btnContact = document.getElementById("btn-contact");

btnContact.addEventListener("click", function() {
    $('html, body').animate({
        scrollTop: $('#contacto').offset().top
      }, 600, function(){
   
      });
});

// NAV BAR - Scrolls

$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 600, function(){
     
        });
        $(".mobileMenu").toggleClass("open");
        $(".overlay").toggleClass("open-overlay");  
      } // End if
    });
  });

// /////////////////

// Después de cierto punto, mostrar la NAVBAR
$(document).scroll(function() {
    let y = $(this).scrollTop();
    if (y > 600) {
      $('nav').fadeIn();
    } else {
      $('nav').fadeOut();
    }
  });

// /////////////////

$ (document).ready(function() {

    $('nav').hide();

    $(".navbar-toggler").on("click", function() {
        $(".mobileMenu").toggleClass("open");
        $(".overlay").toggleClass("open-overlay");
    });
    $(".overlay").on("click", function() {
        $(".mobileMenu").toggleClass("open");
        $(".overlay").toggleClass("open-overlay");
    });
    $("#icon-bars-rotated").on("click", function() {
        $(".mobileMenu").toggleClass("open");
        $(".overlay").toggleClass("open-overlay");
    });     
});