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

let parent = document.getElementById("append");

function render(data, index) {
  console.log(index);
  var wrapper = document.createElement("tr");
  wrapper.id = "IdTrInfoRow";
  wrapper.className = trWrapper[index];

  let html = `
                <tr id=trInfoRow>
                    <td class=${tdWrapper[index]}><div class="area">${data.Area}</div></td>
                    <td class=${tdWrapper[index]}><div class="population">${data.Population}</div></td>
                    <td class=${tdWrapper[index]}><div class="GDP"> ${data.GDP} </div> </td>
                    <td class=${tdWrapper[index]}><div class="GDPPerCapita">${data.GDPPerCapita}</div></td>
                    <td class=${tdWrapper[index]}><div class="UnemploymentRate">${data.UnemploymentRate}</div></td>
                    <td class=${tdWrapper[index]}><div class="EmploymentRate">${data.EmploymentRate}</div></td>
                    <td class=${tdWrapper[index]}><div class="EmploymentRateIndustry">${data.EmploymentRateIndustry}</div></td>
                    <td class=${tdWrapper[index]}><div class="AverageSalaryIndustry">${data.AverageSalaryIndustry}</div></td>
                    <td class=${tdWrapper[index]}><div class="RegistredEntities">${data.RegistredEntities}</div></td>
                </tr> 
            `;

  wrapper.innerHTML = html;

  return wrapper;
}

let testRequest = function (data) {
  return axios({
    method: "post",
    url: "get_select.php",
    data: data,
    headers: {
      "Content-Type": "multipart/form-data",
    },
  })
    .then(function (response) {
      parent.innerHTML = "";

      response.data.map(function (i, index) {
        let dom = render(i, index);
        parent.append(dom);
      });

      //handle success
      console.log(response.data);
      myFunction();
      // trInfoRowFunction();
    })
    .catch(function (response) {
      //handle error
      console.log(response);
    });
};

function validateform(e) {
  e.preventDefault();

  const formData = new FormData(e.target);

  for (var pair of formData.entries()) {
    console.log(pair[0] + ", " + pair[1]);
  }

  testRequest(formData);
}

var form = document.getElementsByName("applyform")[0];
console.log("form", form);
form.addEventListener("submit", validateform);
