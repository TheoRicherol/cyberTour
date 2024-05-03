let burgerMenu = document.querySelector(".burger-action"),
    lines = document.querySelectorAll(".line"),
    header = document.querySelector("header");

function burgerHandler() {
    burgerMenu.addEventListener("click", function () {
        lines.forEach((lines, index) => {

            if (lines.classList.contains("line" + (index + 1) + "-open")) {
                lines.classList.replace(("line" + (index + 1) + "-open"), ("line" + (index + 1) + "-close"))
                header.classList.remove("closed")

            } else if (lines.classList.contains("line" + (index + 1) + "-close")) {
                lines.classList.replace(("line" + (index + 1) + "-close"), ("line" + (index + 1) + "-open"))
                header.classList.add("closed")
            }
        })
    })
}

burgerHandler()


let scheduledAnimationFrame,
    nav = document.querySelector("#nav")

function readAndUpdatePage() {
    let lastScrollY = window.scrollY;
    if (lastScrollY >= 100) {
        nav.style.backgroundColor = "rgba(0,0,0,0.5)"
    } else {
        nav.style.backgroundColor = "transparent"
    }
    scheduledAnimationFrame = false;
}

function onScroll(evt) {
    if (scheduledAnimationFrame) {
        return;
    }
    scheduledAnimationFrame = true;
    requestAnimationFrame(readAndUpdatePage);
}

window.addEventListener('scroll', onScroll);
