




window.addEventListener('load', async function(){
  const response = await fetch('http://127.0.0.1:8000/api/menu/list', {
    method: 'GET',
    headers: {
        "Authorization": "Bearer " + localStorage.getItem('token')
    }
})
if (response.ok) {
    const datas = await response.json();
    let body=``
    let classSpan=''
    let direct =''
    let idProduct=0
    for (let i=0; i < 6; i++){
        if (datas.data[i]){
        if (datas.data[i].status === 'Disponible'){
           direct='src="../../restaurantApp/public/archivos/'
           classSpan=direct + datas.data[i].image_name+ '"'
           console.log(classSpan)
            body+=` <div class="slider-elemento">
            <img ${classSpan} alt="">
            <p style="color: #dedede; text-align: center;" onclick= window.location.href="'../../views/menu.php'"><b>${datas.data[i].name}</b></p>
          </div>` 
      } 
    }
    }
    document.getElementById('elementos').innerHTML=body
};
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

