// Get the container element
let btnContainer = document.getElementById("navbarNav");

// Get all buttons with class="btn" inside the container
let btns = btnContainer.getElementsByClassName("nav-item-attr");

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}