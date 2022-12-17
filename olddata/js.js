var nav = document.querySelector('nav');
window.addEventListener('scroll', function () {
  if (window.pageYOffset > 0) {
    nav.classList.add(
      'bg-light',
      'shadow-lg',
      'border-bottom',
      'border-2',
      'border-primary'
    );
  } else {
    nav.classList.remove(
      'bg-light',
      'shadow-lg',
      'border-bottom',
      'border-2',
      'border-primary'
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
