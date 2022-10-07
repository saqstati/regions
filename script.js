// const btn = document.querySelector("#btn");
// const container = document.querySelector("#press");
// btn.addEventListener("click", function () {
//     if (container.style.display === "block") {
//         container.style.display = "none";
//         btn.innerHTML = "ძიება"
//     } else {
//         container.style.display = "block";
//         btn.innerHTML = "ძიება"
//     }
// } );

const dziritadi = document.querySelector("#dziritadi");
const informacia = document.querySelectorAll(".informacia");

dziritadi.addEventListener("click", () => {
  for (let i = 0; i < informacia.length; i++) {
    const element = informacia[i];
    if (element.style.display === "flex") {
      element.style.display = "none";
    } else {
      element.style.display = "flex";
    }
  }
});

// dziritadi.addEventListener("click", () => {
//   if (element.style.display === "flex") {
//     element.style.display = "none";
//   } else {
//     element.style.display = "flex";
//   }
// });

function changeClass() {
  // document.getElementById('classchange').className = "dropdown_img_down";
  var element = document.getElementById("classchange");
  element.classList.toggle("dropdown_img_down");
}

// function samegrelo_function() {
//   var x = document.getElementById("group2-zoomed");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }

// function samegrelo_hideSVG() {
//     var style = document.getElementById("group2-zoomed").style.display;
//     if(style === "none")
//       document.getElementById("group2-zoomed").style.display = "block";
//     else
//       document.getElementById("group2-zoomed").style.display = "none";
//   }

// function addSamegreloClass() {
//    var element = document.getElementById("group2-zoomed");
//    element.classList.add("appearElement");
// element.style.display="block"

//   var style = document.getElementsByClassName("elementAppear").style.display;
//   if (style === "block")
//     document.getElementsByClassName("elementAppear").style.display = "none";
//   else document.getElementsByClassName("elementAppear").style.display = "block";
//}

// function HideElement(){
//     console.log("here")
//     var element = document.getElementById("group2-zoomed");
//     console.log(element)
//     element.style.display = "block"

// }

// $(document).ready(function() {
//     $('group2').bind('click', function() {
//         if ($(this).hasClass('active'))

//         else

//     });
// });

$(document).ready(function () {
  $('[data-toggle="popover"]').popover();
});

// function switchMode(){
//     // Body switching
//     if(document.getElementById("classchange").className == "classchange-day"){
//         document.getElementById("classchange").className = "classchange-night";
//     }else{
//         document.getElementById("classchange").className = "classchange-day";
//     }
//     // Heading switching
//     if(document.getElementById("main-heading").className == "main-heading-day"){
//         document.getElementById("main-heading").className = "main-heading-night";
//     }else{
//         document.getElementById("main-heading").className = "main-heading-day";
//     }

// function classchange(){
//     if (do) {

//     } else {

//     }
// }

// let containsClass = element.classList.contains('dropdown_up');
// element.classList.toggle('dropdown_up', !containsClass);
