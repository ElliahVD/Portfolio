// Get the container element
let btnContainer = document.getElementById("nav-menu");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav__link");
// Loop through the buttons and add the active class to the current/clicked button

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}