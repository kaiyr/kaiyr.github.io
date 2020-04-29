$(function () {
    // Servise
    var owl = $(".services-slider");
    owl.owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        
        nav: true,
        navText: [
  '<span class="arrow-owl arrow-left"><</span>',
  '<span class="arrow-owl arrow-right">></span>'
]
    });
    
    // Partners
    var owl = $(".partners-slider");
    owl.owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 1500,
        margin: 10,
        loop: true,
        responsive: Object,
        dots: true,
        responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
    }
    });
});



//call widget

const modal = document.getElementById("myModal");

const newModal = document.getElementById("newModal");

const btn = document.getElementById("btn");

const nope = document.getElementById("nope");

const closeMe = document.getElementById("closeMe");

const yep = document.getElementById("yes");

const close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
};

nope.onclick = function() {
  modal.style.display = "none";
};

closeMe.onclick = function() {
  newModal.style.display = "none";
};

yep.onclick = function() {
  modal.style.display = "none";
  newModal.style.display = "block";
  countdownStart(26, "status");
};

close.onclick = function() {
  modal.style.display = "none";
  newModal.style.display = "none";
};

window.onclick = function(e) {
  if (e.target == modal || e.target == newModal) {
    modal.style.display = "none";
    newModal.style.display = "none";
  }
};

function countdownStart(secs, elem) {
  var element = document.getElementById(elem);
  element.innerHTML = "Please wait for " + secs + " seconds";
  if (secs < 1) {
    clearTimeout(timer);
    element.innerHTML =
      "Most likely we are already in the process of conversation :)";
  }
  secs--;

  var timer = setTimeout("countdownStart(" + secs + ', "' + elem + '")', 1000);
}

/*-------------------------
Phone validation---*/



$(function(){
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                return false;
        });
});
