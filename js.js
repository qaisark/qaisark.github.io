var nav = document.querySelector('nav');
window.addEventListener('scroll', function () {
  if (window.pageYOffset > -10) {
    nav.classList.add(
      'bg-info',
      'shadow-lg',
      'border-bottom',
      'border-2',
      'border-dark'
    );
  } else {
    nav.classList.remove(
      'bg-info',
      'shadow-lg',
      'border-bottom',
      'border-2',
      'border-dark'
    );
  }
});

//tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

function myFunction() {
  var dots = document.getElementById('dots');
  var moreText = document.getElementById('more');
  var btnText = document.getElementById('myBtn');

  if (dots.style.display === 'none') {
    dots.style.display = 'inline';
    btnText.innerHTML = '';
    moreText.style.display = 'none';
  } else {
    dots.style.display = 'none';
    btnText.innerHTML = '';
    moreText.style.display = 'inline';
  }
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('demo');
  var captionText = document.getElementById('caption');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(
      ' active',
      ''
    );
  }
  slides[slideIndex - 1].style.display = 'block';
  dots[slideIndex - 1].className += ' active';
  captionText.innerHTML = dots[slideIndex - 1].alt;
}
