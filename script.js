function previous() {
  window.history.back();
}

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
  dziritadi23: "informacia23",
  dziritadi31: "informacia31",
  dziritadi32: "informacia32",
  dziritadi33: "informacia33",
  dziritadi34: "informacia34",
  dziritadi35: "informacia35",
  dziritadi36: "informacia36",
  dziritadiMain: "informaciaMain",
  dziritadiMain2: "informacia11",
  dziritadiMain20: "informaciaMain20",
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
  // const info11 = document.querySelectorAll(".info11");
  // if (info11.style.display !== "none") {
  //   info11.style.display === "none";
  //   console.log("121111111111111");
  // } else {
  //   info11.style.display === "block";
  // }
  console.log(dziritadiel);
}

// let showDemografia = [dziritadi3];

function demografiaShow() {
  for (let i = 3; i < 9; i++) {
    var x = document.getElementById(`dziritadi${i}`);
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
}

function healthcareShow() {
  for (let i = 20; i < 22; i++) {
    var x = document.getElementById(`dziritadi${i}`);
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
}

function registerShow() {
  for (let i = 12; i < 15; i++) {
    var x = document.getElementById(`dziritadi${i}`);
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  // var y = document.getElementsByClassName(`info11`);
  // if(y.style.display === "block") {
  //   y.style.display === "none"
  // }else {
  //   y.style.display === "block"

  // }
}
// function registerShow() {
//   for (let i = 12; i < 15; i++) {
//     var x = document.getElementById(`dziritadi${i}`);
//     var y = document.getElementsByClassName(`informacia${i}`);
//     if (x.style.display === "block") {
//       x.style.display = "none";

//     } else {
//       x.style.display = "block";
//     }
//   }
// }

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
  $('[data-bs-toggle="popover"]').popover();
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

  var displayNone = document.getElementById("displayNone");
  displayNone.classList.remove("displayNone");

  var hidenFooter = document.getElementById("hiden_footer");
  hidenFooter.classList.remove("displayNone");

  var centerTable = document.getElementById("center_table");
  centerTable.classList.add("center");
}

document.addEventListener("DOMContentLoaded", function () {
  var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
});

// Function to detect the region from the URL path and apply colors and background image
function applyRegionStyles(region) {
  let bgColor, hoverColor, bgImage;

  switch (region) {
    case "adjara":
      bgColor = "#ce8d34";
      hoverColor = "#cb744c";
      bgImage = "url('/regions/1600-900-optimized/4.jpg')";
      break;
    case "guria":
      bgColor = "#6ea76f";
      hoverColor = "#66aba5";
      bgImage = "url('/regions/1600-900-optimized/3.jpg')";
      break;
    case "imereti":
      bgColor = "#c85861";
      hoverColor = "#c75685";
      bgImage = "url('/regions/1600-900-optimized/6.jpg')";
      break;
    case "samtskhe_javakheti":
      bgColor = "#9e6e9c";
      hoverColor = "#b5568c";
      bgImage = "url('/regions/1600-900-optimized/5.jpg')";
      break;
    case "Kakheti":
      bgColor = "#c85861";
      hoverColor = "#c75685";
      bgImage = "url('/regions/1600-900-optimized/9.jpg')";
      break;
    case "mtskheta_mtianeti":
      bgColor = "#9e6e9c";
      hoverColor = "#b5568c";
      bgImage = "url('/regions/1600-900-optimized/11.jpg')";
      break;
    case "kvemo_kartli":
      bgColor = "#6ea76f";
      hoverColor = "#66aba5";
      bgImage = "url('/regions/1600-900-optimized/8.jpg')";
      break;
    case "Racha":
      bgColor = "#ce8d34";
      hoverColor = "#cb744c";
      bgImage = "url('/regions/1600-900-optimized/7.jpg')";
      break;
    case "Samegrelo":
      bgColor = "#678dac";
      hoverColor = "#757ea6";
      bgImage = "url('/regions/1600-900-optimized/2.jpg')";
      break;
    case "shida_kartli":
      bgColor = "#678dac";
      hoverColor = "#757ea6";
      bgImage = "url('/regions/1600-900-optimized/12.jpg')";
      break;
    case "Tbilisi":
      bgColor = "#ce8d34";
      hoverColor = "#cb744c";
      bgImage = "url('/regions/1600-900-optimized/10.jpg')";
      break;
    default:
      bgColor = "#ce8d34"; // Default color (Adjara) if region is unknown
      hoverColor = "#cb744c";
      bgImage = "url('/regions/1600-900-optimized/15.jpg')"; // Default image
  }

  // Apply button colors
  document.querySelectorAll(".header-btn").forEach((btn) => {
    btn.style.backgroundColor = bgColor;
    btn.style.borderColor = bgColor;

    btn.addEventListener("mouseover", () => {
      btn.style.backgroundColor = hoverColor;
      btn.style.borderColor = hoverColor;
    });

    btn.addEventListener("mouseout", () => {
      btn.style.backgroundColor = bgColor;
      btn.style.borderColor = bgColor;
    });
  });

  // Apply background image
  const backgroundMain = document.getElementById("background-main");
  if (backgroundMain && bgImage) {
    backgroundMain.style.backgroundImage = bgImage;
  }
}

// Retrieve region from URL
const urlParams = new URLSearchParams(window.location.search);
const municipal = urlParams.get("municipal")?.toLowerCase();
const regionQueryParam = urlParams.get("region")?.toLowerCase();
let region;

if (["lanchkhuti", "ozurgeti", "chokhatauri"].includes(municipal)) {
  region = "guria";
} else if (
  ["batumi", "keda", "kobuleti", "khelvachauri", "shuakhevi", "khulo"].includes(
    municipal
  )
) {
  region = "adjara";
} else if (
  [
    "khoni",
    "tskaltubo",
    "baghdati",
    "chiatura",
    "kutaisi",
    "sachkhere",
    "samtredia",
    "terjola",
    "tkibuli",
    "vani",
    "kharagauli",
    "zestaponi",
  ].includes(municipal)
) {
  region = "imereti";
} else if (
  [
    "adigeni",
    "aspindza",
    "akhaltsikhe",
    "akhalkalaki",
    "borjomi",
    "ninotsminda",
  ].includes(municipal)
) {
  region = "samtskhe_javakheti";
} else if (
  [
    "akhmeta",
    "dedoplistskaro",
    "gurjaani",
    "lagodekhi",
    "sagarejo",
    "sighnaghi",
    "telavi",
    "kvareli",
  ].includes(municipal)
) {
  region = "Kakheti";
} else if (["dusheti", "mtskheta", "tianeti", "kazbegi"].includes(municipal)) {
  region = "mtskheta_mtianeti";
} else if (
  [
    "bolnisi",
    "dmanisi",
    "gardabani",
    "marneuli",
    "rustavi",
    "tetritskaro",
    "tsalka",
  ].includes(municipal)
) {
  region = "kvemo_kartli";
} else if (["ambrolauri", "tsageri", "lentekhi", "oni"].includes(municipal)) {
  region = "Racha";
} else if (
  [
    "abasha",
    "chkhorotsku",
    "martvili",
    "mestia",
    "poti",
    "senaki",
    "tsalenjikha",
    "khobi",
    "zugdidi",
  ].includes(municipal)
) {
  region = "Samegrelo";
} else if (["gori", "kaspi", "kareli", "khashuri"].includes(municipal)) {
  region = "shida_kartli";
} else if (window.location.pathname.includes("guria")) {
  region = "guria";
} else if (window.location.pathname.includes("adjara")) {
  region = "adjara";
} else if (window.location.pathname.includes("imereti")) {
  region = "imereti";
} else if (window.location.pathname.includes("javaxeti")) {
  region = "samtskhe_javakheti";
} else if (window.location.pathname.includes("kakheti")) {
  region = "Kakheti";
} else if (window.location.pathname.includes("mcxeta-mtianeti")) {
  region = "mtskheta_mtianeti";
} else if (window.location.pathname.includes("qvemo-qartli")) {
  region = "kvemo_kartli";
} else if (window.location.pathname.includes("racha")) {
  region = "Racha";
} else if (window.location.pathname.includes("samegrelo")) {
  region = "Samegrelo";
} else if (window.location.pathname.includes("shida-qartli")) {
  region = "shida_kartli";
} else if (window.location.pathname.includes("tbilisi")) {
  region = "Tbilisi";
} else if (regionQueryParam) {
  switch (regionQueryParam) {
    case "guria":
      region = "guria";
      break;
    case "adjara":
      region = "adjara";
      break;
    case "imereti":
      region = "imereti";
      break;
    case "samtskhe_javakheti":
      region = "samtskhe_javakheti";
      break;
    case "kakheti":
      region = "Kakheti";
      break;
    case "mtskheta_mtianeti":
      region = "mtskheta_mtianeti";
      break;
    case "kvemo_kartli":
      region = "kvemo_kartli";
      break;
    case "racha":
      region = "Racha";
      break;
    case "samegrelo":
      region = "Samegrelo";
      break;
    case "shida_kartli":
      region = "shida_kartli";
      break;
    case "tbilisi":
      region = "Tbilisi";
      break;
  }
}

// Apply styles based on detected region
if (region) {
  applyRegionStyles(region);
}
