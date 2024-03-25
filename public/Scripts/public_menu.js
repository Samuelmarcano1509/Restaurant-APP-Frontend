function productList(){
        getProductList();
}
const getProductList = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/menu/list', {
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            
            const datas = await response.json();
            let body=` <div class="title">Platillos</div>`
            let classSpan=''
            let direct =''
            let idProduct=0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]){
                if (datas.data[i].status === 'Disponible'){
                   direct='src="../../restaurantApp/public/archivos/'
                   classSpan=direct + datas.data[i].image_name+ '"'
                   console.log(classSpan)
                    body+=`<div class="col-md-6 col-12">
                    <div class="dish-container">
                        <img class="dish-image" ${classSpan} alt="Imagen del Platillo">
                        <div class="dish-info">
                            <h5>${datas.data[i].name}</h5>
                            <p>${datas.data[i].description}</p>
                            <span>${datas.data[i].amount}</span>
                        </div>
                        <button class="add-button" name="${datas.data[i].id}" id="agregar">Agregar Pedido</button> <!-- Botón Agregar -->
                    </div>
                 </div>` 
              } 
            }
            }
            document.getElementById('cont').innerHTML=body
        
        }else if (response.status === 401) {
            Swal.fire({
              title: 'No autorizado',
              type: 'warning',
              confirmButtonText: 'Entendido'
            }).then(() => {
              window.location.href = '/NeoRestaurante/';
            });
          } else if (response.status === 500) {
            localStorage.removeItem('token');
            Swal.fire({
              title: 'Ha expirado la sesión',
              type: 'error',
              confirmButtonText: 'Ir a Login'
            }).then(() => {
              window.location.href = '/NeoRestaurante/views/Auth/login.php';
            });
          }
    } catch (error) {
        console.log(error)
    }
}