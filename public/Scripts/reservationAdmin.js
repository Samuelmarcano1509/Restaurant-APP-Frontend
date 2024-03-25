function getUsers(){
    if(localStorage.getItem('token')){
        userList()
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
function getReservations()
{
reservationsList()
}
const reservationsList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/reservation/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let body=''
            let reservationId=0
            console.log(datas.data)
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    reservationId=datas.data[i].id
                    body += `<tr id="${reservationId}">
                        <td>
                            ${datas.data[i].names}
                        </td>
                        <td>
                            ${datas.data[i].table}
                        </td>
                        <td>
                            ${datas.data[i].status}
                        </td>
                        <td>
                            ${datas.data[i].date}
                        </td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                            <button class="dropdown-item btn btn-outline-secondary" id="edit" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/file-pen.svg" style="width: 15px; heigth: 15px;" alt="" > Editar</button>
                              <button class="dropdown-item btn btn-outline-secondary"  id="delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt=""> Eliminar reservación</button>
                            </div>
                          </div>
                        </td>
                        </td>
                    </tr>`;
                }
            }

            document.getElementById('inf-body').innerHTML=body
            $('#table_reservation').DataTable();

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
const userList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let option = ''
            let index =0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    index++
                    option += `<option value="${datas.data[i].id}">${index +'-'+ datas.data[i].names+' '+datas.data[i].identification_value}</option>`
                }
            }
            const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
                method: 'POST'
            })
            if (response2.ok)
            {
                const data = await response2.json();
                let options = ''
                for (let i=0; i< Object.keys(data.data).length;i++){
                    if (data.data[i]) {
                        options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
                    }
                }
                document.getElementById('dropdownMenuButton4').innerHTML=options
            }
            document.getElementById('dropdownMenuButton3').innerHTML=option

        }
    } catch (error){
        Swal.fire({
            title: 'Ha ocurrido un error',
            text: error,
            type: 'warning',
            confirmButtonText: 'Entendido',
        }).then(() => {
            window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
    }
}
function reservationTable()
{
    sendReservation();
}
const sendReservation = async()=> {
    try{
        const inf ={
            hour: document.getElementById('hora2').value,
            date:  document.getElementById('fecha3').value,
            table:document.getElementById('dropdownMenuButton4').value,
            user: document.getElementById('dropdownMenuButton3').value
        }
        const response = await fetch('http://127.0.0.1:8000/api/reservation/create', {
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
                icon: 'success',
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
document.getElementById('fecha3').addEventListener('change',function (e) {
    document.getElementById('dropdownMenuButton4').innerHTML=''
    const date = document.getElementById('fecha3').value
    updateTable(date,4)
})
document.getElementById('fecha4').addEventListener('change',function (e) {
    document.getElementById('dropdownMenuButton7').innerHTML=''
    const date = document.getElementById('fecha4').value
    updateTable(date,7)
})
const updateTable=async(date,option)=>{
    const inf={
        date: date
    }
    console.log(inf)
    const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(inf)
    })
    if (response2.ok)
    {
        const data =  await response2.json();
        let options = ''
        for (let i=0; i< Object.keys(data.data).length;i++){
            if (data.data[i]) {
                options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
            }
        }
        document.getElementById('dropdownMenuButton'+option).innerHTML=options
    }
}
const tableBody = document.getElementById("inf-body");
tableBody.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    console.log(elementId)
    if (target.getAttribute('id')==='edit'){
        userList2(elementId)
    }else if(target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});
function deleteReservation(){
    sendReservationDelete()
}
const sendReservationDelete = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/delete/reservation/'+document.getElementById('borrar').name, {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const data =  await response.json();
            Swal.fire({
                title: '¡Persona Eliminada!',
                text: data.title,
                icon: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
    } catch (error){
        Swal.fire({
            title: '¡Ha Ocurrido un Error!',
            text: error,
            icon: 'warning',
            confirmButtonText: 'Entendido'
        }).then(() => {
            location.reload();
        });
    }
}
const userList2 = async(elementId)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let option = ''
            let index =0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    index++
                    option += `<option value="${datas.data[i].id}">${index +'-'+ datas.data[i].names+' '+datas.data[i].identification_value}</option>`
                }
            }
            const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
                method: 'POST'
            })
            if (response2.ok)
            {
                const data = await response2.json();
                let options = ''
                for (let i=0; i< Object.keys(data.data).length;i++){
                    if (data.data[i]) {
                        options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
                    }
                }
                document.getElementById('dropdownMenuButton7').innerHTML=options
            }
            document.getElementById('dropdownMenuButton6').innerHTML=option
            const response3 = await fetch('http://127.0.0.1:8000/api/reservation/'+elementId, {
                method: 'GET',
                headers:{
                    "Authorization": "Bearer " + localStorage.getItem('token')
                }
            })
            if (response3.ok){
                const data3 = await response3.json();
                console.log(data3.data)
                document.getElementById('dropdownMenuButton6').value=data3.data.person
                document.getElementById('dropdownMenuButton7').value=data3.data.table
                document.getElementById('fecha4').value=data3.data.date
                document.getElementById('hora4').value=data3.data.hour
                console.log(data3.data.hour)
                document.getElementById('send').name=elementId
            }
        }
    } catch (error){
        Swal.fire({
            title: 'Ha ocurrido un error',
            text: error,
            type: 'warning',
            confirmButtonText: 'Entendido',
        }).then(() => {
            window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
    }
}
function editReservation(){
    sendEditReservation()
}
const sendEditReservation = async()=> {
    try{
        const inf ={
            person:            document.getElementById('dropdownMenuButton6').value,
            table:             document.getElementById('dropdownMenuButton7').value,
            date:  document.getElementById('fecha4').value,
            hour:              document.getElementById('hora4').value,
            status:          document.getElementById('dropdownMenuButton9').value,
        }
        console.log(inf)
        const response = await fetch('http://127.0.0.1:8000/api/edit/reservation/'+document.getElementById('send').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            const data = await response.json();
            if (response.status===400){
                Swal.fire({
                    title: '¡Ha Ocurrido un Error!',
                    text: data.title,
                    type: 'warning',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }else if (response.status===200){
                Swal.fire({
                    title: '¡Reservación Actualizada!',
                    text: data.title,
                    type: 'success',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }
        }
    } catch (error){
        console.log(error)
    }
}
