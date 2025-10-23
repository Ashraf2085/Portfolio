const images = [
    "image/aurore_boreale.jpg",
    "image/aurore_boreale1.png",
    "image/aurore_boreale2.png"
]
let index = 0
const back = document.querySelector('.image')
function changeBackground() {
    back.style.backgroundImage = `url(${images[index]})`
    index = (index + 1) % images.length
}
changeBackground()
setInterval(changeBackground, 5000)
