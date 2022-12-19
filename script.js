function previous() {
  window.history.back();
}

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

// function changeClass() {
//   var element = document.getElementById("classchange");
//   element.classList.toggle("dropdown_img_down");
// }

let itemsToShow = {
  dziritadi1: "informacia1",
  dziritadi2: "informacia2",
  dziritadi3: "informacia3",
  dziritadi4: "informacia4",
  dziritadi5: "informacia5",
  dziritadi6: "informacia6",
  dziritadi7: "informacia7",
  dziritadi8: "informacia8",
  dziritadi9: "informacia9",
  dziritadi10: "informacia10",
  dziritadi11: "informacia11",
  dziritadi12: "informacia12",
  dziritadi13: "informacia13",
  dziritadi14: "informacia14",
  dziritadi15: "informacia15",
  dziritadi16: "informacia16",
  dziritadi17: "informacia17",
  dziritadi18: "informacia18",
  dziritadi19: "informacia19",
  dziritadi20: "informacia20",
  dziritadi21: "informacia21",
  dziritadi22: "informacia22",
  dziritadiMain: "informaciaMain",
};

function GetIdChange() {
  let dziritadiel = window.event.target.id;
  if (
    window.event.target.style.background ==
    'url("https://cdn-icons-png.flaticon.com/512/32/32323.png") 98% 50% no-repeat'
  ) {
    window.event.target.style.background =
      "url('https://cdn-icons-png.flaticon.com/512/32/32195.png')  no-repeat";
    window.event.target.style.backgroundPosition = "96% 50%";
    window.event.target.style.backgroundSize = "18px 18px";
  } else {
    window.event.target.style.background =
      "url('https://cdn-icons-png.flaticon.com/512/32/32323.png') no-repeat";
    window.event.target.style.backgroundPosition = "98% 50%";
  }

  var informacia = document.querySelectorAll(`.${itemsToShow[dziritadiel]}`);
  if (informacia) {
    for (let i = 0; i < informacia.length; i++) {
      const element = informacia[i];
      if (element.style.display === "flex") {
        element.style.display = "none";
      } else {
        element.style.display = "flex";
      }
    }
  }
}

// let showDemografia = [dziritadi3];

function demografiaShow() {
  for (let i = 3; i < 8; i++) {
    var x = document.getElementById(`dziritadi${i}`);
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
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

function addbackcolor() {
  var element = document.getElementById("cxrili");
  element.classList.add("cxrili_style");


  var element = document.getElementById("displayNone");
  element.classList.remove("displayNone");
}

// function deleteDisplayNone() {
  
// }
