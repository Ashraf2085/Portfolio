const images = [
    "image/aurore_boreale.jpg",
    "image/aurore_boreale1.png",
    "image/aurore_boreale2.png"
]
let index = 0
const back = document.querySelector('.image')
function changeBackground() {
    back.style.backgroundImage = `url(${images[index]})`;
    index = (index + 1) % images.length
}
changeBackground()
setInterval(changeBackground, 5000)

window.onscroll = function() { scrollFunction() };


function scrollFunction() {
    const btn = document.getElementById("topBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    }else {
        btn.style.display = 'none';
    }
}
function topFunction() {
    window.scrollTo({top: 0, behavior: "smooth"});
}
