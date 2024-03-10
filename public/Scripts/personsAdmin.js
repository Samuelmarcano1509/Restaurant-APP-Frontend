function getPersons(){
    if(localStorage.getItem('token')){
        personList()
    }else{
        alert('Ha expirado la sesión');
        window.location.href = '/NeoRestaurante/views/Auth/login.php'
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
               console.log(datas.data) 
                for (let i=0; i< Object.keys(datas.data).length;i++){
                    body+=`<tr>
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
                              <button class="dropdown-item btn btn-outline-secondary"  id="pruebamodal" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt="" > Eliminar </button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
                }

                document.getElementById('inf-body').innerHTML=body
            }else if(response.status===401){
                alert('No autorizado');
                window.location.href='/NeoRestaurante/'
            }else if(response.status===500){
                localStorage.removeItem('token')
                alert('Ha expirado la sesión');
                window.location.href='/NeoRestaurante/views/Auth/login.php'
            }
    } catch (error){ 
        console.log(error)
}
}