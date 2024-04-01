function productList(){
        getProductList();
        getTotalShoppingCart();
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
                    body+=`<div class="dish-container">
            <img class="dish-image" ${classSpan}  alt="Imagen del Platillo">
            <div class="dish-info">
                <h5>${datas.data[i].name}</h5>
                <p>${datas.data[i].description}</p>
                    <span><b>Precio: ${datas.data[i].amount}</b><span style="margin-left:20px;"><b>Cantidad: <input type="number" min="1" value="1" pattern="^[1-9]\d*$" id="quantity${datas.data[i].id}"/></b></span></span>
            </div>   
            <button class="add-button" name="${datas.data[i].id}" id="agregar">Agregar Pedido</button>
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
      Swal.fire({
        title: 'Error!',
        type: 'error',
        text: error,
        confirmButtonText: 'Aceptar'
    })
    }
}




/*function mostrar(){
  Swal.fire({
    title: 'advertencia',
    type: 'warning',
    text: '¿Esta seguro de eliminar este producto?',
    confirmButtonText: 'Entendido',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    showCloseButton: true,
    
  
  }).then((resultado)=>{
    if(resultado.isConfirmed){
      console.log('aqui')
      deleteProduct();
    }else{
      $('#staticBackdrop').modal('show');
    }
  })
}*/
function ocultar1(){
  $('#staticBackdrop').modal('hide');
 
}
function ocultar2(){
  $('#staticBackdrop2').modal('hide');
 
}
 
function shoppingCart(){
  if(localStorage.getItem('token')){
    getShoppingCart();
  }else{
    Swal.fire({
      title: 'Atencion!',
      type: 'info',
      text: 'Por favor inicie sesion',
      confirmButtonText: 'Entendido'
    }).then(() => {
      window.location.href = '/NeoRestaurante/views/Auth/login.php';
    });
  }
}

const deleteProduct = async()=>{
  try{
    const response = await fetch('http://127.0.0.1:8000/api/delete/shopping/cart/'+ document.getElementById('borrar').name, {
      method: 'POST',
      headers: {
          "Authorization": "Bearer " + localStorage.getItem('token')
      }
  })
  if(response.ok){
    const datas = await response.json();
    Swal.fire({
      title: 'Realizado',
      type: 'success',
      text: datas.title,
      confirmButtonText: 'Aceptar'
    }).then(()=>{
      location.reload();
    })
  }
  }catch{
    Swal.fire({
      title: 'Error',
      type: 'error',
      text: datas.title,
      confirmButtonText: 'Aceptar'
    }).then(()=>{
      location.reload();
    })
  }
}
function deleteproductcar(){
  deleteProduct();
}

const aggProduct = async(productId,quantity,option)=>{
  try{
    
    const inf = {
      quantity: quantity
    }
    console.log(JSON.stringify(inf))
    const response = await fetch('http://127.0.0.1:8000/api/create/shopping/cart/'+productId+'/'+option, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
          "Authorization": "Bearer " + localStorage.getItem('token')
      },
      body:JSON.stringify(inf)
  })
  if(response.ok){
    const datas = await response.json();
    if(option===1)
    {
      Swal.fire({
        title: 'Realizado',
        type: 'success',
        text: datas.title,
        toast: true,
        position: 'bottom-end',
        confirmButtonText: 'Aceptar'
      })
    }else if(option===0)
    {
      Swal.fire({
        title: 'Realizado',
        type: 'success',
        text: 'Carrito Modificado Exitosamente',
        toast: true,
        position: 'bottom-end',
        confirmButtonText: 'Aceptar'
      })
    }
    getTotalShoppingCart()
  }else if(response.status===500){
      Swal.fire({
          title: 'Inicie Sesión',
          type: 'information',
          text: 'Para Poder añadir productos al carrito inicie sesión',
          confirmButtonText: 'Aceptar'
      }).then(()=>{
          window.location.href='../views/Auth/login.php'
      })
  }
  }catch(error){
    Swal.fire({
      title: 'Error',
      type: 'error',
      text: error,
      confirmButtonText: 'Aceptar'
    }).then(()=>{
      location.reload();
    })
  }
}

const getShoppingCart = async()=> {
  try {
      const response = await fetch('http://127.0.0.1:8000/api/shopping/cart', {
          method: 'GET',
          headers: {
              "Authorization": "Bearer " + localStorage.getItem('token')
          }
      })
      if (response.ok) {
          const datas = await response.json();
          let body=''
          let classSpan=''
          let idProduct=0
          for (let i=0; i< Object.keys(datas.data).length;i++){
              if (datas.data[i]){
              if (datas.data[i].status === 'Disponible'){
                  classSpan='class="badge bg-label-success me-1"'
              }else{
                  classSpan='class="badge bg-label-warning me-1"'
              }
              idProduct=datas.data[i].product_id
              body+=`<tr id="${idProduct}">
                      <td>
                          ${datas.data[i].product}
                      </td>
                      <td>
                      <input type="number" min="1" value="${datas.data[i].quantity}" pattern="^[1-9]\d*$" name="${idProduct}" id="quantityChange"/>
                      </td>
                      <td>
                          ${datas.data[i].amount +'$'}
                      </td>
                      <td><div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item btn btn-outline-secondary"  id="delete" data-bs-toggle="modal"data-bs-dismiss="modal" data-bs-target="#staticBackdrop2"  onclick="ocultar1();" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt=""> Eliminar producto</button>
                            </div>
                          </div></td>
                  </tr>`;
          }
          }
        document.getElementById('inf-body').innerHTML=body
        document.getElementById('cant-ord').textContent = "total de productos: " + datas.totalProducts
        document.getElementById('total').textContent = "Monto total: " + datas.total+'$'
        document.getElementById('msg-cant').textContent = "Cantidad de productos: " +datas.totalProducts
        document.getElementById('msg-total').textContent="Total a pagar: " +datas.total + '$'
        document.getElementById('cerrar').name=datas.total
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
    Swal.fire({
      title: 'Error!',
      type: 'error',
      text: error,
      confirmButtonText: 'Aceptar'
  })
  }
}
const getTotalShoppingCart = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/shopping/cart', {
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            document.getElementById('msg-cant').textContent = "Cantidad de productos: " +datas.totalProducts
            document.getElementById('msg-total').textContent="Total a pagar: " +datas.total + '$'
            }
    } catch (error) {
        Swal.fire({
            title: 'Error!',
            type: 'error',
            text: error,
            confirmButtonText: 'Aceptar'
        })
    }
}

const tableBody = document.getElementById("inf-body");

tableBody.addEventListener("input", (event) => {
  const objetivo = event.target;
  const fila = objetivo.closest("tr");
  const idElemento = fila.getAttribute("id");

  
  if (objetivo.type === "number" && objetivo.id === "quantityChange") {
    const nuevoValor = objetivo.value;
    const idProducto = objetivo.name;

    
    if (!/^[0-9]+$/.test(nuevoValor)) {
      
      event.preventDefault();
      Swal.fire({
        title: 'Advertencia',
        type: 'warning',
        toast: true,
        position: 'bottom-end',
        text: 'Solo puedes ingresar numeros',
        confirmButtonText: 'aceptar'
      })
    } else {
      
      if (nuevoValor === "") {
        aggProduct(idProducto, 1, 0);
        getShoppingCart()
      } else {
        aggProduct(idProducto, nuevoValor, 0);
        getShoppingCart()
      }
    }
  }

  // Modificación para click en "delete" (mantenido del código original)
  if (objetivo.getAttribute("id") === "delete") {
    document.getElementById("borrar").name = idElemento;
  }
});
const tableBody3 = document.getElementById("inf-body");

tableBody.addEventListener("click", (event) => {
  const objetivo = event.target;
  const fila = objetivo.closest("tr");
  const idElemento = fila.getAttribute("id");
  // Modificación para click en "delete" (mantenido del código original)
  if (objetivo.getAttribute("id") === "delete") {
    document.getElementById("borrar").name = idElemento;
  }
});


const tableBod2 = document.getElementById("cont");
tableBod2.addEventListener("click", (event) => {
  const target = event.target;
  if(target.id==='agregar')
  {
    var name = 'quantity'+target.name
    var quantity = document.getElementById(name).value
      if (isNaN(parseInt(quantity)) || quantity < 0) {
          Swal.fire({
              title: 'Atención',
              type: 'warning',
              text: "Por favor ingrese una cantidad valida",
              toast: true,
              position: 'bottom-end',
              confirmButtonText: 'Aceptar'
          })
      }else {
          aggProduct(target.name,quantity,1)
      }
  }

});
