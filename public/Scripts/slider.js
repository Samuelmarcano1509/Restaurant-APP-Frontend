window.addEventListener('load', function(){
    new Glider(document.querySelector('.slider-contenido'), {
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: '.slider-indicadores',
        arrows: {
          prev: '.left',
          next: '.right'
        },
        
      });
})

