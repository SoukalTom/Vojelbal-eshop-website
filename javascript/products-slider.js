var slideIndex = 1;
var timeout;
showSlides();

function plusSlides(n) {
    showSlides(slideIndex += n);
  }

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("product-slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    if (slideIndex < 1) {slideIndex = 3}
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
}