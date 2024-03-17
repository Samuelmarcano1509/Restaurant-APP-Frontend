function getPersons(){
    if(localStorage.getItem('token')){
        personList()
    }else {
        Swal.fire({
          title: 'Ha expirado la sesión',
          type: 'warning',
          confirmButtonText: 'Entendido',
        }).then(() => {
          window.location.href = '../../views/Auth/login.php';
        });
      }
}
const personList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
            })
            if (response.ok) {
                const datas = await response.json();
                    let body=''
                    let personid=0
               console.log(datas.data) 
                for (let i=0; i< Object.keys(datas.data).length;i++){
                    if (datas.data[i]) {
                        personid=datas.data[i].id
                        body += `<tr id="${personid}">
                        <td>
                            ${datas.data[i].names}
                        </td>
                        <td>
                            ${datas.data[i].identification_value}
                        </td>
                        <td>
                            ${datas.data[i].username}
                        </td>
                        <td>
                            ${datas.data[i].gender}
                        </td>
                        <td>
                         <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                            <button class="dropdown-item btn btn-outline-secondary" id="edit" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter" >
                            <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/file-pen.svg" style="width: 15px; heigth: 15px;" alt="" >Editar</button>
                              <button class="dropdown-item btn btn-outline-secondary"  id="delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt="" > Eliminar </button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
                    }
                    }

                document.getElementById('inf-body').innerHTML=body
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
    } catch (error){ 
        console.log(error)
 }
}
const tableBody = document.getElementById("inf-body");
tableBody.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    console.log(elementId)
    if (target.getAttribute('id')==='edit'){
        getProduct(elementId)
    }else if(target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});