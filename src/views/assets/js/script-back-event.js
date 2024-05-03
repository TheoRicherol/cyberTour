let knowMoreButton = document.querySelectorAll(".kn-handler");


knowMoreButton.forEach((button, index1) => {
    button.addEventListener('click', function (evt) {
            evt.preventDefault()

            let knowMoreText = document.querySelectorAll(".kn-infos");
            knowMoreText.forEach((text, index2) => {
                if (index1 === index2) {

                    if (matchMedia("(orientation: portrait)").matches) {
                        console.log("coucou")
                        text.classList.toggle("kn-closed")
                        button.classList.toggle("not-rounded")
                        button.parentElement.classList.toggle("desktop-fixed-know-more")
                    } else if (matchMedia("(orientation: landscape")){
                        let parent = button.parentNode.parentNode,
                            grandparent = button.parentNode.parentNode.parentNode,
                            knowMoreNode = parent.children,
                            videoContainer = knowMoreNode[0].children[0];
                        parent.classList.toggle("itw-card-modal")
                        grandparent.classList.toggle("itw-card-container-opened")
                        videoContainer.classList.toggle("no-margin-desktop")
                    }
                    if (button.textContent === "En savoir plus") {
                        button.innerHTML = `<i class="fa-sharp fa-solid fa-circle-xmark" style="color: #ffffff;"></i>`
                    } else {
                        button.innerHTML = `En savoir plus<i class="fa-solid fa-chevron-down fa-fw" style="color: #ffffff;"></i>`
                    }
                    //
                }
            })

        }
    )
})


