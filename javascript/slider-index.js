
var slideIndex = 0;
var timeout;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    timeout = setTimeout(showSlides, 10000);
}

// --------- manual slider --------
function changeToImg1(){
    slideIndex = 0;
    clearTimeout(timeout);
    showSlides();
}

function changeToImg2(){
    slideIndex = 1;
    clearTimeout(timeout);
    showSlides();
}

function changeToImg3(){
    slideIndex = 2;
    clearTimeout(timeout);
    showSlides();
}





//var i = 0;
//var images = [];
//var time = 3000;

//images[0] = 'images/slide-show/main1.jpg';
//images[1] = 'images/slide-show/main2.jpg';
//images[2] = 'images/slide-show/main3.jpg';

//function changeImg(){
  //  document.getElementById('slider1').src = images[i];

  //  if(i < images.length - 1){
  //      i++;
  //  } else {
  //      i = 0;
  //  }
  //  setTimeout("changeImg()", time)
//}

//window.onload = changeImg;

// --------- manual slider --------
//function changeToImg1(){
  //  i = 0;
  //  document.getElementById('slider1').src = images[i];
  //  document.getElementById('slider-btn1').className.replace("active", "")
//}

//function changeToImg2(){
  //  i = 1;
  //  document.getElementById('slider').src = images[i];
//}

//function changeToImg3(){
  //  i = 2;
  //  document.getElementById('slider').src = images[i];
//}







    



    
    