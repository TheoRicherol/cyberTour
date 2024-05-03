
// Define observers

let options = {
        root: document.querySelector("#scrollArea"),
        rootMargin: "0px",
        threshold: 1
    },
    cardsImages = document.querySelectorAll(".cards-images > img");
cardsBgBlue = document.querySelectorAll(".cards-images > .bg-img-blue-gradient");

function handleIntersectImg(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            console.log(entry.target)
            if (entry.target.matches("img")) {
                entry.target.classList.add("img-rotated")
                entry.target.style.transitionDelay = (index * 250) + "ms"
            }
        }
    })
}

function handleIntersectBgBlue(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            console.log(entry.target)

            entry.target.classList.add("bg-img-blue-gradient-rotated")
            entry.target.style.transitionDelay = (index * 250) + "ms"

        }
    })
}

let observerImg = new IntersectionObserver(handleIntersectImg, options);
let observerBgBlue = new IntersectionObserver(handleIntersectBgBlue, options);

window.addEventListener("load", function () {
    cardsImages.forEach(image => {
        observerImg.observe(image);
    })
    cardsBgBlue.forEach(bgblue => {
        observerBgBlue.observe(bgblue);
    })


})
