const btn = document.querySelector("#btn");
const container = document.querySelector("#press");
btn.addEventListener("click", function () {
    if (container.style.display === "block") {
        container.style.display = "none";
        btn.innerHTML = "ძიება"
    } else {
        container.style.display = "block";
        btn.innerHTML = "ძიება"
    }
} );