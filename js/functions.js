$('.navbar-nav a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;

  $('html, body').animate({
    scrollTop: targetOffset - 100

  }, 150);
})


document.addEventListener('DOMContentLoaded', function() {
  AOS.init({
    duration: 1500, // Duração da animação em milissegundos
    once: true // A animação ocorre apenas uma vez
  });
});
