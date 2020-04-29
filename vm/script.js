/////// Toggle the menu class for mobile devices /////
$( ".mob-menu" ).click(function() {
  $( ".menu" ).toggleClass("show");
  $(".mob-menu a p").toggleClass("hide");
  $(".header").toggleClass("header-height");
});

///////////// Fade in header menu ////////////
  $(".header").hide().fadeIn(2500);
//////////////////////////////////////////////

// var x = document.getElementById("select");
// var p = document.getElementById("demo")
   
function selectItems(x) {
   var x = document.getElementById("select").value;
   console.log("value");
  var p = document.getElementById("demo").textContent = "You selected: " + x;
   console.log("text");
}


// var sT1 = document.querySelector('select'); 
// var txt = document.querySelector('p'); 

// sT1.addEventListener('onchange', selectItems); 

// function selectItems() { 
//   if (sT1.value === 'All Items') 
// { 
  
//   sT1.textContent = 'Stop machine'; 
//   txt.textContent = 'The machine has started!'; 
// } else { 
//   sT1.textContent = 'Start machine'; 
//   txt.textContent = 'The machine is stopped.'; 
//  } 
// }
