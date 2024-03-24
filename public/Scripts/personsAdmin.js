function getPersons(){
    if(localStorage.getItem('token')){
        personList()
    }else {
        Swal.fire({
          title: 'Ha expirado la sesión',
          type: 'warning',
          confirmButtonText: 'Entendido',
        }).then(() => {
          window.location.href = '/NeoRestaurante/views/Auth/login.php';
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
                $('#table_persons').DataTable();

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
    if (target.getAttribute('id')==='edit'){
        getPerson(elementId)
    }else if(target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});

const getPerson = async(id)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/'+id, {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            console.log(datas)
            document.getElementById('nombre').value=datas.data.first_name
            document.getElementById('apellido').value=datas.data.last_name
            document.getElementById('cedula').value=datas.data.identification_value
            document.getElementById('user').value=datas.data.username
            document.getElementById('telefono').value=datas.data.phone
            document.getElementById('address').value=datas.data.address
            document.getElementById('municipio').value=datas.data.municipality
            document.getElementById('referencia').value=datas.data.reference_point
            document.getElementById('fecha').value=datas.data.birth_date
            document.getElementById('dropdownMenuButton2').value=datas.data.membership
            document.getElementById('email').value=datas.data.email
            document.getElementById('send').name =  datas.data.id
            document.getElementById('dropdownMenuButton').value = datas.data.gender
        }
    } catch (error){
        console.log(error)
    }
}
function sendAdminRegister(){
    adminRegister()
}
const adminRegister = async()=> {
    try{
        const inf ={
            first_name: document.getElementById('nombre1').value,
            last_name:  document.getElementById('apellido1').value,
            identification_value:document.getElementById('identificacion1').value,
            birth_date: document.getElementById('fecha1').value,
            email: document.getElementById('email1').value,
            phone_number: document.getElementById('telefono1').value,
            username: document.getElementById('user1').value,
            password: document.getElementById('password1').value,
            password2:document.getElementById('password2').value,
            gender: document.getElementById('dropdownMenuButton1').value
        }
        const response = await fetch('http://127.0.0.1:8000/api/person/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token')
            },
            body: JSON.stringify(inf),
        })
        const datas = await response.json();
        if (response.status===400){
            Swal.fire({
                title: '¡Error!',
                text: datas.title,
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
        if (response.status===201) {
            Swal.fire({
                title: '¡Registro Realizado!',
                text: datas.title,
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });

        }
    } catch (error){
        Swal.fire({
            title: '¡Ha Ocurrido un Error!',
            text: error,
            type: 'error',
            confirmButtonText: 'Entendido'
        }).then(() => {
            location.reload();
        });
    }
}
function sendPersonEdit(){
    personEdit()
}
const personEdit = async()=> {
    try{
      const inf ={
         first_name:            document.getElementById('nombre').value,
         last_name:             document.getElementById('apellido').value,
         identification_value:  document.getElementById('cedula').value,
         username:              document.getElementById('user').value,
         phone_number:          document.getElementById('telefono').value,
         address:               document.getElementById('address').value,
         birth_date:            document.getElementById('fecha').value,
         membership:            document.getElementById('dropdownMenuButton2').value,
         email:                 document.getElementById('email').value,
         municipality:          document.getElementById('municipio').value,
         reference_point:       document.getElementById('referencia').value,
         gender:                document.getElementById('dropdownMenuButton').value
        }
        console.log(inf)
        const response = await fetch('http://127.0.0.1:8000/api/person/edit/'+document.getElementById('send').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            Swal.fire({
                title: '¡Registros Actualizados!',
                text: 'Los Registros Han Sido Actualizados Exitosamente',
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
    } catch (error){
        console.log(error)
    }
}
function sendPersonDelete(){
    personDelete()
}
const personDelete = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/delete/person/'+document.getElementById('borrar').name, {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            Swal.fire({
                title: '¡Persona Eliminada!',
                text: 'La persona ha sido eliminada satisfactoriamente.',
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
    } catch (error){
        console.log(error)
    }
}