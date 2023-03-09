let toggleBtn = document.querySelector(".toggle-key");
let menu = document.querySelector(".flex");
let line = document.querySelector(".line");

toggleBtn.addEventListener("click", function () {
    if (menu.style.display === "") {
        menu.style.display = "flex";
        line.style.display = "block";
    } else if (menu.style.display === "none") {
        menu.style.display = "flex";
        line.style.display = "block";
    } else {
        menu.style.display = "none";
        line.style.display = "none";
    }
});
